<?php

class ControllerApiAkaunting extends Controller {

 // ********** Create User
	public function createUser($data) {

         $data = array();
		  $data['contact_id'] = "1";
         $data['type'] = 'vendor';

        $this->load->model('api/akaunting');

		$background_curl_params = $data;

		if (isset($data['contact_id'])) {
			$background_curl_params['contact_id'] = $data['contact_id'];
			// if we have the contact id then update the contact details based on the contact id details
			$background_curl_params = $this->model_api_akaunting->getContactDetails($data);			
		}else{
			//check if the contact already exists using customer id or seller id
			$contact_details = $this->model_api_akaunting->getContactID($data);
			if (!empty($contact_details)) {
				$background_curl_params['contact_id'] = $contact_details['id'];
				$background_curl_params = $this->model_api_akaunting->getContactDetails($data);			
			}
		}

		$background_curl_params['company_id'] = "1";
		$background_curl_params['user_id'] = (isset($data['customer_id']) ? $data['customer_id'] : isset($data['seller_id'])) ? $data['seller_id'] : NULL;
		$background_curl_params['website'] = NULL;
		$background_curl_params['enabled'] = '1';

		if ($data['type'] == 'customer') {
			$background_curl_params['search'] = "type:customer";
			$background_curl_params['type'] = "customer";
		}elseif ($data['type'] == 'vendor') {
			$background_curl_params['search'] = "type:vendor";
			$background_curl_params['type'] = "vendor";
		}

		if (isset($background_curl_params['company_id']) and isset($background_curl_params['email'])) {

			if (isset($background_curl_params['contact_id'])) {
				// update existing contact
		        $background_curl_url = HTTPS_SERVER . "akaunting/api/contacts/".$background_curl_params['contact_id'];
		        $background_curl_method = 'PUT';
			}else{ // add contact
		        $background_curl_url = HTTPS_SERVER . "akaunting/api/contacts";
		        $background_curl_method = 'POST';				
			}

	        $response = $this->curlPostRequest($background_curl_url,$background_curl_params,$background_curl_method);

            if (isset($response['responseType']) and $response['responseType'] == 'success' and isset($response['response']['message']) and $response['response']['message'] != "") {
	            $this->dblog->insert(
	                array(
	                    'error_type_name'   =>  'akaunting_add_update_contact', // *required | check oc_error_type_id table or add an entry to it
	                    'priority_id'       =>  1, // *required | check oc_priority_id
	                    'location'          =>  __FUNCTION__,     // *required 
	                    'error_message'     =>  $response['response']['message'],     // *required 
	                    'notify'            =>  1,           
	                    'customer_id'       =>  NULL,       
	                    'seller_id'         =>  NULL,
	                    'order_id'          =>  NULL,
	                    'product_id'        =>  NULL,
	                    'shipment_id'       =>  NULL,
	                    'socially_id'       =>  NULL,
	                    'contact_id'    =>  NULL,
	                    'other_reference_ids'  =>  (isset($background_curl_params['contact_id'])) ? 'contact_id=' . $background_curl_params['contact_id'] : 'contact_name = ' . $background_curl_params['name'] , // other reference ids 
	                    'notes'             =>  NULL, // other notes and references 
	                )
	            ); 
            }
	    }

	    return $response;
	}

	 



