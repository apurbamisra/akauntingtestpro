<?php

class ModelApiAkaunting extends Model { 

	public function getAPIKey() {
		$query = $this->db->query("SELECT s.value api_key FROM " . DB_PREFIX_AKAUNTING . "settings s WHERE s.key = 'apps.api_key' LIMIT 1");

		return $query->row['api_key'];
	}

    


    public function getInvoiceItemDetails($data)
    {

        $sql = " SELECT op.order_id, p.name 'name',  op.quantity, op.price,  p.product_id, p.sku, p.price mrp, mi.id item_id,  FROM  order_product op   INNER JOIN " . DB_PREFIX . "product p ON (op.product_id = p.product_id) LEFT JOIN " . DB_PREFIX_AKAUNTING . "items mi ON (mi.sku = p.sku)  
			WHERE op.order_id = '" . $data['invoice_id'] . "' GROUP BY op.order_id, op.product_id";

		$results = $this->db->query($sql)->rows;

		$invoice_items['sales_items'] = array();
		$invoice_items['purchase_items'] = array();

		foreach ($results as $key => $row) {

    	     
                if (!is_null($row['item_id'])) {
                    // product exists - get the product id
                    $item_id = $row['item_id'];
                }else{
                    $product_data = array();
                    $product_data['name'] = htmlspecialchars_decode(utf8_encode($row['name']));
                    $product_data['description'] = htmlspecialchars_decode(utf8_encode($row['name']));
                    $product_data['sku'] = $row['sku'];
                    $product_data['sale_price'] = $row['mrp'];
                    $product_data['purchase_price'] = $row['mrp'];
                    $product_data['tax_ids'] =  $row['tax_class_id ']; 
                    
                    // get item id now
                    $sql_product = " SELECT * FROM " . DB_PREFIX_AKAUNTING . "items mi WHERE mi.sku = '" . $row['sku'] . "' LIMIT 1";

                    $item_id = $this->db->query($sql_product)->row['id'];
                  // $this->log->write('product data: ' . print_r($product_data, true));
                }

                $invoice_items['sales_items'][$key]['item_id'] = $item_id;
                $invoice_items['sales_items'][$key]['name'] =htmlspecialchars_decode(utf8_encode($row['name']));
                $invoice_items['sales_items'][$key]['description'] = htmlspecialchars_decode(utf8_encode($row['name']));
                $invoice_items['sales_items'][$key]['price'] = $row['price'];
                $invoice_items['sales_items'][$key]['quantity'] = $row['quantity'];
                $invoice_items['sales_items'][$key]['tax_ids'] = explode(',', $this->getAppliedTaxRateIds($row['order_id'], $row['product_id']));

                $invoice_items['purchase_items'][$key]['item_id'] = $item_id;
                $invoice_items['purchase_items'][$key]['name'] = htmlspecialchars_decode(utf8_encode($row['name']));
                $invoice_items['purchase_items'][$key]['description'] = htmlspecialchars_decode(utf8_encode($row['name']));
                $invoice_items['purchase_items'][$key]['price'] = $row['price'];
                $invoice_items['purchase_items'][$key]['quantity'] = $row['quantity'];
                $invoice_items['purchase_items'][$key]['tax_ids'] = $invoice_items['sales_items'][$key]['tax_ids'];
             
        }

        return $invoice_items;
    }


     
    


    


    public function getContactID($data)
    {
        
        if (isset($data['customer_id']) and !empty($data['customer_id'])) {
            $sql = " SELECT * FROM " . DB_PREFIX_AKAUNTING . "contacts c WHERE c.user_id = '" . $data['customer_id'] . "' and type = '" . $data['type'] . "' LIMIT 1 ";
        }elseif (isset($data['seller_id']) and !empty($data['seller_id'])) {
            $sql = " SELECT * FROM " . DB_PREFIX_AKAUNTING . "contacts c WHERE c.user_id = '" . $data['seller_id'] . "' and type = '" . $data['type'] . "' LIMIT 1 ";
        }else{
            $sql = " SELECT * FROM " . DB_PREFIX_AKAUNTING . "contacts c WHERE c.email = '" . $data['email'] . "' and type = '" . $data['type'] . "' LIMIT 1 ";            
        }
        
        $result = $this->db->query($sql);

        return $result->row;
    }


    public function getContactDetails($data)
    {
        
        if (isset($data['customer_id']) and !empty($data['customer_id'])) {
            $sql = " SELECT c.customer_id, concat(c.firstname, ' ' , c.lastname) 'name', c.email, c.gst_number tax_number, c.telephone phone, concat(addr.address_1, ' ',addr.address_2 ) address, addr.city, addr.postcode zipcode,  concat('customer_id=', c.customer_id) reference  FROM   customer c INNER JOIN   address addr ON (c.address_id = addr.address_id and addr.customer_id = c.customer_id)   WHERE c.customer_id = '" . $data['customer_id'] . "' LIMIT 1 ";

        } 

        $result = $this->db->query($sql);

        return $result->row;

    }

    public function getInvoiceIDFromDocumentNumber($data)
    {
        $sql = " SELECT * FROM " . DB_PREFIX_AKAUNTING . "documents d WHERE d.document_number = '" . $data['document_number'] . "' and type = '" . $data['type'] . "' LIMIT 1";

        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
         	return $result->row;
	    }else{
         	return false;
	    }
    }

   


}


