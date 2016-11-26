<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="generator" content=
        "HTML Tidy, see www.w3.org" />
        <meta http-equiv="Content-Type" content=
        "text/html; charset=ISO-8859-1" />

        <title>Account Details</title>
        <link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />
		<link type="text/css" href="/public/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="/public/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="/public/js/jquery-ui-1.7.2.custom.min.js"></script>

		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
			
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
		
    </head>

    <body>
        <div id="page">
            <div id="header">
                <h1>My Account</h1>
            </div>

            <div id="content">
               <ul class="menu">
				  <li><a href="http://[var.myserver]/apps/myaccount/?details" class="active"><span>Home</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?profile"><span>Edit Profile</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?password"><span>Change Password</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?joingame"><span>Join Game</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?logout"><span>Logout</span></a></li>
				</ul>

                <form action="" method="" id="">
                    <fieldset>
                        <legend>User Details <a class="smalllink" href="http://[var.myserver]/apps/myaccount/?profile">[ edit ]</a></legend> 

                        <p><label for="firstname">First
                        Name</label> [var.firstname]<br />
                        </p>

                        <p><label for="lastname">Last Name</label>
                        [var.lastname]<br />
                        </p>

                        <p><label for="email">Email</label>
                        [var.email]<br />
                        </p>
                    </fieldset>
                </form>
				<!-- Accordion -->
				<h2 class="demoHeaders">Game List</h2>
				<div id="accordion">
					 [var.gamelist;htmlconv=no;protect=no;noerr]
				</div>
						
            </div>
        </div>
    </body>
</html>

