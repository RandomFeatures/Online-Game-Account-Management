<?php
 /*
Description:    Get the profile changes from the form post
				and submit them to the WS
                
****************History************************************
Date:         	10.29.09
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']))
{

	$objManageAccount=new manage_account_webservice();

	$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; 
	$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; 
	$email = (isset($_POST['email'])) ? $_POST['email'] : ''; 
	
	//Get Old User data 
	$_results = &$objManageAccount->GetUserDetails();
	$row = $_results->getRow();
	$login = $row['Login'];
	$status = $row['AccountStatus'];
	//update user data
	$success = $objManageAccount->AccountUpdate($login, $firstname, $lastname, $email, $status);
	
	unset($objManageAccount);
	
	if ($success)
	{
		print "Edit Successful";
	}else
		print "Edit Failed";
}

?>