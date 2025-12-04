<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="personal_info.css"/>
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
					<h1 class="headline"> Fill Information </h1>
					<hr class = "personalinfo-line">
						<form method="POST" id="personalinfo-form" target="_self">
							<div class="input-group">									
									<input type="text" name="street" placeholder="Street Name, Building, House No., Barangay">
							</div>
							<div class="input-group">
									<input type="text" name="city" placeholder="City">
							</div>
							<div class="input-group">
									<input type="text" name="state" placeholder="State/Province">
							</div>						
							<div class="input-group">
									<input type="number" name="postalcode" placeholder="Postal Code">
							</div>			
							<button type="submit">Create Account</button>
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>