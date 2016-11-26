<?php
 /*
Description:    Display the users account details
                
****************History************************************
Date:         	10.18.2009
Author:       	Allen Halsted
Mod:          	Creation
***********************************************************
*/    

	if (!isset($_SESSION['pythia_userid']))
	{
		header ("Location:http://".$_SERVER['SERVER_NAME']."/index.php?login");
    	die(); //
	}
		
	$tmplatename = 'accountdetails.tpl.php';
			
	$objManageAccount=new manage_account_webservice();
	$_results = &$objManageAccount->GetUserDetails();
	//get user details
	$row = $_results->getRow();
	$firstname = $row['FirstName'];
	$lastname = $row['LastName'];
	$email = $row['Email'];
	$gamelist = "";
	
	//get game list
	$_results = &$objManageAccount->GetUserGames();
	if ($_results)
	while ($row = $_results->getRow()) {

    	$game = $row['GameName'];
    	$startdate = $row['UserStart'];
    	$source = $row['Source'];
		$active = $row['Active'];
		$history = '';
		$gameid = $row['GameID'];
		//purchase History					
		$_histresults = $objManageAccount->GetUserPurchases($gameid);
		if ($_histresults)
			While ($histrow = $_histresults->getRow()) {
				$history = 	$history.$histrow['PurchaseDate']. ' - '.$histrow['ProductName'].'<br/>';
			}

			$gamelist = $gamelist.'<div><h3><a href="#">'.$game.'</a></h3><div>';
			
		
        $gamelist = $gamelist.' <div id="apDiv0">
                            <div class="logo">
                                <p>Logo Image</p>
                            </div>
                            <div class="wrapdetail">';
		
			
        if (strcmp($active, "true")==0)
			$gamelist = $gamelist.'<div class="statusactive" align="Right"><strong>Active  </strong></div>';
		else
        	$gamelist = $gamelist.'<div class="statusinactive" align="Right"><strong>Inactive  </strong></div>';
								
		
		$gamelist = $gamelist.'<div class="details">
                                    <div align="left">
                                        <span class="caption">Portal</span><br/>
                                       	'.$source.'<br/>
                                        <span class="caption">Signup Date</span><br/>
										'.$startdate.'<br/>
                                    </div>
                                </div>
                                <div class="history"><span class="caption">History</span><br/>'.
									$history.							
		                        '</div>
                            </div>
                        </div>
                        <div class="clear">
                        </div>';
	
		$gamelist = $gamelist.'<div class="clear"></div></div></div>';
	
	
		$rtn = TRUE;
	}

	
	  //Load and display the template
  	//$tpl->LoadTemplate($_SERVER['DOCUMENT_ROOT'] . '/lib/templates/accountdetails.tpl.php');
  	//$tpl->Show();

?>