<?php
 /*
Description:    destroy the current session and force a logout
                
****************History************************************
Date:         	10.30.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    
include ($_SERVER['DOCUMENT_ROOT'].'/lib/system/common/system_start_session.php');

//destrpy the session
$_SESSION=array();
session_destroy();

header ("Location:http://".$_SERVER['SERVER_NAME']."/index.php?login");
die(); //

?>