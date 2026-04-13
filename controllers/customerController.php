<?php
require_once __DIR__ . "/../config/dbConnection.php";
require_once __DIR__ . "/../models/customer.php";
require_once __DIR__ . "/../core/Validator.php";


class customerController {
private $customer;
		
		public function __construct(){
			$dbc = new dbConnection();
			$this->customer = new customer($dbc->getConnectionNew());
		}
		
	public function addNew(){
		$errors =[];
		$data = [
		'full_name'		=>  $_POST['full_name']	??'',
		'nic'			=>	$_POST['nic']	??	'',
		'dob'			=> 	$_POST['dob']	??	'',
		'address'		=>	$_POST['address']	?? '',
		'phone_no'		=>	$_POST['phone_no']	?? '',
		'email'			=>  $_POST['email']	??	'',
		'account_type' 	=>	$_POST['account_type']	?? '',
		'balance'		=>	$_POST['balance']	?? '',
		
		
	];
			
			if(!validator::requiredValName($data['full_name'])){
				$errors['full_name'] = "NAME IS REQUIRED";
			}
			
			if(!validator::nicVal($data['nic'])){
				$errors['nic'] = "INVALID NIC";				
			}
			
			if(!validator::emailVal($data['email'])){
				$errors['email'] = "Invalid Email"; 
			}
			
			if(!validator::minVal($data['balance'],1000)){
				$errors['deposit'] = "MINIMUM DEPOSIT IS 1000";
			}

			if(!empty($errors)){
				require __DIR__ ."/../views/customers/add.php";
				return;
			}
		
			$this->customer->store($data);
			header("location:index.php?action=view");
			exit();
		}
		
	
	public function viewAll(){
		
		return $this->customer->readAll();
	}
	
	public function deleteValueById(){
		
		$id = $_GET['id'] ?? '';
		
			if($id != NULL){
				$this->customer->deleteValue($id);
			}
			
			header("location:index.php?action=view");
			exit();
	} 
	
	public function getFetchedDetailsById(){
		
		$id = $_GET['ID'] ?? '';
			
			if(!empty($id)){
							
				return $this->customer->getDetailsById($id);
			
			}else{
				return false;
			}
	}
	
	public function updateDetails(){
		
		$errors = [];
		
		$data =[
		'id'			=>	$_POST['id']?? '',
		'full_name' 	=> 	$_POST['full_name'] ?? '',
		'nic'			=>	$_POST['nic'] ?? '',
		'dob'			=>	$_POST['dob'] ?? '',
		'address'		=>	$_POST['address'] ?? '',
		'phone_no'		=>	$_POST['phone_no'] ?? '',
		'email'			=>	$_POST['email'] ?? '',
		'account_type'	=>	$_POST['account_type'] ?? '',
		'balance'		=>	$_POST['balance']
		];
			
			if(!validator::requiredValName($data['full_name'])){
				$errors['full_name'] = "NAME IS REQUIRED";
			}
			
			if(!validator::nicVal($data['nic'])){
				$errors['nic'] = "INVALID NIC";				
			}
			
			if(!validator::emailVal($data['email'])){
				$errors['email'] = "Invalid Email"; 
			}
			
			if(!validator::minVal($data['balance'],1000)){
				$errors['deposit'] = "MINIMUM DEPOSIT IS 1000";
			}
			
				if(!empty($errors)){
					require "views/customers/add.php";
					return;
				}
	
				$this->customer->updateAll($data);
				header("location:index.php?action=view");
				exit();			
	}	
}
?>