<?php
 /*
Description:    show the change password form
                
****************History************************************
Date:         	10.11.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

	if (!isset($_SESSION['pythia_userid']))
	{
		header ("Location:http://".$_SERVER['SERVER_NAME']."/index.php?login");
    	die(); //
	}


$tmplatename='changepassword.tpl.php';
?>