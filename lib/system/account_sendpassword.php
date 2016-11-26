<?php
 /*
Description:    Get the users email from the webpost and 
				 request an account details email from the WS
                
****************History************************************
Date:         	{DATE}
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/config.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';

if (isset($_POST['email']))
{

	$objManageAccount=new manage_account_webservice();
	
	$email = $_POST['email'];
	//print $email;
	$objManageAccount->EmailAccountDetails($email);
	unset($objManageAccount);
	
	Print ("Your account details have been emailed.");
}

	
?>