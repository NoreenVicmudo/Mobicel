<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="change.css"/>
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
					<h1 class="headline"> Change Password </h1>
					<hr class = "change-line">
						<form method="POST" id="change-form" target="_self">
							<div class="input-group">
								<!--<label for="password">Create New Password:</label>-->									
									<input type="password" name="password" placeholder="Create Password">
							</div>
							<div class="input-group">
								<!--<label for="password">Re-enter Password:</label>-->
									<input type="password" name="validatePass" placeholder="Confirm Password">
							</div>
							<button type="submit">Confirm</button>
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>