	// ********** Get Akaunting Invoices
	public function getInvoices() {

        $this->load->model('api/akaunting');

        $data['type'] = "sale";
        // $data['type'] = "purchase";

		$background_curl_params = array();

		$background_curl_params['company_id'] = "1";

		if ($data['type'] == 'sale') {
			$background_curl_params['search'] = "type:invoice";
		}elseif ($data['type'] == 'purchase') {
			$background_curl_params['search'] = "type:bill";
		}

		if (isset($background_curl_params['company_id'])) {

	        $background_curl_url = HTTPS_SERVER . "akaunting/api/documents";
	        $background_curl_method = 'GET';

	        $response = $this->curlGetRequest($background_curl_url,$background_curl_params);

            if (isset($response['responseType']) and $response['responseType'] == 'success' and isset($response['response']['message']) and $response['response']['message'] != "") {
	            $this->dblog->insert(
	                array(
	                    'error_type_name'   =>  'akaunting_get_invoices', // *required | check oc_error_type_id table or add an entry to it
	                    'priority_id'       =>  1, // *required | check oc_priority_id
	                    'location'          =>  __FUNCTION__,     // *required 
	                    'error_message'     =>  $response['response']['message'],     // *required 
	                    'notify'            =>  1,           
	                    'customer_id'       =>  NULL,       
	                    'seller_id'         =>  NULL,
	                    'order_id'          =>  NULL,
	                    'product_id'        =>  NULL,
	                    'shipment_id'       =>  NULL,
	                    'socially_id'       =>  NULL,
	                    'invoice_id'    =>  NULL,
	                    'other_reference_ids'  =>  NULL, // other reference ids 
	                    'notes'             =>  NULL, // other notes and references 
	                )
	            ); 
            }
	    }
	}


	// ********** Get Akaunting Invoice Details
	public function getInvoiceDetails() {

        $this->load->model('api/akaunting');

        $data['type'] = "sale";
        // $data['type'] = "purchase";
		$data['invoice_id'] = "1";

		$background_curl_params = array();
		$background_curl_params['company_id'] = "1";
		$background_curl_params['invoice_id'] = $data['invoice_id'];

		if ($data['type'] == 'sale') {
			$background_curl_params['search'] = "type:invoice";
		}elseif ($data['type'] == 'purchase') {
			$background_curl_params['search'] = "type:bill";
		}

		if (isset($background_curl_params['invoice_id'])) {

	        $background_curl_url = HTTPS_SERVER . "akaunting/api/documents/" . $background_curl_params['invoice_id'];
	        $background_curl_method = 'GET';

	        $response = $this->curlGetRequest($background_curl_url,$background_curl_params);

            if (isset($response['responseType']) and $response['responseType'] == 'success' and isset($response['response']['message']) and $response['response']['message'] != "") {
	            $this->dblog->insert(
	                array(
	                    'error_type_name'   =>  'akaunting_get_invoices', // *required | check oc_error_type_id table or add an entry to it
	                    'priority_id'       =>  1, // *required | check oc_priority_id
	                    'location'          =>  __FUNCTION__,     // *required 
	                    'error_message'     =>  $response['response']['message'],     // *required 
	                    'notify'            =>  1,           
	                    'customer_id'       =>  NULL,       
	                    'seller_id'         =>  NULL,
	                    'order_id'          =>  NULL,
	                    'product_id'        =>  NULL,
	                    'shipment_id'       =>  NULL,
	                    'socially_id'       =>  NULL,
	                    'invoice_id'    =>  NULL,
	                    'other_reference_ids'  =>  NULL, // other reference ids 
	                    'notes'             =>  NULL, // other notes and references 
	                )
	            ); 
            }
	    }
	}

  

 

	// ********** Add invoice
	public function addInvoice($data) {

        $this->load->model('api/akaunting');

		$background_curl_params = $data;

		if ($data['type'] == 'sale') {
			$background_curl_params['search'] = "type:invoice";
			$background_curl_params['type'] = "invoice";
			$background_curl_params['category_id'] = "3";
		}elseif ($data['type'] == 'purchase') {
			$background_curl_params['search'] = "type:bill";
			$background_curl_params['type'] = "bill";
			$background_curl_params['category_id'] = "7";
		}

		if (isset($background_curl_params['company_id']) and isset($background_curl_params['contact_id']) and isset($background_curl_params['contact_name'])) {

	        $background_curl_url = HTTPS_SERVER . "akaunting/api/documents";
	        $background_curl_method = 'POST';				

	        $response = $this->curlPostRequest($background_curl_url,$background_curl_params,$background_curl_method);

            if (isset($response['responseType']) and $response['responseType'] == 'success' and isset($response['response']['message']) and $response['response']['message'] != "") {
	            $this->dblog->insert(
	                array(
	                    'error_type_name'   =>  'akaunting_add_invoice', // *required | check oc_error_type_id table or add an entry to it
	                    'priority_id'       =>  1, // *required | check oc_priority_id
	                    'location'          =>  __FUNCTION__,     // *required 
	                    'error_message'     =>  $response['response']['message'],     // *required 
	                    'notify'            =>  1,           
	                    'customer_id'       =>  NULL,       
	                    'seller_id'         =>  NULL,
	                    'order_id'          =>  NULL,
	                    'product_id'        =>  NULL,
	                    'shipment_id'       =>  NULL,
	                    'socially_id'       =>  NULL,
	                    'invoice_id'    =>  NULL,
	                    'other_reference_ids'  =>  'invoice_id=' . $background_curl_params['document_number'] , // other reference ids 
	                    'notes'             =>  NULL, // other notes and references 
	                )
	            ); 
            }
	    }
	}


