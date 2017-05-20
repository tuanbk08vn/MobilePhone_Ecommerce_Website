<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/configs/config.php';

class Connection {
	private $DB_SERVER;
	private $DB_USERNAME;
	private $DB_PASSWORD;
	private $DB_DATABASE;
	private $db;
	public function __construct() {
		$this->DB_SERVER = DB_SERVER;
		$this->DB_USERNAME = DB_USERNAME;
		$this->DB_PASSWORD = DB_PASSWORD;
		$this->DB_DATABASE = DB_DATABASE;
	}
	public function __destruct() {
		unset($this->db);
	}

	public function db_connect() {
		$this->db = new mysqli($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_DATABASE);
		return $this->db;
	}
	public function doQuery($sql) {
		$this->db->query($sql);
	}
	public function getLastInsertID() {
		return $this->db->insert_id;
	}
}

