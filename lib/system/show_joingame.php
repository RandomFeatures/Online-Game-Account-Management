<?php
 /*
Description:    Load the "join game" screen
                
****************History************************************
Date:         	11.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

include_once $_SERVER['DOCUMENT_ROOT'] . '/lib/system/myaccount/ws_manage_games.class.php';


if (!isset($_SESSION['pythia_userid'])) {
    header("Location:http://".$_SERVER['SERVER_NAME']."/index.php?login");
    die(); //
}


$tmplatename='joingame.tpl.php';

$objManageGames=new manage_games_webservice();

$gamelist = '';
//get game list
$_results = &$objManageGames->GetActiveGameList();
if ($_results)
while ($row = $_results->getRow()) {
	
	$gamelist = $gamelist.'<option value="'.$row['gameID'].'">'.$row['gameName'].'</option>';
	
}


?>