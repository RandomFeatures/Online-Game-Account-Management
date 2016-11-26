<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="generator" content= "HTML Tidy, see www.w3.org" />
        <meta http-equiv="Content-Type" content= "text/html; charset=ISO-8859-1" />
        <title>Character Creation</title>
        <link rel="stylesheet" type="text/css" media="screen" href= "/public/css/screen.css" />
        <script src="/public/scripts/jquery.js" type="text/javascript">
        </script>
        <script src="/public/scripts/jquery.validate.js" type= "text/javascript">
        </script>
        <script type="text/javascript">
            
            
            $().ready(function(){
                // validate signup form on keyup and submit
                
                
                $("#joingame").validate({
                    rules: {
                        oldpassword: "required",
                        newpassword: {
                            required: true,
                            minlength: 5
                        },
                        confirm_password: {
                            required: true,
                            minlength: 5,
                            equalTo: "#newpassword"
                        }
                    },
                    messages: {
                        oldpassword: "Please enter your old password",
                        newpassword: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                        confirm_password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 5 characters long",
                            equalTo: "Please enter the same password as above"
                        }
                    }
                });
                
                var elements = $("input[type!='submit'], textarea, select");
                elements.focus(function(){
                    $(this).parents('p').addClass('highlight');
                });
                elements.blur(function(){
                    $(this).parents('p').removeClass('highlight');
                });
                
                
                // check if confirm password is still valid after password changed
                $("#newpassword").blur(function(){
                    $("#confirm_password").valid();
                });
                
            });
        </script>
    </head>
    <body>
        <div id="page">
            <div id="header">
                <h1>Character Creation</h1>
            </div>
            <div id="content">
                <ul class="menu">
				  <li><a href="http://[var.myserver]/apps/myaccount/?details"><span>Home</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?profile"><span>Edit Profile</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?password"><span>Change Password</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?joingame" class="active"><span>Join Game</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?logout"><span>Logout</span></a></li>
				</ul>
                <form action="/apps/myaccount/lib/system/account_joingame.php" method="post" id="joingame">
                    <fieldset>
                        <legend>
                            Character Creation
                        </legend>
                        <p>
                            <label for="gamelist">
                                Select Game
                            </label>
							<select id="gamelist" name="gamelist">
								[var.gamelist;htmlconv=no;protect=no;noerr]
							</select>
                        </p>
                         <p>
                            <label for="charname">
                               Enter your character's name
                            </label>
							<input id="charname" name="charname" type="text"/>
                        </p>
                        
                        <p>
                            <label for="gender">
                                Select Character Gender
                            </label>
							<select id="gender" name="gender">
								<option value="0">Male</option>
								<option value="1">Female</option>
							</select>
                        </p>
                        <p>
                            <input class="submit" type="submit" value="Start" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>