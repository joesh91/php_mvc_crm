<?php
require_once __DIR__ . "/../config/dbConnection.php";
class customer{
	private $dbconn;
	private $table = "CUSTOMERS";
	
	public function __construct($db){
		
		$this->dbconn = $db;
		
	}
		// ADD NEW VALUES
	public function store($data){
		
		$pstmt = $this->dbconn->prepare("INSERT INTO $this->table 
		(FULL_NAME,NIC,DOB,ADDRESS,PHONE_NO,EMAIL,ACCOUNT_TYPE,BALANCE) 
		VALUES 
		(?,?,?,?,?,?,?,?)
		");
		
		$pstmt->bind_param("sssssssd",
							$data['full_name'],
							$data['nic'],
							$data['dob'],
							$data['address'],
							$data['phone_no'],
							$data['email'],
							$data['account_type'],
							$data['balance']			
		);
		return $pstmt->execute();
	}
	
		// READ VALUES
	public function readAll(){
		
		$sql = "SELECT * FROM $this->table";
		
		return $this->dbconn->query($sql);
		
	}
	
		// DELETE A VALUE 
	public function deleteValue($id){
		
		$pstmt = $this->dbconn->prepare("DELETE FROM $this->table WHERE ID=(?)");
		
		$pstmt->bind_param("i",$id);
		
		$pstmt->execute();
			
	}
	
	public function getDetailsById($id){
		
		$pstmt = $this->dbconn->prepare("SELECT * FROM $this->table WHERE ID=?");
		
		$pstmt->bind_param("i",$id);
		
		$pstmt->execute();
		
		$result =  $pstmt->get_result();
		
		return $result;
		
	
	}
	
	public function updateAll($data){
		
		$pstmt = $this->dbconn->prepare("UPDATE $this->table
										SET FULL_NAME = ?,
											NIC = ?,
											DOB = ?,
											ADDRESS = ?,
											PHONE_NO = ?,
											EMAIL = ?,
											ACCOUNT_TYPE = ?,
											BALANCE = ?
										WHERE ID = ?										
											");
											
		$pstmt->bind_param("sssssssdi",
								$data['full_name'],
								$data['nic'],
								$data['dob'],
								$data['address'],
								$data['phone_no'],
								$data['email'],
								$data['account_type'],	
								$data['balance'],
								$data['id']
								);
		
		return $pstmt->execute();
	}
	
}


?>