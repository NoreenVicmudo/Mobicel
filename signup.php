<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="signup.css"/>
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
					<h1 class="headline"> Sign Up </h1>
					<hr class = "register-line">
						<form method="POST" id="register-form" target="_self">
							<div class="input-group">									
									<input type="text" name="fname" placeholder="First Name">
									<input type="text" name="lname" placeholder="Last Name">
							</div>
							<div class="input-group">
									<input type="date" name="birthdate" placeholder="Birthday">
							</div>
							<div class="input-group">
									<input type="text" name="email" placeholder="Email">
							</div>						
							<div class="input-group">
									<input type="number" name="contact" placeholder="Phone Number">
							</div>
							<div class="input-group">
									<input type="text" name="username" placeholder="Username">
							</div>						
							<div class="input-group">
									<input type="password" name="pass" placeholder="Password">
							</div>
							<div class="input-group">
									<input type="password" name="checkPass" placeholder="Confirm Password">
							</div>					
							<div class="input-group">		
								<select name = "paymentMethod" class="custom-select"> 
									<option value="" disabled selected hidden>Select Mode of Payment ▼ </option>
									<option value = "2"> Cash on Delivery </option>
									<option value = "3"> Card </option>
								</select>
							</div>
							<button type="submit">Continue</button>
							<div class = "sign-up">
								<p>Have an account?<a href="login.php"> Login</a></p>
							</div>
						</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
			</div>
			
	</body>
</html>