<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Edit Profile</title>

<link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />

<script src="/public/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="/public/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
		
		
		$().ready(function() {
			// validate signup form on keyup and submit
		
				
		$("#editprofile").validate({
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					email: "Please enter a valid email address name@domain.com"
				}
			});
			
			var elements = $("input[type!='submit'], textarea, select");
		elements.focus(function(){
			$(this).parents('p').addClass('highlight');
		});
		elements.blur(function(){
			$(this).parents('p').removeClass('highlight');
		});
			
			
		});
</script>

</head>
<body>
	<div id="page">

		<div id="header">
			<h1>Edit My Profile</h1>
		</div>

		<div id="content">
		
                <ul class="menu">
				  <li><a href="http://[var.myserver]/apps/myaccount/?details"><span>Home</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?profile" class="active"><span>Edit Profile</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?password"><span>Change Password</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?joingame"><span>Join Game</span></a></li>
				  <li><a href="http://[var.myserver]/apps/myaccount/?logout"><span>Logout</span></a></li>
				</ul>

			<p id="status"></p>
			<form action="/apps/myaccount/lib/system/account_editprofile.php" method="post" id="editprofile">
				<fieldset>
					<legend>User details</legend>
						<p>
							<label for="firstname">Firstname</label>
							<input id="firstname" name="firstname" type="text" value="[var.firstname]" />
						</p>
						
						<p>
							<label for="lastname">Lastname</label>
							<input id="lastname" name="lastname" type="text" value="[var.lastname]" />
						</p>
						<p>
							<label for="email">Email</label>
							<input id="email" name="email" type="text" value="[var.email]" />
						</p>
						<p>
							<input class="submit" type="submit" value="Save"/>
						</p>
				<div class="clear"></div>
				</fieldset>
			</form>
			
		</div>
	</div>
	
</body>
</html>
