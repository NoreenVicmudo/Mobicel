<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="edit_acc_info.css"/>
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
					<h1 class="headline"> Edit Info </h1>
					<hr class = "register-line">
						<form method="POST" id="register-form" target="_self">
							<div class="input-group">									
									<input type="text" name="f_name" placeholder="First Name">
									<input type="text" name="l_name" placeholder="Last Name">
							</div>	
							<div class="input-group">
									<input type="number" name="u_email" placeholder="Phone Number">
							</div>		
							<div class="input-group">
									<input type="date" name="u_birthdate" placeholder="Birthday">
							</div>
							<div class="input-group">
									<input type="text" name="u_street" placeholder="Street">
							</div>	
							<div class="input-group">
									<input type="text" name="u_city" placeholder="City">
							</div>
							<div class="input-group">
									<input type="text" name="u_state" placeholder="State">
							</div>
							<div class="input-group">
									<input type="text" name="u_postal" placeholder="Postal Code">
							</div>					
							<button type="submit">Continue</button>
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>