<?php

require_once __DIR__ . '/../dao/CustomersDao.class.php';

class CustomerService {
	private $customer_dao;

	public function __construct() {
		$this -> customer_dao = new CustomerDao();
	}

	public function register_customer($customer) {
		return $this -> customer_dao -> register_customer($customer);
	}
}