	// ********** Add or Update invoice
	public function updateInvoice($data) {

        $this->load->model('api/akaunting');
        //these data are static
        $data = array();
        $data['invoice_id'] = "1";
        $data['contact_id'] = "1";
        $data['company_id'] = "1";
        $data['contact_name'] = "Apurba Misra";
        $data['contact_email'] = "apurbamail@gmail.com";
        $data['contact_phone'] = "1234567890";
        $data['contact_tax_number'] = "1";
        $data['contact_address'] = "test"; 
        $data['order_number'] = "1";
        $data['status'] = "1";
        $data['currency_code'] = "1";
        $data['currency_rate'] = "1";
        $data['issued_at'] = "2023-10-03 11:54:38";
        $data['due_at'] = "2023-10-03 11:54:38";
        $data['currency_code'] = "1";
        $data['type']  = "invoice";

        // get Document details
        $document_details = $this->model_api_akaunting->getInvoiceIDFromDocumentNumber(array('document_number' => $data['invoice_id'], 'type' => $data['type']));

		$background_curl_params = array();

		$background_curl_params['document_number'] = $data['invoice_id'];
		$background_curl_params['document_id'] = $document_details['id'];

		if (isset($data['currency_code'])) {
			$background_curl_params['company_id'] = $data['company_id'];
		}else{
			$background_curl_params['company_id'] = $document_details['company_id'];			
		}

		if (isset($data['contact_id'])) {
			$background_curl_params['contact_id'] = $data['contact_id'];
		}else{
			$background_curl_params['contact_id'] = $document_details['contact_id'];			
		}

		if (isset($data['contact_id'])) {
			$background_curl_params['contact_id'] = $data['contact_id'];
		}else{
			$background_curl_params['contact_id'] = $document_details['contact_id'];			
		}

		if (isset($data['contact_name'])) {
			$background_curl_params['contact_name'] = $data['contact_name'];
		}else{
			$background_curl_params['contact_name'] = $document_details['contact_name'];			
		}

		if (isset($data['contact_email'])) {
			$background_curl_params['contact_email'] = $data['contact_email'];
		}else{
			$background_curl_params['contact_email'] = $document_details['contact_email'];			
		}

		if (isset($data['contact_phone'])) {
			$background_curl_params['contact_phone'] = $data['contact_phone'];
		}else{
			$background_curl_params['contact_phone'] = $document_details['contact_phone'];			
		}

		if (isset($data['contact_tax_number'])) {
			$background_curl_params['contact_tax_number'] = $data['contact_tax_number'];
		}else{
			$background_curl_params['contact_tax_number'] = $document_details['contact_tax_number'];			
		}

		if (isset($data['contact_address'])) {
			$background_curl_params['contact_address'] = $data['contact_address'];
		}else{
			$background_curl_params['contact_address'] = $document_details['contact_address'];			
		}

		if (isset($data['order_number'])) {
			$background_curl_params['order_number'] = $data['order_number'];
		}else{
			$background_curl_params['order_number'] = $document_details['order_number'];			
		}
		if (isset($data['status'])) {
			$background_curl_params['status'] = strtolower($data['status']);
		}else{
			$background_curl_params['status'] = strtolower($document_details['status']);			
		}
	 
		$background_curl_params['amount'] = 0;

		if (isset($data['currency_code'])) {
			$background_curl_params['currency_code'] = $data['currency_code'];
		}else{
			$background_curl_params['currency_code'] = $document_details['currency_code'];
		}
		if (isset($data['currency_rate'])) {
			$background_curl_params['currency_rate'] = $data['currency_rate'];
		}else{
			$background_curl_params['currency_rate'] = $document_details['currency_rate'];
		}
		if (isset($data['issued_at'])) {
			$background_curl_params['issued_at'] = $data['issued_at'];
		}else{
			$background_curl_params['issued_at'] = $document_details['issued_at'];
		}
		if (isset($data['due_at'])) {
			$background_curl_params['due_at'] = $data['due_at'];
		}else{
			$background_curl_params['due_at'] = $document_details['due_at'];
		}
      
		

		if ($data['type'] == 'invoice') {
			$background_curl_params['search'] = "type:invoice";
			$background_curl_params['type'] = "invoice";
			$background_curl_params['category_id'] = isset($data['category_id']) ? $data['category_id'] : "3";
		  if (isset($data['items'])) {
            $background_curl_params['items'] = $data['items'];
          }else{
           $invoice_item_details = $this->model_api_akaunting->getInvoiceItemDetails($data);
		   $background_curl_params['items'] = $invoice_item_details['sales_items'];
           }
		}elseif ($data['type'] == 'bill') {
			$background_curl_params['search'] = "type:bill";
			$background_curl_params['type'] = "bill";
			$background_curl_params['category_id'] = isset($data['category_id']) ? $data['category_id'] : "7";
           if (isset($data['items'])) {
             $background_curl_params['items'] = $data['items'];
           }else{
            $invoice_item_details = $this->model_api_akaunting->getInvoiceItemDetails($data);
		    $background_curl_params['items'] = $invoice_item_details['purchase_items'];
		  }
			
		}

		$this->log->write("Update invoice values: " . print_r($background_curl_params, true));

		if (isset($background_curl_params['company_id']) and isset($background_curl_params['document_id'])) {

	        $background_curl_url = HTTPS_SERVER . "akaunting/api/documents/".$background_curl_params['document_id'];
	        $background_curl_method = 'PATCH';

	        $response = $this->curlPostRequest($background_curl_url,$background_curl_params,$background_curl_method);

              $this->log->write("Update invoice curl response: " . print_r($response, true));

            if (isset($response['responseType']) and $response['responseType'] == 'success' and isset($response['response']['message']) and $response['response']['message'] != "") {
	            $this->dblog->insert(
	                array(
	                    'error_type_name'   =>  'akaunting_add_update_invoice', // *required | check oc_error_type_id table or add an entry to it
	                    'priority_id'       =>  1, // *required | check oc_priority_id
	                    'location'          =>  __FUNCTION__,     // *required 
	                    'error_message'     =>  $response['response']['message'],     // *required 
	                    'notify'            =>  1,           
	                    'customer_id'       =>  NULL,       
	                    'seller_id'         =>  NULL,
	                    'order_id'          =>  NULL,
	                    'product_id'        =>  NULL,
	                    'shipment_id'       =>  NULL,
	                    'socially_id'       =>  NULL,
	                    'invoice_id'    =>  NULL,
	                    'other_reference_ids'  =>  (isset($background_curl_params['document_number'])) ? 'invoice_id=' . $background_curl_params['document_number'] : 'N/A ' , // other reference ids 
	                    'notes'             =>  NULL, // other notes and references 
	                )
	            ); 
            }
	    }
	}



 


	 

