<?php

require_once __DIR__ . '/rest/services/CustomerService.class.php';

$customer_service = new CustomerService();
$customer_service -> register_customer([]);
