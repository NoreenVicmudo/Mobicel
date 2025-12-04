<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>MobiCel</title>
		<link rel="stylesheet" href="login.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
	</head>
	<body>
		<video id="bg-vid" class="bg-vid" autoplay loop muted>
			<source src="ad.mp4" type="video/mp4">
		</video>
		
		<div class="overlay">
			<h1 class="tagline">Reimagine. Reinvent. Challenge.</h1>
				<p class="short-desc">Get EchoPods and Slate. Terms apply. Also shop for Velocity, Slate, Echopods, Pulse Watch and more. Shop MobiCel accessories. Free delivery.</p>
				<div class="continue">
					<div class="scroll-login">
						<a href="#login" id="continue-link"><p>Click here to Continue</p>
						<i class="arrow down"></i></a>
					</div>
					<script src="scroll_to_login.js"></script>
				</div>
		</div>

		<div class="content" id="login-section">
			<div class="whitescreen">
				<div id="glass">
					<h1 id="login" class="headline">Login</h1>
					<hr class = "login-line">
					<form method="POST" id="login-form" target="_self">
						<div class="input-group">
							<input type="text" id="username" name="username" placeholder="Username">
						</div>
						<div class="input-group">
							<input type="password" id="password" name="password" placeholder="Password">
						</div>						
						<button type="submit">Login</button>
						<div class="sign-up">
							<p>Can't log in?<a href="forget.php"> Forget Password</a></p>
							<p>Don't have an account?
							<a href="signup.php"> Sign Up!</a></p>
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
				<p class="footer-rights"> Copyright © MobiCel Corp. All Rights Reserved. </p>	
			</div>
		</div>

		<button id="mute-unmute-btn">Unmute</button>
		<script src="vid_prev.js"></script>
		
	</body>
</html>
