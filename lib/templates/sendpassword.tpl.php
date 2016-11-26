<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Request Account Details</title>

<link rel="stylesheet" type="text/css" media="screen" href="/public/css/screen.css" />

<script src="/public/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="/public/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
		
		
		$().ready(function() {
			// validate signup form on keyup and submit
		
				
		$("#sendpassword").validate({
				rules: {
					email: {
						required: true,
						email: true
					}
				},
				messages: {
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
			<h1>Request Account Details</h1>
		</div>

		<div id="content">
		
			<p id="status"></p>
			<form action="/apps/myaccount/lib/system/account_sendpassword.php" method="post" id="sendpassword">
				<fieldset>
					<legend>Account Details</legend>
						<p>
							<label for="email">Email</label>
							<input id="email" name="email" type="text" />
						</p>
						<p>
							<input class="submit" type="submit" value="Submit"/>
						</p>
				<div class="clear"></div>
				</fieldset>
			</form>
			
		</div>
	</div>
	
</body>
</html>
