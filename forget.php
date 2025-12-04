<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="forget.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
		<title>MobiCel</title>
	</head>
	<body>
		
			<div class="bg-color">
				<div class="header"> 
					<a href="#default" class="logo">
						<img src="logo.png" alt="MobiCel Logo" class="logo-image">
					</a>
				</div>
					<hr class="separator">
			</div>
			<div class="container">
				<div id="glass">
					<h1 class="headline"> Find Your Account </h1>
					<hr class = "forget-line">
						<form method="POST" id="forget-form" target="_self">
							<div class="input-group">									
									<input type="text" name="findUsername" placeholder="Username">
							</div>
							<button type="submit">Continue</button>
							<div class = "sign-up">
								<p><a href="login.php">Try Again?</a></p>
								<p><a href="signup.php">Create New Account</a></p>
							</div>
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>