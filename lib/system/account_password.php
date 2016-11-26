<?php
 /*
Description:    Get the old and new passwors from the post 
				pass them to the web service for processing
                
****************History************************************
Date:         	10.29.09
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';


if (isset($_POST['oldpassword']) && isset($_POST['newpassword']))
{

	$objManageAccount=new manage_account_webservice();

	$oldpassword = (isset($_POST['oldpassword'])) ? $_POST['oldpassword'] : ''; 
	$newpassword = (isset($_POST['newpassword'])) ? $_POST['newpassword'] : ''; 

	//update user data
	$success = $objManageAccount->AccountUpdatePassword($oldpassword, $newpassword);
	unset($objManageAccount);
	
	if ($success)
	{
		print "Edit Successful";
	}else
		print "Edit Failed";
	
	
}

?>