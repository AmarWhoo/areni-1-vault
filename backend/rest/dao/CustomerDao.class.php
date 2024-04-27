<?php

require_once __DIR__ . '/BaseDao.class.php';

class CustomerDao extends BaseDao {
	public function __construct() {
		parent::__construct('Customers');
	}

	public function register_customer($customer) {
		return $patient;
	}
}
