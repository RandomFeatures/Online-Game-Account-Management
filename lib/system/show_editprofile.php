<?php
/*
 Description:    display the edit profile form
 
 ****************History************************************
 Date:         	10.26.2009
 Author:       	Allen Halsted
 Mod:          	Creation
 ***********************************************************
 */

if (!isset($_SESSION['pythia_userid'])) {
    header("Location:http://".$_SERVER['SERVER_NAME']."/index.php?login");
    die(); //
}


$tmplatename = 'editprofile.tpl.php';

$objManageAccount = new manage_account_webservice();
$_results = &$objManageAccount->GetUserDetails();
//get user details
$row = $_results->getRow();
$firstname = $row['FirstName'];
$lastname = $row['LastName'];
$email = $row['Email'];


?>
