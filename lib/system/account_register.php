<?php
/*
Description:    Get the registration data from the form post
				and submit it to the webservice
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
 
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/lib/system/common/system_start_session.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST[captcha]))
{
	$success = FALSE;
	
	if($_POST[captcha] == $_SESSION[captcha])
	{
		$objManageAccount=new manage_account_webservice();
		$username = (isset($_POST['username'])) ? $_POST['username'] : ''; 
		$password = (isset($_POST['password'])) ? $_POST['password'] : ''; 
		$firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; 
		$lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; 
		$email = (isset($_POST['email'])) ? $_POST['email'] : ''; 
	
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		
		$success = $objManageAccount->AccountRegister($username, $password, $firstname, $lastname, $email);
		unset($_SESSION[captcha]); 
		unset($objManageAccount);
	}
	
	if ($success)
	{
		header ("Location:http://".$_SERVER['SERVER_NAME']."/?joingame");
		die();
	}else
		print "Registeration Failed - You failed the Captcha test";
	
	
}else
	print "Registeration Failed - You have to provide a username, password and pass the Captcha test";
	



?>
