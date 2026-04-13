<?php
class dbConnection{
	private $conn;
		public function __construct(){
			$servername="localhost";
			$username="root";
			$password="";
			$database="crm";
			
			$this->conn = new mysqli($servername,$username,$password,$database);
			
				if($this->conn->connect_error){
					die("CONNECTION ERROR");
				}
		}
		
		public function getConnectionNew(){
			return $this->conn;
		}
}

?>