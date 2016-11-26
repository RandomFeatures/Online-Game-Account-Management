<?php
/*
Description:    Main index page
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/tbs.inc.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/config.inc.php');
	include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';

  
  //default settings
$SectionID = 1;
$PageType = 0;
$myserver = $_SERVER['SERVER_NAME'];

//template class
$tpl = new clsTinyButStrong;

if (isset($_GET['register']))
{
	//Load Register page
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_register.php');
}elseif (isset($_GET['login']))
{
	//Load Login Page
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_login.php');
}elseif (isset($_GET['details']))
{
	//Load account details
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_accountdetails.php');
}elseif (isset($_GET['password']))
{
	//Load change password
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_password.php');
}elseif (isset($_GET['profile']))
{
	//Load edit profile
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_editprofile.php');
}elseif (isset($_GET['sendpass']))
{
	//Load edit profile
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_sendpassword.php');
}elseif (isset($_GET['joingame']))
{
	//Load Join Game
	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_joingame.php');
}else{
	//Load the main page
 	include($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/show_login.php');
}


//Load and display the template
$tpl->LoadTemplate($_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/templates/' . $tmplatename);
$tpl->Show();
?>
