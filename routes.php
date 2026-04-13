<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__. "/controllers/customerController.php";

$controller = new customerController();

	$action = $_GET['action'] ?? '';
	
	switch($action){
		case 'add':
				$controller->addNew();
				break;
		
		case 'view':
				$result=$controller->viewAll();
				include "views/customers/view.php";
				break;
		
		case 'addNew':
				include "views/customers/add.php";
				break;
				
		case 'delete':
				$controller->deleteValueById();
				include "views/customers/view.php";
				break;
				
		case 'getDetails':
				$result=$controller->getFetchedDetailsById();
				include "views/customers/update.php";
				break;

		case 'updateByAll':
				$controller->updateDetails();
				break;
				
		default :
				include "views/customers/add.php";
				break;	
	}
?>