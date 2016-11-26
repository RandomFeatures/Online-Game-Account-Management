<?php
/*
Description:    verify the username and password with the WS
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';


if (isset($_POST['username']) && isset($_POST['password']))
{

	
	$objManageAccount=new manage_account_webservice();
	$success = $objManageAccount->AccountLogin($_POST['username'],$_POST['password']);
	unset($objManageAccount);
	
	if ($success)
	{
		 header ("Location:http://".$_SERVER['SERVER_NAME']."/apps/myaccount/index.php?details");
    	die(); //
	}else
		print "Login Failed";
	
}


?>
