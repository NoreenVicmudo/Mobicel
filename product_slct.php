<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="product_slct.css">
</head>
<body>
	<div class="bg-color">
		<div class="header">
			<a href="#default" class="logo">
				<img src="logo.png" alt="MobiCel Logo" class="logo-image">
			</a>
		</div>
		<hr class="separator">
		<div class="container">
			<!-- Fixed Image Section -->
			<div class="fixed-image">
				<img src="slate_plus.png" alt="Product Image"><!--import image from database-->
			</div>

			<!-- Scrollable Content Section -->
			<div class="scroll-content">
				<!-- Product Info Section -->
				<section class="product-info">
					<h1>iPad Pro</h1><!--Import Item Name-->
					<p>From $999 or $83.25/mo. for 12 mo.</p><!--Import Description-->
				</section>
			
				<!-- Storage Options Section -->
				<section class="storage-options">
					<h2>Storage. Choose how much space you’ll need.</h2>
					<div class="option-container">
						<div class="option"> <!--Storage determines price, also from database-->
							<input type="radio" id="option1" name="storage">
							<label for="option1">64</label>
						</div>
						<div class="option">
							<input type="radio" id="option2" name="storage">
							<label for="option2">128GB
							</label>
						</div>
						<div class="option">
							<input type="radio" id="option3" name="storage">
							<label for="option3">256GB
							</label>
						</div>
					</div>
				</section>
				
				<!-- Color Options Section -->
				<section class="color-options">
					<h2>Finish. Pick your favorite color.</h2>
					<div class="option-container"> <!--Color Variations in Database-->
						<div class="option">
							<input type="radio" id="color1" name="color" value="color1">
							<label for="color1">Silver</label>
						</div>
						<div class="option">
							<input type="radio" id="color2" name="color" value="color2">
							<label for="color2">Space Black</label>
						</div>
					</div>
				</section>
				
				<!-- Add to Cart Section -->
				<section class="add-to-cart-section">
					<h2>Total Price: $999</h2><!--Yung amount depende sa sinelect na storage-->
					<button class="add-to-cart">Add to Cart</button>
				</section>
			</div>
		</div>
	</div>
</body>
</html>


