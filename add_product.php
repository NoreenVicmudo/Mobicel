<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="add_product.css"/>
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
					<h1 class="headline"> Add Product </h1>
					<hr class = "register-line">
						<form method="POST" id="register-form" target="_self">
							<div class="input-group">									
								<input type="text" name="prodName" placeholder="Product Name">
							</div>
							<div class="input-group">		
								<select name = "categoryType" class="custom-select"> 
									<option value="" disabled selected hidden>Gadget Type ▼ </option>
									<option value = "2"> Smartphone - Velocity </option>
									<option value = "3"> Tablet - Slate </option>
								</select>
							</div>							
							<div class="input-group">									
								<input type="text" name="processor" placeholder="Processor">
							</div>
							<div class="input-group">									
								<input type="text" name="camMP" placeholder="Camera Megapixel">
							</div>
							<div class="input-group">									
								<input type="text" name="desc" placeholder="Description">
							</div>
							<div class="input-group">
								<label for="imgUrl"> Upload Image: </label>
								<input type="file" name="imgUrl">
							</div>	
							<p class = "short-desc"> Prices per storage </p>
							<div class="input-group">
								<label for="64price"> 64GB: </label> 
								<input type="number" name="64price" placeholder="Set price"> 
							</div>		
							<div class="input-group">
								<label for="128price"> 128GB: </label>
								<input type="number" name="128price" placeholder="Set price"> 
							</div>	
							<div class="input-group">
								<label for="256price"> 256GB: </label>
								<input type="number" name="256price" placeholder="Set price"> 
							</div>		
							<p class = "short-desc"> Colors and Stocks </p>	
							<div class="input-group">
								<label for="color1"> Color1: </label>
								<input type="text" name="color1" placeholder="Set color"> 
								<input type="number" name="color1stock" placeholder="No. of stocks"> 
							</div>			
							<div class="input-group">
								<label for="color2"> Color2: </label>
								<input type="text" name="color2" placeholder="Set color"> 
								<input type="number" name="color2stock" placeholder="No. of stocks"> 
							</div>	
							<div class="input-group">
								<label for="color2"> Color3: </label>
								<input type="text" name="color3" placeholder="Set color"> 
								<input type="number" name="color2stock" placeholder="No. of stocks"> 
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