<?php

class Database {
	
	private $host = 'localhost';
	private $dbname = 'db_projek';
	private $uname = 'root';
	private $pass = '';
	public $db;
	
	// koneksi ke database
	public function konek() {
		
		$this->db = null;
		
		try {
			$this->db = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->uname, $this->pass);
		} catch(PDOException $exception) {
			echo "Connection Error: " . $exception->getMessage();
		}
		
		return $this->db;
	}
}