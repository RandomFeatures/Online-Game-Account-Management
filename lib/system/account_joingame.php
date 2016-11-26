<?php
 /*
Description:    User submitted a "join game" request
                
****************History************************************
Date:         	11.16.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/configs/base.inc.php');
include ($_SERVER['DOCUMENT_ROOT'].'/lib/configs/game.config.inc.php')
include_once $_SERVER['DOCUMENT_ROOT'] . '/apps/myaccount/lib/system/ws_manage_account.class.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/common/ws_gameplay.class.php';

if (isset($_POST['gamelist']))
{

	$objManageAccount=new manage_account_webservice();

	$gameID = (isset($_POST['gamelist'])) ? $_POST['gamelist'] : '1'; 
	$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '0';
	//update user data
	$success = $objManageAccount->JoinGame($gameID);
	$objManageAccount->TestGame($gender,$gameID);
	unset($objManageAccount);
	
	if ($success)
	{
		//Call the game login WS
		$objGamePlay=new game_play_webservice(SESSION_EXP, GAME_NAME, GAME_SOURCE);
		$success = $objGamePlay->Login($_SESSION['username'], $_SESSION['password']);
		unset($objGamePlay);
		if ($success)
		{
			header ("Location:http://".$_SERVER['SERVER_NAME']."/game/index.php?myrealm");
    		die(); //
		}
	}else
		print "Join Failed";
}
?>