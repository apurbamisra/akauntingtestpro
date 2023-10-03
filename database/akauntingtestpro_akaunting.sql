-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 12:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akauntingtestpro_akaunting`
--
CREATE DATABASE IF NOT EXISTS `akauntingtestpro_akaunting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `akauntingtestpro_akaunting`;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_accounts`
--

DROP TABLE IF EXISTS `mbk_accounts`;
CREATE TABLE `mbk_accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_balance` double(15,4) NOT NULL DEFAULT 0.0000,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_accounts`
--

INSERT INTO `mbk_accounts` (`id`, `company_id`, `name`, `number`, `currency_code`, `opening_balance`, `bank_name`, `bank_phone`, `bank_address`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Cash', '1', 'USD', 0.0000, 'Cash', NULL, NULL, 1, 'core::seed', NULL, '2023-10-03 05:05:36', '2023-10-03 05:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_bills`
--

DROP TABLE IF EXISTS `mbk_bills`;
CREATE TABLE `mbk_bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `bill_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billed_at` datetime NOT NULL,
  `due_at` datetime NOT NULL,
  `amount` double(15,4) NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` double(15,8) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_bill_histories`
--

DROP TABLE IF EXISTS `mbk_bill_histories`;
CREATE TABLE `mbk_bill_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_bill_items`
--

DROP TABLE IF EXISTS `mbk_bill_items`;
CREATE TABLE `mbk_bill_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double(7,2) NOT NULL,
  `price` double(15,4) NOT NULL,
  `total` double(15,4) NOT NULL,
  `tax` double(15,4) NOT NULL DEFAULT 0.0000,
  `discount_rate` double(15,4) NOT NULL DEFAULT 0.0000,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_bill_item_taxes`
--

DROP TABLE IF EXISTS `mbk_bill_item_taxes`;
CREATE TABLE `mbk_bill_item_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `bill_item_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL DEFAULT 0.0000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_bill_totals`
--

DROP TABLE IF EXISTS `mbk_bill_totals`;
CREATE TABLE `mbk_bill_totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_categories`
--

DROP TABLE IF EXISTS `mbk_categories`;
CREATE TABLE `mbk_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_categories`
--

INSERT INTO `mbk_categories` (`id`, `company_id`, `name`, `type`, `color`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Transfer', 'other', '#3c3f72', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(2, 1, 'Deposit', 'income', '#efad32', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(3, 1, 'Sales', 'income', '#6da252', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(4, 1, 'Other', 'expense', '#e5e5e5', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(5, 1, 'General', 'item', '#328aef', 1, 'core::seed', NULL, '2021-11-20 05:30:19', '2021-11-20 05:30:19', NULL),
(6, 1, 'Reimbursements', 'other', '#3c3f72', 1, 'core::api', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(7, 1, 'COGS', 'expense', '#55588b', 1, 'core::ui', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(8, 1, 'Refunds', 'expense', '#55588b', 1, 'core::ui', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(9, 1, 'Advertisements', 'expense', '#55588b', 1, 'core::ui', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_companies`
--

DROP TABLE IF EXISTS `mbk_companies`;
CREATE TABLE `mbk_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_companies`
--

INSERT INTO `mbk_companies` (`id`, `domain`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 1, 'core::ui', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_contacts`
--

DROP TABLE IF EXISTS `mbk_contacts`;
CREATE TABLE `mbk_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_contacts`
--

INSERT INTO `mbk_contacts` (`id`, `company_id`, `type`, `name`, `email`, `user_id`, `tax_number`, `phone`, `address`, `city`, `zip_code`, `state`, `country`, `website`, `currency_code`, `enabled`, `reference`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'customer', 'Apurba Misra', 'apurba.cnb@gmail.com', NULL, NULL, '123456780', 'Sodepur Test', 'kolkata', NULL, 'West Bengal', 'India', NULL, 'INR', 1, 'customer_id=1', 'core::api', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_currencies`
--

DROP TABLE IF EXISTS `mbk_currencies`;
CREATE TABLE `mbk_currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(15,8) NOT NULL,
  `precision` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol_first` int(11) NOT NULL DEFAULT 1,
  `decimal_mark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousands_separator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enabled` tinyint(4) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_currencies`
--

INSERT INTO `mbk_currencies` (`id`, `company_id`, `name`, `code`, `rate`, `precision`, `symbol`, `symbol_first`, `decimal_mark`, `thousands_separator`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'US Dollar', 'USD', 1.00000000, '2', '$', 1, '.', ',', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(2, 1, 'Euro', 'EUR', 1.25000000, '2', '€', 1, ',', '.', 0, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(3, 1, 'British Pound', 'GBP', 1.60000000, '2', '£', 1, '.', ',', 0, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(4, 1, 'Turkish Lira', 'TRY', 0.80000000, '2', '₺', 1, ',', '.', 0, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL),
(5, 1, 'Rupee', 'INR', 1.00000000, '2', '₹', 1, '.', ',', 1, 'core::ui', 1, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_dashboards`
--

DROP TABLE IF EXISTS `mbk_dashboards`;
CREATE TABLE `mbk_dashboards` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_dashboards`
--

INSERT INTO `mbk_dashboards` (`id`, `company_id`, `name`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Dashboard', 1, 'core::seed', NULL, '2023-10-03 04:30:19', '2023-10-03 04:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_documents`
--

DROP TABLE IF EXISTS `mbk_documents`;
CREATE TABLE `mbk_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_at` datetime NOT NULL,
  `due_at` datetime NOT NULL,
  `amount` double(15,4) NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` double(15,8) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_documents`
--

INSERT INTO `mbk_documents` (`id`, `company_id`, `type`, `document_number`, `order_number`, `status`, `issued_at`, `due_at`, `amount`, `currency_code`, `currency_rate`, `category_id`, `contact_id`, `contact_name`, `contact_email`, `contact_tax_number`, `contact_phone`, `contact_address`, `contact_city`, `contact_zip_code`, `contact_state`, `contact_country`, `notes`, `footer`, `parent_id`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice', '114', '963', 'paid', '2023-10-03 12:00:19', '2023-10-03 12:00:19', 244.5600, 'INR', 1.00000000, 3, 1, 'Apurba Misra', 'apurba.cnb@gmail.com', NULL, '9477215303', 'Sodepur Test , kolkata , West Bengal ,  , India', NULL, NULL, NULL, NULL, NULL, NULL, 0, 'core::api', 1, '2023-10-03 06:30:19', '2023-10-03 06:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_document_histories`
--

DROP TABLE IF EXISTS `mbk_document_histories`;
CREATE TABLE `mbk_document_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_document_histories`
--

INSERT INTO `mbk_document_histories` (`id`, `company_id`, `type`, `document_id`, `status`, `notify`, `description`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice', 1, 'paid', 0, '114 added!', 'core::api', '1', '2023-10-03 07:05:34', '2023-10-03 07:05:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_document_items`
--

DROP TABLE IF EXISTS `mbk_document_items`;
CREATE TABLE `mbk_document_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double(7,2) NOT NULL,
  `price` double(15,4) NOT NULL,
  `tax` double(15,4) NOT NULL DEFAULT 0.0000,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `discount_rate` double(15,4) NOT NULL DEFAULT 0.0000,
  `total` double(15,4) NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_document_items`
--

INSERT INTO `mbk_document_items` (`id`, `company_id`, `type`, `document_id`, `item_id`, `name`, `description`, `sku`, `quantity`, `price`, `tax`, `discount_type`, `discount_rate`, `total`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice', 1, 1, 'ECOHIKE Recycled Eco-Friendly Round Neck T-Shirt for Men ', 'ECOHIKE Recycled Eco-Friendly Round Neck T-Shirt for Men', NULL, 1.00, 207.2500, 37.3100, 'percentage', 0.0000, 207.2500, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_document_item_taxes`
--

DROP TABLE IF EXISTS `mbk_document_item_taxes`;
CREATE TABLE `mbk_document_item_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_id` int(10) UNSIGNED NOT NULL,
  `document_item_id` int(10) UNSIGNED NOT NULL,
  `tax_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL DEFAULT 0.0000,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_document_item_taxes`
--

INSERT INTO `mbk_document_item_taxes` (`id`, `company_id`, `type`, `document_id`, `document_item_id`, `tax_id`, `name`, `amount`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice', 1, 1, 96, '18% IGST', 37.3100, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_document_totals`
--

DROP TABLE IF EXISTS `mbk_document_totals`;
CREATE TABLE `mbk_document_totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_document_totals`
--

INSERT INTO `mbk_document_totals` (`id`, `company_id`, `type`, `document_id`, `code`, `name`, `amount`, `sort_order`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice', 1, 'sub_total', 'invoices.sub_total', 207.2500, 1, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 'invoice', 1, 'tax', '18% IGST', 37.3100, 2, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(3, 1, 'invoice', 1, 'total', 'invoices.total', 244.5600, 3, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_email_templates`
--

DROP TABLE IF EXISTS `mbk_email_templates`;
CREATE TABLE `mbk_email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `params` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_email_templates`
--

INSERT INTO `mbk_email_templates` (`id`, `company_id`, `alias`, `class`, `name`, `subject`, `body`, `params`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'invoice_new_customer', 'App\\Notifications\\Sale\\Invoice', 'settings.email.templates.invoice_new_customer', '{invoice_number} invoice created', 'Dear {customer_name},<br /><br />We have prepared the following invoice for you: <strong>{invoice_number}</strong>.<br /><br />You can see the invoice details and proceed with the payment from the following link: <a href=\"{invoice_guest_link}\">{invoice_number}</a>.<br /><br />Feel free to contact us with any questions.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 'invoice_remind_customer', 'App\\Notifications\\Sale\\Invoice', 'settings.email.templates.invoice_remind_customer', '{invoice_number} invoice overdue notice', 'Dear {customer_name},<br /><br />This is an overdue notice for <strong>{invoice_number}</strong> invoice.<br /><br />The invoice total is {invoice_total} and was due <strong>{invoice_due_date}</strong>.<br /><br />You can see the invoice details and proceed with the payment from the following link: <a href=\"{invoice_guest_link}\">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(3, 1, 'invoice_remind_admin', 'App\\Notifications\\Sale\\Invoice', 'settings.email.templates.invoice_remind_admin', '{invoice_number} invoice overdue notice', 'Hello,<br /><br />{customer_name} has received an overdue notice for <strong>{invoice_number}</strong> invoice.<br /><br />The invoice total is {invoice_total} and was due <strong>{invoice_due_date}</strong>.<br /><br />You can see the invoice details from the following link: <a href=\"{invoice_admin_link}\">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(4, 1, 'invoice_recur_customer', 'App\\Notifications\\Sale\\Invoice', 'settings.email.templates.invoice_recur_customer', '{invoice_number} recurring invoice created', 'Dear {customer_name},<br /><br />Based on your recurring circle, we have prepared the following invoice for you: <strong>{invoice_number}</strong>.<br /><br />You can see the invoice details and proceed with the payment from the following link: <a href=\"{invoice_guest_link}\">{invoice_number}</a>.<br /><br />Feel free to contact us with any questions.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(5, 1, 'invoice_recur_admin', 'App\\Notifications\\Sale\\Invoice', 'settings.email.templates.invoice_recur_admin', '{invoice_number} recurring invoice created', 'Hello,<br /><br />Based on {customer_name} recurring circle, <strong>{invoice_number}</strong> invoice has been automatically created.<br /><br />You can see the invoice details from the following link: <a href=\"{invoice_admin_link}\">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(6, 1, 'invoice_payment_customer', 'App\\Notifications\\Portal\\PaymentReceived', 'settings.email.templates.invoice_payment_customer', 'Payment received for {invoice_number} invoice', 'Dear {customer_name},<br /><br />Thank you for the payment. Find the payment details below:<br /><br />-------------------------------------------------<br />Amount: <strong>{transaction_total}</strong><br />Date: <strong>{transaction_paid_date}</strong><br />Invoice Number: <strong>{invoice_number}</strong><br />-------------------------------------------------<br /><br />You can always see the invoice details from the following link: <a href=\"{invoice_guest_link}\">{invoice_number}</a>.<br /><br />Feel free to contact us with any questions.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(7, 1, 'invoice_payment_admin', 'App\\Notifications\\Portal\\PaymentReceived', 'settings.email.templates.invoice_payment_admin', 'Payment received for {invoice_number} invoice', 'Hello,<br /><br />{customer_name} recorded a payment for <strong>{invoice_number}</strong> invoice.<br /><br />You can see the invoice details from the following link: <a href=\"{invoice_admin_link}\">{invoice_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(8, 1, 'bill_remind_admin', 'App\\Notifications\\Purchase\\Bill', 'settings.email.templates.bill_remind_admin', '{bill_number} bill reminding notice', 'Hello,<br /><br />This is a reminding notice for <strong>{bill_number}</strong> bill to {vendor_name}.<br /><br />The bill total is {bill_total} and is due <strong>{bill_due_date}</strong>.<br /><br />You can see the bill details from the following link: <a href=\"{bill_admin_link}\">{bill_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(9, 1, 'bill_recur_admin', 'App\\Notifications\\Purchase\\Bill', 'settings.email.templates.bill_recur_admin', '{bill_number} recurring bill created', 'Hello,<br /><br />Based on {vendor_name} recurring circle, <strong>{bill_number}</strong> bill has been automatically created.<br /><br />You can see the bill details from the following link: <a href=\"{bill_admin_link}\">{bill_number}</a>.<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(10, 1, 'revenue_new_customer', 'App\\Notifications\\Sale\\Revenue', 'settings.email.templates.revenue_new_customer', '{revenue_date} payment created', 'Dear {customer_name},<br /><br />We have prepared the following payment. <br /><br />You can see the payment details from the following link: <a href=\"{revenue_guest_link}\">{revenue_date}</a>.<br /><br />Feel free to contact us with any questions..<br /><br />Best Regards,<br />{company_name}', NULL, 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_failed_jobs`
--

DROP TABLE IF EXISTS `mbk_failed_jobs`;
CREATE TABLE `mbk_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_firewall_ips`
--

DROP TABLE IF EXISTS `mbk_firewall_ips`;
CREATE TABLE `mbk_firewall_ips` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_id` int(11) DEFAULT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_firewall_logs`
--

DROP TABLE IF EXISTS `mbk_firewall_logs`;
CREATE TABLE `mbk_firewall_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medium',
  `middleware` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_invoices`
--

DROP TABLE IF EXISTS `mbk_invoices`;
CREATE TABLE `mbk_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoiced_at` datetime NOT NULL,
  `due_at` datetime NOT NULL,
  `amount` double(15,4) NOT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` double(15,8) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_tax_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_invoice_histories`
--

DROP TABLE IF EXISTS `mbk_invoice_histories`;
CREATE TABLE `mbk_invoice_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_invoice_items`
--

DROP TABLE IF EXISTS `mbk_invoice_items`;
CREATE TABLE `mbk_invoice_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` double(7,2) NOT NULL,
  `price` double(15,4) NOT NULL,
  `total` double(15,4) NOT NULL,
  `tax` double(15,4) NOT NULL DEFAULT 0.0000,
  `discount_rate` double(15,4) NOT NULL DEFAULT 0.0000,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_invoice_item_taxes`
--

DROP TABLE IF EXISTS `mbk_invoice_item_taxes`;
CREATE TABLE `mbk_invoice_item_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_item_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL DEFAULT 0.0000,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_invoice_totals`
--

DROP TABLE IF EXISTS `mbk_invoice_totals`;
CREATE TABLE `mbk_invoice_totals` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(15,4) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_items`
--

DROP TABLE IF EXISTS `mbk_items`;
CREATE TABLE `mbk_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` double(15,4) NOT NULL,
  `purchase_price` double(15,4) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `category_id` int(11) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_items`
--

INSERT INTO `mbk_items` (`id`, `company_id`, `name`, `sku`, `description`, `sale_price`, `purchase_price`, `quantity`, `category_id`, `tax_id`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'ECOHIKE Recycled Eco-Friendly Round Neck T-Shirt for Men (White)', 'M000000000466', 'HSN Code: roundcollarwh', 466.1017, 466.1017, 1, NULL, NULL, 1, 'core::api', 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_item_taxes`
--

DROP TABLE IF EXISTS `mbk_item_taxes`;
CREATE TABLE `mbk_item_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_item_taxes`
--

INSERT INTO `mbk_item_taxes` (`id`, `company_id`, `item_id`, `tax_id`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 88, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 1, 96, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(3, 1, 1, 95, 'core::api', '1', '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_jobs`
--

DROP TABLE IF EXISTS `mbk_jobs`;
CREATE TABLE `mbk_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_media`
--

DROP TABLE IF EXISTS `mbk_media`;
CREATE TABLE `mbk_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `disk` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aggregate_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_media_id` int(10) UNSIGNED DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_mediables`
--

DROP TABLE IF EXISTS `mbk_mediables`;
CREATE TABLE `mbk_mediables` (
  `media_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `mediable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediable_id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_migrations`
--

DROP TABLE IF EXISTS `mbk_migrations`;
CREATE TABLE `mbk_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_migrations`
--

INSERT INTO `mbk_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_27_000000_create_mediable_tables', 1),
(2, '2017_09_14_000000_core_v1', 1),
(3, '2020_01_08_000000_core_v200', 1),
(4, '2020_03_20_183732_core_v208', 1),
(5, '2020_06_09_000000_core_v2014', 1),
(6, '2020_07_20_000000_core_v2017', 1),
(7, '2020_10_12_000000_add_variants_to_media', 1),
(8, '2020_10_13_000000_core_v210', 1),
(9, '2021_04_01_000000_core_v219', 1),
(10, '2021_05_17_000000_core_v2114', 1),
(11, '2021_06_17_000000_core_v2117', 1),
(12, '2021_09_01_000000_core_v2124', 1),
(13, '2021_09_10_000000_core_v2125', 1),
(14, '2021_09_10_000000_core_v2126', 1),
(15, '2021_09_10_000000_core_v2127', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_modules`
--

DROP TABLE IF EXISTS `mbk_modules`;
CREATE TABLE `mbk_modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` int(11) NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_modules`
--

INSERT INTO `mbk_modules` (`id`, `company_id`, `alias`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'offline-payments', 1, 'core::ui', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 'paypal-standard', 1, 'core::ui', NULL, '2021-11-20 05:30:21', '2021-11-20 05:30:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_module_histories`
--

DROP TABLE IF EXISTS `mbk_module_histories`;
CREATE TABLE `mbk_module_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_module_histories`
--

INSERT INTO `mbk_module_histories` (`id`, `company_id`, `module_id`, `version`, `description`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2.0.3', 'offline-payments installed', 'core::ui', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 2, '2.0.0', 'paypal-standard installed', 'core::ui', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_notifications`
--

DROP TABLE IF EXISTS `mbk_notifications`;
CREATE TABLE `mbk_notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_password_resets`
--

DROP TABLE IF EXISTS `mbk_password_resets`;
CREATE TABLE `mbk_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_permissions`
--

DROP TABLE IF EXISTS `mbk_permissions`;
CREATE TABLE `mbk_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_permissions`
--

INSERT INTO `mbk_permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'read-admin-panel', 'Read Admin Panel', 'Read Admin Panel', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(2, 'read-api', 'Read Api', 'Read Api', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(3, 'create-auth-permissions', 'Create Auth Permissions', 'Create Auth Permissions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(4, 'read-auth-permissions', 'Read Auth Permissions', 'Read Auth Permissions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(5, 'update-auth-permissions', 'Update Auth Permissions', 'Update Auth Permissions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(6, 'delete-auth-permissions', 'Delete Auth Permissions', 'Delete Auth Permissions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(7, 'read-auth-profile', 'Read Auth Profile', 'Read Auth Profile', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(8, 'update-auth-profile', 'Update Auth Profile', 'Update Auth Profile', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(9, 'create-auth-roles', 'Create Auth Roles', 'Create Auth Roles', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(10, 'read-auth-roles', 'Read Auth Roles', 'Read Auth Roles', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(11, 'update-auth-roles', 'Update Auth Roles', 'Update Auth Roles', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(12, 'delete-auth-roles', 'Delete Auth Roles', 'Delete Auth Roles', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(13, 'create-auth-users', 'Create Auth Users', 'Create Auth Users', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(14, 'read-auth-users', 'Read Auth Users', 'Read Auth Users', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(15, 'update-auth-users', 'Update Auth Users', 'Update Auth Users', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(16, 'delete-auth-users', 'Delete Auth Users', 'Delete Auth Users', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(17, 'create-banking-accounts', 'Create Banking Accounts', 'Create Banking Accounts', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(18, 'read-banking-accounts', 'Read Banking Accounts', 'Read Banking Accounts', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(19, 'update-banking-accounts', 'Update Banking Accounts', 'Update Banking Accounts', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(20, 'delete-banking-accounts', 'Delete Banking Accounts', 'Delete Banking Accounts', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(21, 'create-banking-reconciliations', 'Create Banking Reconciliations', 'Create Banking Reconciliations', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(22, 'read-banking-reconciliations', 'Read Banking Reconciliations', 'Read Banking Reconciliations', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(23, 'update-banking-reconciliations', 'Update Banking Reconciliations', 'Update Banking Reconciliations', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(24, 'delete-banking-reconciliations', 'Delete Banking Reconciliations', 'Delete Banking Reconciliations', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(25, 'create-banking-transactions', 'Create Banking Transactions', 'Create Banking Transactions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(26, 'read-banking-transactions', 'Read Banking Transactions', 'Read Banking Transactions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(27, 'update-banking-transactions', 'Update Banking Transactions', 'Update Banking Transactions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(28, 'delete-banking-transactions', 'Delete Banking Transactions', 'Delete Banking Transactions', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(29, 'create-banking-transfers', 'Create Banking Transfers', 'Create Banking Transfers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(30, 'read-banking-transfers', 'Read Banking Transfers', 'Read Banking Transfers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(31, 'update-banking-transfers', 'Update Banking Transfers', 'Update Banking Transfers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(32, 'delete-banking-transfers', 'Delete Banking Transfers', 'Delete Banking Transfers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(33, 'create-common-companies', 'Create Common Companies', 'Create Common Companies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(34, 'read-common-companies', 'Read Common Companies', 'Read Common Companies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(35, 'update-common-companies', 'Update Common Companies', 'Update Common Companies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(36, 'delete-common-companies', 'Delete Common Companies', 'Delete Common Companies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(37, 'create-common-dashboards', 'Create Common Dashboards', 'Create Common Dashboards', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(38, 'read-common-dashboards', 'Read Common Dashboards', 'Read Common Dashboards', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(39, 'update-common-dashboards', 'Update Common Dashboards', 'Update Common Dashboards', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(40, 'delete-common-dashboards', 'Delete Common Dashboards', 'Delete Common Dashboards', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(41, 'create-common-import', 'Create Common Import', 'Create Common Import', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(42, 'create-common-items', 'Create Common Items', 'Create Common Items', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(43, 'read-common-items', 'Read Common Items', 'Read Common Items', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(44, 'update-common-items', 'Update Common Items', 'Update Common Items', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(45, 'delete-common-items', 'Delete Common Items', 'Delete Common Items', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(46, 'create-common-notifications', 'Create Common Notifications', 'Create Common Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(47, 'read-common-notifications', 'Read Common Notifications', 'Read Common Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(48, 'update-common-notifications', 'Update Common Notifications', 'Update Common Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(49, 'delete-common-notifications', 'Delete Common Notifications', 'Delete Common Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(50, 'create-common-reports', 'Create Common Reports', 'Create Common Reports', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(51, 'read-common-reports', 'Read Common Reports', 'Read Common Reports', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(52, 'update-common-reports', 'Update Common Reports', 'Update Common Reports', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(53, 'delete-common-reports', 'Delete Common Reports', 'Delete Common Reports', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(54, 'read-common-search', 'Read Common Search', 'Read Common Search', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(55, 'read-common-uploads', 'Read Common Uploads', 'Read Common Uploads', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(56, 'delete-common-uploads', 'Delete Common Uploads', 'Delete Common Uploads', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(57, 'create-common-widgets', 'Create Common Widgets', 'Create Common Widgets', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(58, 'read-common-widgets', 'Read Common Widgets', 'Read Common Widgets', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(59, 'update-common-widgets', 'Update Common Widgets', 'Update Common Widgets', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(60, 'delete-common-widgets', 'Delete Common Widgets', 'Delete Common Widgets', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(61, 'create-purchases-bills', 'Create Purchases Bills', 'Create Purchases Bills', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(62, 'read-purchases-bills', 'Read Purchases Bills', 'Read Purchases Bills', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(63, 'update-purchases-bills', 'Update Purchases Bills', 'Update Purchases Bills', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(64, 'delete-purchases-bills', 'Delete Purchases Bills', 'Delete Purchases Bills', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(65, 'create-purchases-payments', 'Create Purchases Payments', 'Create Purchases Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(66, 'read-purchases-payments', 'Read Purchases Payments', 'Read Purchases Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(67, 'update-purchases-payments', 'Update Purchases Payments', 'Update Purchases Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(68, 'delete-purchases-payments', 'Delete Purchases Payments', 'Delete Purchases Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(69, 'create-purchases-vendors', 'Create Purchases Vendors', 'Create Purchases Vendors', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(70, 'read-purchases-vendors', 'Read Purchases Vendors', 'Read Purchases Vendors', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(71, 'update-purchases-vendors', 'Update Purchases Vendors', 'Update Purchases Vendors', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(72, 'delete-purchases-vendors', 'Delete Purchases Vendors', 'Delete Purchases Vendors', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(73, 'create-sales-customers', 'Create Sales Customers', 'Create Sales Customers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(74, 'read-sales-customers', 'Read Sales Customers', 'Read Sales Customers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(75, 'update-sales-customers', 'Update Sales Customers', 'Update Sales Customers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(76, 'delete-sales-customers', 'Delete Sales Customers', 'Delete Sales Customers', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(77, 'create-sales-invoices', 'Create Sales Invoices', 'Create Sales Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(78, 'read-sales-invoices', 'Read Sales Invoices', 'Read Sales Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(79, 'update-sales-invoices', 'Update Sales Invoices', 'Update Sales Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(80, 'delete-sales-invoices', 'Delete Sales Invoices', 'Delete Sales Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(81, 'create-sales-revenues', 'Create Sales Revenues', 'Create Sales Revenues', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(82, 'read-sales-revenues', 'Read Sales Revenues', 'Read Sales Revenues', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(83, 'update-sales-revenues', 'Update Sales Revenues', 'Update Sales Revenues', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(84, 'delete-sales-revenues', 'Delete Sales Revenues', 'Delete Sales Revenues', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(85, 'read-install-updates', 'Read Install Updates', 'Read Install Updates', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(86, 'update-install-updates', 'Update Install Updates', 'Update Install Updates', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(87, 'create-modules-api-key', 'Create Modules Api Key', 'Create Modules Api Key', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(88, 'update-modules-api-key', 'Update Modules Api Key', 'Update Modules Api Key', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(89, 'read-modules-home', 'Read Modules Home', 'Read Modules Home', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(90, 'create-modules-item', 'Create Modules Item', 'Create Modules Item', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(91, 'read-modules-item', 'Read Modules Item', 'Read Modules Item', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(92, 'update-modules-item', 'Update Modules Item', 'Update Modules Item', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(93, 'delete-modules-item', 'Delete Modules Item', 'Delete Modules Item', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(94, 'read-modules-my', 'Read Modules My', 'Read Modules My', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(95, 'read-modules-tiles', 'Read Modules Tiles', 'Read Modules Tiles', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(96, 'read-notifications', 'Read Notifications', 'Read Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(97, 'update-notifications', 'Update Notifications', 'Update Notifications', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(98, 'read-reports-expense-summary', 'Read Reports Expense Summary', 'Read Reports Expense Summary', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(99, 'read-reports-income-summary', 'Read Reports Income Summary', 'Read Reports Income Summary', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(100, 'read-reports-income-expense-summary', 'Read Reports Income Expense Summary', 'Read Reports Income Expense Summary', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(101, 'read-reports-profit-loss', 'Read Reports Profit Loss', 'Read Reports Profit Loss', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(102, 'read-reports-tax-summary', 'Read Reports Tax Summary', 'Read Reports Tax Summary', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(103, 'create-settings-categories', 'Create Settings Categories', 'Create Settings Categories', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(104, 'read-settings-categories', 'Read Settings Categories', 'Read Settings Categories', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(105, 'update-settings-categories', 'Update Settings Categories', 'Update Settings Categories', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(106, 'delete-settings-categories', 'Delete Settings Categories', 'Delete Settings Categories', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(107, 'read-settings-company', 'Read Settings Company', 'Read Settings Company', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(108, 'create-settings-currencies', 'Create Settings Currencies', 'Create Settings Currencies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(109, 'read-settings-currencies', 'Read Settings Currencies', 'Read Settings Currencies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(110, 'update-settings-currencies', 'Update Settings Currencies', 'Update Settings Currencies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(111, 'delete-settings-currencies', 'Delete Settings Currencies', 'Delete Settings Currencies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(112, 'read-settings-defaults', 'Read Settings Defaults', 'Read Settings Defaults', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(113, 'read-settings-email', 'Read Settings Email', 'Read Settings Email', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(114, 'read-settings-invoice', 'Read Settings Invoice', 'Read Settings Invoice', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(115, 'read-settings-localisation', 'Read Settings Localisation', 'Read Settings Localisation', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(116, 'read-settings-modules', 'Read Settings Modules', 'Read Settings Modules', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(117, 'update-settings-modules', 'Update Settings Modules', 'Update Settings Modules', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(118, 'read-settings-settings', 'Read Settings Settings', 'Read Settings Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(119, 'update-settings-settings', 'Update Settings Settings', 'Update Settings Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(120, 'read-settings-schedule', 'Read Settings Schedule', 'Read Settings Schedule', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(121, 'create-settings-taxes', 'Create Settings Taxes', 'Create Settings Taxes', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(122, 'read-settings-taxes', 'Read Settings Taxes', 'Read Settings Taxes', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(123, 'update-settings-taxes', 'Update Settings Taxes', 'Update Settings Taxes', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(124, 'delete-settings-taxes', 'Delete Settings Taxes', 'Delete Settings Taxes', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(125, 'read-widgets-account-balance', 'Read Widgets Account Balance', 'Read Widgets Account Balance', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(126, 'read-widgets-cash-flow', 'Read Widgets Cash Flow', 'Read Widgets Cash Flow', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(127, 'read-widgets-expenses-by-category', 'Read Widgets Expenses By Category', 'Read Widgets Expenses By Category', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(128, 'read-widgets-income-by-category', 'Read Widgets Income By Category', 'Read Widgets Income By Category', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(129, 'read-widgets-latest-expenses', 'Read Widgets Latest Expenses', 'Read Widgets Latest Expenses', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(130, 'read-widgets-latest-income', 'Read Widgets Latest Income', 'Read Widgets Latest Income', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(131, 'read-widgets-total-expenses', 'Read Widgets Total Expenses', 'Read Widgets Total Expenses', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(132, 'read-widgets-total-income', 'Read Widgets Total Income', 'Read Widgets Total Income', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(133, 'read-widgets-total-profit', 'Read Widgets Total Profit', 'Read Widgets Total Profit', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(134, 'read-widgets-currencies', 'Read Widgets Currencies', 'Read Widgets Currencies', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(135, 'read-client-portal', 'Read Client Portal', 'Read Client Portal', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(136, 'read-portal-invoices', 'Read Portal Invoices', 'Read Portal Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(137, 'update-portal-invoices', 'Update Portal Invoices', 'Update Portal Invoices', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(138, 'read-portal-payments', 'Read Portal Payments', 'Read Portal Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(139, 'update-portal-payments', 'Update Portal Payments', 'Update Portal Payments', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(140, 'read-portal-profile', 'Read Portal Profile', 'Read Portal Profile', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(141, 'update-portal-profile', 'Update Portal Profile', 'Update Portal Profile', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(142, 'read-offline-payments-settings', 'Read Offline Payments Settings', 'Read Offline Payments Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(143, 'update-offline-payments-settings', 'Update Offline Payments Settings', 'Update Offline Payments Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(144, 'delete-offline-payments-settings', 'Delete Offline Payments Settings', 'Delete Offline Payments Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(145, 'read-paypal-standard-settings', 'Read PayPal Standard Settings', 'Read PayPal Standard Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36'),
(146, 'update-paypal-standard-settings', 'Update PayPal Standard Settings', 'Update PayPal Standard Settings', '2023-10-03 07:05:36', '2023-10-03 07:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_reconciliations`
--

DROP TABLE IF EXISTS `mbk_reconciliations`;
CREATE TABLE `mbk_reconciliations` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `started_at` datetime NOT NULL,
  `ended_at` datetime NOT NULL,
  `closing_balance` double(15,4) NOT NULL DEFAULT 0.0000,
  `reconciled` tinyint(1) NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_reconciliation_mapping`
--

DROP TABLE IF EXISTS `mbk_reconciliation_mapping`;
CREATE TABLE `mbk_reconciliation_mapping` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `additional_keywords` text NOT NULL,
  `transaction_type` tinyint(4) NOT NULL COMMENT '0=credit, 1=debit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_reconciliation_transactions`
--

DROP TABLE IF EXISTS `mbk_reconciliation_transactions`;
CREATE TABLE `mbk_reconciliation_transactions` (
  `reconciliation_upload_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL,
  `narration` text NOT NULL,
  `reference_no` varchar(200) NOT NULL,
  `value_date` datetime NOT NULL,
  `withdrawal_amt` decimal(12,2) NOT NULL,
  `deposit_amt` decimal(12,2) NOT NULL,
  `closing_balance` decimal(12,2) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_reconciliation_upload`
--

DROP TABLE IF EXISTS `mbk_reconciliation_upload`;
CREATE TABLE `mbk_reconciliation_upload` (
  `id` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `account_id` int(11) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT current_timestamp(),
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_recurring`
--

DROP TABLE IF EXISTS `mbk_recurring`;
CREATE TABLE `mbk_recurring` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `recurable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recurable_id` bigint(20) UNSIGNED NOT NULL,
  `frequency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interval` int(11) NOT NULL DEFAULT 1,
  `started_at` datetime NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_reports`
--

DROP TABLE IF EXISTS `mbk_reports`;
CREATE TABLE `mbk_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_reports`
--

INSERT INTO `mbk_reports` (`id`, `company_id`, `class`, `name`, `description`, `settings`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'App\\Reports\\IncomeSummary', 'Income Summary', 'Monthly income summary by category.', '{\"group\":\"category\",\"period\":\"monthly\",\"basis\":\"accrual\",\"chart\":\"line\"}', 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(2, 1, 'App\\Reports\\ExpenseSummary', 'Expense Summary', 'Monthly expense summary by category.', '{\"group\":\"category\",\"period\":\"monthly\",\"basis\":\"accrual\",\"chart\":\"line\"}', 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(3, 1, 'App\\Reports\\IncomeExpenseSummary', 'Income vs Expense', 'Monthly income vs expense by category.', '{\"group\":\"category\",\"period\":\"monthly\",\"basis\":\"accrual\",\"chart\":\"line\"}', 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(4, 1, 'App\\Reports\\ProfitLoss', 'Profit & Loss', 'Quarterly profit & loss by category.', '{\"group\":\"category\",\"period\":\"quarterly\",\"basis\":\"accrual\"}', 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(5, 1, 'App\\Reports\\TaxSummary', 'Tax Summary', 'Quarterly tax summary.', '{\"period\":\"quarterly\",\"basis\":\"accrual\"}', 'core::seed', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_roles`
--

DROP TABLE IF EXISTS `mbk_roles`;
CREATE TABLE `mbk_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_roles`
--

INSERT INTO `mbk_roles` (`id`, `name`, `display_name`, `description`, `created_from`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', NULL, NULL, '2023-10-03 05:05:36', '2023-10-03 05:05:36'),
(2, 'manager', 'Manager', 'Manager', NULL, NULL, '2023-10-03 05:05:36', '2023-10-03 05:05:36'),
(3, 'customer', 'Customer', 'Customer', NULL, NULL, '2023-10-03 05:05:36', '2023-10-03 05:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_role_permissions`
--

DROP TABLE IF EXISTS `mbk_role_permissions`;
CREATE TABLE `mbk_role_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_role_permissions`
--

INSERT INTO `mbk_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(2, 1),
(2, 7),
(2, 8),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 125),
(2, 126),
(2, 127),
(2, 128),
(2, 129),
(2, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 142),
(2, 143),
(2, 144),
(2, 145),
(2, 146),
(3, 135),
(3, 136),
(3, 137),
(3, 138),
(3, 139),
(3, 140),
(3, 141);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_sessions`
--

DROP TABLE IF EXISTS `mbk_sessions`;
CREATE TABLE `mbk_sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_settings`
--

DROP TABLE IF EXISTS `mbk_settings`;
CREATE TABLE `mbk_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_settings`
--

INSERT INTO `mbk_settings` (`id`, `company_id`, `key`, `value`) VALUES
(1, 1, 'invoice.title', 'Invoice'),
(2, 1, 'default.account', '1'),
(3, 1, 'default.income_category', '2'),
(4, 1, 'default.expense_category', '4'),
(5, 1, 'wizard.completed', '1'),
(6, 1, 'offline-payments.methods', '[{\"code\":\"offline-payments.cash.1\",\"name\":\"Cash\",\"customer\":\"0\",\"order\":\"1\",\"description\":null},{\"code\":\"offline-payments.bank_transfer.2\",\"name\":\"Bank Transfer\",\"customer\":\"0\",\"order\":\"2\",\"description\":null}]'),
(7, 1, 'company.name', 'Apurba Test'),
(8, 1, 'company.email', 'apurbamail@gmail.com'),
(9, 1, 'company.country', 'IN'),
(10, 1, 'company._prefix', 'company'),
(11, 1, 'apps.api_key', '2a9753b2-f8f1-4d87-b22e-f568a00f385c'),
(12, 1, 'default.currency', 'INR'),
(13, 1, 'invoice.number_next', '10'),
(14, 1, 'bill.number_next', '6');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_taxes`
--

DROP TABLE IF EXISTS `mbk_taxes`;
CREATE TABLE `mbk_taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(15,4) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_taxes`
--

INSERT INTO `mbk_taxes` (`id`, `company_id`, `name`, `rate`, `type`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(88, 1, '9% CGST', 9.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(90, 1, '0.25% IGST', 0.2500, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(91, 1, '3% IGST', 3.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(92, 1, '5% IGST', 5.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(93, 1, '12% IGST', 12.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(94, 1, '28% IGST', 28.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(95, 1, '9% SGST', 9.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(96, 1, '18% IGST', 18.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(97, 1, '2.5% CGST', 2.5000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(98, 1, '2.5% SGST', 2.5000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(99, 1, '1.5% SGST', 1.5000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(100, 1, '1.5% CGST', 1.5000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(103, 1, '6% CGST', 6.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(104, 1, '14% CGST', 14.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(105, 1, '6% SGST', 6.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(106, 1, '14% SGST', 14.0000, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(108, 1, '0.125% SGST', 0.1250, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL),
(109, 1, '0.125% CGST', 0.1250, 'normal', 1, NULL, 1, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_transactions`
--

DROP TABLE IF EXISTS `mbk_transactions`;
CREATE TABLE `mbk_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_at` datetime NOT NULL,
  `amount` double(15,4) NOT NULL,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_rate` double(15,8) NOT NULL,
  `account_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `reconciled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_transactions`
--

INSERT INTO `mbk_transactions` (`id`, `company_id`, `type`, `paid_at`, `amount`, `currency_code`, `currency_rate`, `account_id`, `document_id`, `contact_id`, `category_id`, `description`, `payment_method`, `reference`, `parent_id`, `created_from`, `created_by`, `reconciled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'income', '2022-02-24 00:32:24', 244.5550, 'INR', 1.00000000, 2, 135, 1, 3, 'Transacton updated for prepaid income  # 1', 'offline-payments.razorpay.3', 'pay_IuCbdPs27tXkBH', 0, 'core::api', 1, 0, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_transfers`
--

DROP TABLE IF EXISTS `mbk_transfers`;
CREATE TABLE `mbk_transfers` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `expense_transaction_id` int(11) NOT NULL,
  `income_transaction_id` int(11) NOT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_users`
--

DROP TABLE IF EXISTS `mbk_users`;
CREATE TABLE `mbk_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_logged_in_at` timestamp NULL DEFAULT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en-GB',
  `landing_page` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT 'dashboard',
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_users`
--

INSERT INTO `mbk_users` (`id`, `name`, `email`, `password`, `remember_token`, `last_logged_in_at`, `locale`, `landing_page`, `enabled`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Apurba', 'apurbba.cnb@gmail.com', '$2y$10$x1iuHc5TuW4XEvIwSQuOyOLOWulc9lA3l6D0t9CxR/Gc42DDp9V52', 'Xv2Vx1szPwScxXaxbFOru3gVmdNCr8R5gBvWbsm2lNeX4tXvbQkbDAttfPsQ', '2023-10-03 07:05:36', 'en-GB', 'dashboard', 1, 'core::ui', NULL, '2023-10-03 07:05:36', '2023-10-03 07:05:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mbk_user_companies`
--

DROP TABLE IF EXISTS `mbk_user_companies`;
CREATE TABLE `mbk_user_companies` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_user_companies`
--

INSERT INTO `mbk_user_companies` (`user_id`, `company_id`, `user_type`) VALUES
(1, 1, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_user_dashboards`
--

DROP TABLE IF EXISTS `mbk_user_dashboards`;
CREATE TABLE `mbk_user_dashboards` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `dashboard_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_user_dashboards`
--

INSERT INTO `mbk_user_dashboards` (`user_id`, `dashboard_id`, `user_type`) VALUES
(1, 1, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_user_permissions`
--

DROP TABLE IF EXISTS `mbk_user_permissions`;
CREATE TABLE `mbk_user_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `mbk_user_roles`
--

DROP TABLE IF EXISTS `mbk_user_roles`;
CREATE TABLE `mbk_user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_user_roles`
--

INSERT INTO `mbk_user_roles` (`user_id`, `role_id`, `user_type`) VALUES
(1, 1, 'users');

-- --------------------------------------------------------

--
-- Table structure for table `mbk_widgets`
--

DROP TABLE IF EXISTS `mbk_widgets`;
CREATE TABLE `mbk_widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `dashboard_id` int(11) NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `mbk_widgets`
--

INSERT INTO `mbk_widgets` (`id`, `company_id`, `dashboard_id`, `class`, `name`, `sort`, `settings`, `created_from`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'App\\Widgets\\TotalIncome', 'Total Income', 1, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(2, 1, 1, 'App\\Widgets\\TotalExpenses', 'Total Expenses', 2, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(3, 1, 1, 'App\\Widgets\\TotalProfit', 'Total Profit', 3, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(4, 1, 1, 'App\\Widgets\\CashFlow', 'Cash Flow', 4, '{\"width\":\"col-md-12\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(5, 1, 1, 'App\\Widgets\\IncomeByCategory', 'Income By Category', 5, '{\"width\":\"col-md-6\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(6, 1, 1, 'App\\Widgets\\ExpensesByCategory', 'Expenses By Category', 6, '{\"width\":\"col-md-6\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(7, 1, 1, 'App\\Widgets\\AccountBalance', 'Account Balance', 7, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(8, 1, 1, 'App\\Widgets\\LatestIncome', 'Latest Income', 8, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL),
(9, 1, 1, 'App\\Widgets\\LatestExpenses', 'Latest Expenses', 9, '{\"width\":\"col-md-4\"}', 'core::ui', NULL, '2021-11-20 05:30:26', '2021-11-20 05:30:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mbk_accounts`
--
ALTER TABLE `mbk_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_accounts_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_bills`
--
ALTER TABLE `mbk_bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_bills_company_id_bill_number_deleted_at_unique` (`company_id`,`bill_number`,`deleted_at`),
  ADD KEY `x26_bills_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_bill_histories`
--
ALTER TABLE `mbk_bill_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_bill_histories_company_id_index` (`company_id`),
  ADD KEY `x26_bill_histories_bill_id_index` (`bill_id`);

--
-- Indexes for table `mbk_bill_items`
--
ALTER TABLE `mbk_bill_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_bill_items_company_id_index` (`company_id`),
  ADD KEY `x26_bill_items_bill_id_index` (`bill_id`);

--
-- Indexes for table `mbk_bill_item_taxes`
--
ALTER TABLE `mbk_bill_item_taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_bill_item_taxes_company_id_index` (`company_id`),
  ADD KEY `x26_bill_item_taxes_bill_id_index` (`bill_id`);

--
-- Indexes for table `mbk_bill_totals`
--
ALTER TABLE `mbk_bill_totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_bill_totals_company_id_index` (`company_id`),
  ADD KEY `x26_bill_totals_bill_id_index` (`bill_id`);

--
-- Indexes for table `mbk_categories`
--
ALTER TABLE `mbk_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_categories_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_companies`
--
ALTER TABLE `mbk_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbk_contacts`
--
ALTER TABLE `mbk_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_contacts_company_id_type_email_deleted_at_unique` (`company_id`,`type`,`email`,`deleted_at`),
  ADD KEY `x26_contacts_company_id_type_index` (`company_id`,`type`);

--
-- Indexes for table `mbk_currencies`
--
ALTER TABLE `mbk_currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_currencies_company_id_code_deleted_at_unique` (`company_id`,`code`,`deleted_at`),
  ADD KEY `x26_currencies_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_dashboards`
--
ALTER TABLE `mbk_dashboards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_dashboards_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_documents`
--
ALTER TABLE `mbk_documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_documents_document_number_deleted_at_company_id_type_unique` (`document_number`,`deleted_at`,`company_id`,`type`),
  ADD KEY `x26_documents_company_id_index` (`company_id`),
  ADD KEY `x26_documents_type_index` (`type`);

--
-- Indexes for table `mbk_document_histories`
--
ALTER TABLE `mbk_document_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_document_histories_company_id_index` (`company_id`),
  ADD KEY `x26_document_histories_type_index` (`type`),
  ADD KEY `x26_document_histories_document_id_index` (`document_id`);

--
-- Indexes for table `mbk_document_items`
--
ALTER TABLE `mbk_document_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_document_items_company_id_index` (`company_id`),
  ADD KEY `x26_document_items_type_index` (`type`),
  ADD KEY `x26_document_items_document_id_index` (`document_id`);

--
-- Indexes for table `mbk_document_item_taxes`
--
ALTER TABLE `mbk_document_item_taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_document_item_taxes_company_id_index` (`company_id`),
  ADD KEY `x26_document_item_taxes_type_index` (`type`),
  ADD KEY `x26_document_item_taxes_document_id_index` (`document_id`);

--
-- Indexes for table `mbk_document_totals`
--
ALTER TABLE `mbk_document_totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_document_totals_company_id_index` (`company_id`),
  ADD KEY `x26_document_totals_type_index` (`type`),
  ADD KEY `x26_document_totals_document_id_index` (`document_id`);

--
-- Indexes for table `mbk_email_templates`
--
ALTER TABLE `mbk_email_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_email_templates_company_id_alias_deleted_at_unique` (`company_id`,`alias`,`deleted_at`),
  ADD KEY `x26_email_templates_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_failed_jobs`
--
ALTER TABLE `mbk_failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mbk_firewall_ips`
--
ALTER TABLE `mbk_firewall_ips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_firewall_ips_ip_deleted_at_unique` (`ip`,`deleted_at`),
  ADD KEY `x26_firewall_ips_ip_index` (`ip`);

--
-- Indexes for table `mbk_firewall_logs`
--
ALTER TABLE `mbk_firewall_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_firewall_logs_ip_index` (`ip`);

--
-- Indexes for table `mbk_invoices`
--
ALTER TABLE `mbk_invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_invoices_company_id_invoice_number_deleted_at_unique` (`company_id`,`invoice_number`,`deleted_at`),
  ADD KEY `x26_invoices_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_invoice_histories`
--
ALTER TABLE `mbk_invoice_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_invoice_histories_company_id_index` (`company_id`),
  ADD KEY `x26_invoice_histories_invoice_id_index` (`invoice_id`);

--
-- Indexes for table `mbk_invoice_items`
--
ALTER TABLE `mbk_invoice_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_invoice_items_company_id_index` (`company_id`),
  ADD KEY `x26_invoice_items_invoice_id_index` (`invoice_id`);

--
-- Indexes for table `mbk_invoice_item_taxes`
--
ALTER TABLE `mbk_invoice_item_taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_invoice_item_taxes_company_id_index` (`company_id`),
  ADD KEY `x26_invoice_item_taxes_invoice_id_index` (`invoice_id`);

--
-- Indexes for table `mbk_invoice_totals`
--
ALTER TABLE `mbk_invoice_totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_invoice_totals_company_id_index` (`company_id`),
  ADD KEY `x26_invoice_totals_invoice_id_index` (`invoice_id`);

--
-- Indexes for table `mbk_items`
--
ALTER TABLE `mbk_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_items_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_item_taxes`
--
ALTER TABLE `mbk_item_taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_item_taxes_company_id_item_id_index` (`company_id`,`item_id`);

--
-- Indexes for table `mbk_jobs`
--
ALTER TABLE `mbk_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

--
-- Indexes for table `mbk_media`
--
ALTER TABLE `mbk_media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_media_disk_directory_filename_extension_unique` (`disk`,`directory`,`filename`,`extension`),
  ADD UNIQUE KEY `x26_media_disk_directory_filename_extension_deleted_at_unique` (`disk`,`directory`,`filename`,`extension`,`deleted_at`),
  ADD KEY `x26_media_aggregate_type_index` (`aggregate_type`),
  ADD KEY `x26_media_disk_directory_index` (`disk`,`directory`),
  ADD KEY `original_media_id` (`original_media_id`),
  ADD KEY `x26_media_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_mediables`
--
ALTER TABLE `mbk_mediables`
  ADD PRIMARY KEY (`media_id`,`mediable_type`,`mediable_id`,`tag`),
  ADD KEY `x26_mediables_mediable_id_mediable_type_index` (`mediable_id`,`mediable_type`),
  ADD KEY `x26_mediables_tag_index` (`tag`),
  ADD KEY `x26_mediables_order_index` (`order`),
  ADD KEY `x26_mediables_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_migrations`
--
ALTER TABLE `mbk_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbk_modules`
--
ALTER TABLE `mbk_modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_modules_company_id_alias_deleted_at_unique` (`company_id`,`alias`,`deleted_at`),
  ADD KEY `x26_modules_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_module_histories`
--
ALTER TABLE `mbk_module_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_module_histories_company_id_module_id_index` (`company_id`,`module_id`);

--
-- Indexes for table `mbk_notifications`
--
ALTER TABLE `mbk_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `mbk_password_resets`
--
ALTER TABLE `mbk_password_resets`
  ADD KEY `x26_password_resets_email_index` (`email`);

--
-- Indexes for table `mbk_permissions`
--
ALTER TABLE `mbk_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_permissions_name_unique` (`name`);

--
-- Indexes for table `mbk_reconciliations`
--
ALTER TABLE `mbk_reconciliations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_reconciliations_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_reconciliation_mapping`
--
ALTER TABLE `mbk_reconciliation_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbk_reconciliation_transactions`
--
ALTER TABLE `mbk_reconciliation_transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `mbk_reconciliation_upload`
--
ALTER TABLE `mbk_reconciliation_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbk_recurring`
--
ALTER TABLE `mbk_recurring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_recurring_recurable_type_recurable_id_index` (`recurable_type`,`recurable_id`),
  ADD KEY `x26_recurring_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_reports`
--
ALTER TABLE `mbk_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_reports_company_id_index` (`company_id`),
  ADD KEY `x26_reports_class_index` (`class`);

--
-- Indexes for table `mbk_roles`
--
ALTER TABLE `mbk_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_roles_name_unique` (`name`);

--
-- Indexes for table `mbk_role_permissions`
--
ALTER TABLE `mbk_role_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `x26_role_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `mbk_sessions`
--
ALTER TABLE `mbk_sessions`
  ADD UNIQUE KEY `x26_sessions_id_unique` (`id`);

--
-- Indexes for table `mbk_settings`
--
ALTER TABLE `mbk_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_settings_company_id_key_unique` (`company_id`,`key`),
  ADD KEY `x26_settings_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_taxes`
--
ALTER TABLE `mbk_taxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_taxes_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_transactions`
--
ALTER TABLE `mbk_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_transactions_company_id_type_index` (`company_id`,`type`),
  ADD KEY `x26_transactions_account_id_index` (`account_id`),
  ADD KEY `x26_transactions_category_id_index` (`category_id`),
  ADD KEY `x26_transactions_contact_id_index` (`contact_id`),
  ADD KEY `x26_transactions_document_id_index` (`document_id`);

--
-- Indexes for table `mbk_transfers`
--
ALTER TABLE `mbk_transfers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_transfers_company_id_index` (`company_id`);

--
-- Indexes for table `mbk_users`
--
ALTER TABLE `mbk_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `x26_users_email_deleted_at_unique` (`email`,`deleted_at`);

--
-- Indexes for table `mbk_user_companies`
--
ALTER TABLE `mbk_user_companies`
  ADD PRIMARY KEY (`user_id`,`company_id`,`user_type`);

--
-- Indexes for table `mbk_user_dashboards`
--
ALTER TABLE `mbk_user_dashboards`
  ADD PRIMARY KEY (`user_id`,`dashboard_id`,`user_type`);

--
-- Indexes for table `mbk_user_permissions`
--
ALTER TABLE `mbk_user_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `x26_user_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `mbk_user_roles`
--
ALTER TABLE `mbk_user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `x26_user_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `mbk_widgets`
--
ALTER TABLE `mbk_widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `x26_widgets_company_id_dashboard_id_index` (`company_id`,`dashboard_id`),
  ADD KEY `x26_widgets_class_index` (`class`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mbk_accounts`
--
ALTER TABLE `mbk_accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_bills`
--
ALTER TABLE `mbk_bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_bill_histories`
--
ALTER TABLE `mbk_bill_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_bill_items`
--
ALTER TABLE `mbk_bill_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_bill_item_taxes`
--
ALTER TABLE `mbk_bill_item_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_bill_totals`
--
ALTER TABLE `mbk_bill_totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_categories`
--
ALTER TABLE `mbk_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mbk_companies`
--
ALTER TABLE `mbk_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_contacts`
--
ALTER TABLE `mbk_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mbk_currencies`
--
ALTER TABLE `mbk_currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mbk_dashboards`
--
ALTER TABLE `mbk_dashboards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_documents`
--
ALTER TABLE `mbk_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mbk_document_histories`
--
ALTER TABLE `mbk_document_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mbk_document_items`
--
ALTER TABLE `mbk_document_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_document_item_taxes`
--
ALTER TABLE `mbk_document_item_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mbk_document_totals`
--
ALTER TABLE `mbk_document_totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `mbk_email_templates`
--
ALTER TABLE `mbk_email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mbk_failed_jobs`
--
ALTER TABLE `mbk_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_firewall_ips`
--
ALTER TABLE `mbk_firewall_ips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_firewall_logs`
--
ALTER TABLE `mbk_firewall_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mbk_invoices`
--
ALTER TABLE `mbk_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_invoice_histories`
--
ALTER TABLE `mbk_invoice_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_invoice_items`
--
ALTER TABLE `mbk_invoice_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_invoice_item_taxes`
--
ALTER TABLE `mbk_invoice_item_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_invoice_totals`
--
ALTER TABLE `mbk_invoice_totals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_items`
--
ALTER TABLE `mbk_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mbk_item_taxes`
--
ALTER TABLE `mbk_item_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mbk_jobs`
--
ALTER TABLE `mbk_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_media`
--
ALTER TABLE `mbk_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_migrations`
--
ALTER TABLE `mbk_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mbk_modules`
--
ALTER TABLE `mbk_modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mbk_module_histories`
--
ALTER TABLE `mbk_module_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mbk_permissions`
--
ALTER TABLE `mbk_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `mbk_reconciliations`
--
ALTER TABLE `mbk_reconciliations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_reconciliation_mapping`
--
ALTER TABLE `mbk_reconciliation_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_reconciliation_transactions`
--
ALTER TABLE `mbk_reconciliation_transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2179;

--
-- AUTO_INCREMENT for table `mbk_reconciliation_upload`
--
ALTER TABLE `mbk_reconciliation_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mbk_recurring`
--
ALTER TABLE `mbk_recurring`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_reports`
--
ALTER TABLE `mbk_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mbk_roles`
--
ALTER TABLE `mbk_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mbk_settings`
--
ALTER TABLE `mbk_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mbk_taxes`
--
ALTER TABLE `mbk_taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `mbk_transactions`
--
ALTER TABLE `mbk_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_transfers`
--
ALTER TABLE `mbk_transfers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mbk_users`
--
ALTER TABLE `mbk_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mbk_widgets`
--
ALTER TABLE `mbk_widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mbk_media`
--
ALTER TABLE `mbk_media`
  ADD CONSTRAINT `original_media_id` FOREIGN KEY (`original_media_id`) REFERENCES `mbk_media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `mbk_mediables`
--
ALTER TABLE `mbk_mediables`
  ADD CONSTRAINT `x26_mediables_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `mbk_media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mbk_role_permissions`
--
ALTER TABLE `mbk_role_permissions`
  ADD CONSTRAINT `x26_role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `mbk_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `x26_role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `mbk_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mbk_user_permissions`
--
ALTER TABLE `mbk_user_permissions`
  ADD CONSTRAINT `x26_user_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `mbk_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mbk_user_roles`
--
ALTER TABLE `mbk_user_roles`
  ADD CONSTRAINT `x26_user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `mbk_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