	/*
	 * Initiates a curl request.
	 *
	 * @param string $url The url to call
	 * @param array $post_parameters The parameters to be passed in the curl request 
	 * @param array $additional_headers Additional headers to be passed in the curl request. NULL = no encoding
	 * @param array $encoding Types of coding to be applied to the data in the curl request. NULL = simple post request
	 	Accepted values = base64
	 	Default json data is sent 
	 */
    public function curlPostRequest($url, $post_parameters, $post_method , $additionalHeaders = NULL, $encoding = NULL){

        try {

	        $returnArray = array();

	        $this->load->model('api/akaunting');
			$api_key = $this->model_api_akaunting->getAPIKey();

	        //cURL Request
	        $ch = curl_init();

			$payload = http_build_query($post_parameters);

	        if(!empty($additionalHeaders) and !is_null($additionalHeaders)){
	            for($i = 0; $i< count($additionalHeaders); $i++){
	                $headers[] = $additionalHeaders[$i];
	            }
	        }

			$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	        $verbose = fopen(DIR_STORAGE . '/logs/curl_error.log', 'w+');

			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		       $command = "curl -X ".$post_method." -d \"".$payload."\" -u apurba.cnb@gmail.com:apurba.cnb@gmail.com --basic " . $url . " ";
			} else {
		       $command = "curl -X ".$post_method." -d \"".$payload."\" -u apurba.cnb@gmail.com:apurba.cnb@gmail.com --basic " . $url . "  2> /dev/null & ";
			}
	       
	       $result = json_decode(exec($command));

			// $this->log->write('Response: ' . print_r($result, true));
	        //  echo "<br> command: " . $command ;
	        //  echo "<br> params: " ; print_r($post_parameters) ;
	        //  echo "<br> response: " ; print_r($result) ; exit;

	        if (empty($result) or $result = "") {
	            $responseType = "error";
	            $error = 'Curl error: ' . curl_error($ch);
	            $returnArray['responseType'] = $responseType;
	            $returnArray['response'] = $error;
	        } else {
	            //Response is plain text
                $responseType = "success";
                $returnArray['responseType'] = $responseType;
                $returnArray['response'] = $result;
	        }

	        //close connection
        	curl_close($ch);
 	    } catch (Exception $e) {
	        $responseType = "error";
	        $error = "CURL request failed for some reason";
	        $returnArray['responseType'] = $responseType;
	        $returnArray['response'] = $error;
	    }

