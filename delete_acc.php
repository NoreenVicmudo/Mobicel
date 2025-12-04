<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="delete_acc.css"/>
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
					<h1 class="headline"> Delete Account </h1>
					<hr class = "register-line">
					<p class="short-desc">Are you sure you want to delete?</p>
						<form method="POST" id="register-form" target="_self">
							<div class="input-group">
									<input type="password" name="confirmDelete" placeholder="Enter your password to proceed...">
							</div>	
							<button type="submit">Continue</button><!--Babalik sa sellerpage.php-->
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>