	    return $returnArray;
	}



	 

	/*
	 * Initiates a curl request.
	 *
	 * @param string $url The url to call
	 * @param array $post_parameters The parameters to be passed in the curl request 
	 * @param array $additionalHeaders Any additional headers that need to be passed in the curl request 
	 */
    public function curlGetRequest($url, $post_parameters = NULL, $additionalHeaders = NULL){

        try {

	        $returnArray = array();

	        $this->load->model('api/akaunting');
			$api_key = $this->model_api_akaunting->getAPIKey();

	        if(!empty($additionalHeaders) and !is_null($additionalHeaders)){
	            for($i = 0; $i< count($additionalHeaders); $i++){
	                $headers[] = $additionalHeaders[$i];
	            }
	        }

			$payload = urldecode(http_build_query($post_parameters));
	        $verbose = fopen(DIR_STORAGE . '/logs/curl_error.log', 'w+');
 
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
		        $command = 'curl --get -d "' . $payload . '" -u apurba.cnb@gmail.com:apurba.cnb@gmail.com --basic ' . $url ;
			} else {
		        $command = 'curl --get -d "' . $payload . '" -u apurba.cnb@gmail.com:apurba.cnb@gmail.com --basic ' . $url . "  2> /dev/null & ";
			}
	        $result = json_decode(exec($command));

// $this->log->write('Response: ' . print_r($result, true));
	        // echo "<br> url: " . $command ;
	        // echo "<br> params: " ; print_r($post_parameters) ;
	        // echo "<br> response: " ; print_r($result) ;

	        if ($result === false) {
	            $responseType = "error";
	            $error = 'Curl error: ' . curl_error($ch);
	            $returnArray['responseType'] = $responseType;
	            $returnArray['response'] = $error;
	        } else {
	            $response_array = $result;
	            //Check responseType response
                $responseType = "success";
                $returnArray['responseType'] = $responseType;
                $returnArray['response'] = $response_array;
	        }

 	    } catch (Exception $e) {
	        $responseType = "error";
	        $error = "CURL request failed for some reason";
	        $returnArray['responseType'] = $responseType;
	        $returnArray['response'] = $error;
	    }

	    return $returnArray;
	}


}
