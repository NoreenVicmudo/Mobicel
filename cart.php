<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cart.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>MobiCel</title>
</head>
<body>
    <div class="bg-color">
        <div class="header"> 
            <a href="#default" class="logo">
                <img src="logo.png" alt="MobiCel Logo" class="logo-image">
            </a>
            <!-- Hamburger Menu -->
            <div class="menu-toggle" id="menu-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
			<div class="menu-container">
				<ul id="menu">
					<li><a href="homepage.php">Home</a></li>
					<li><a href="velocity_slct.php" class="dropbtn">Velocity</a></li>
					<li><a href="slate_slct.php" class="dropbtn">Slate</a></li>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn">My Account<i class="arrow down"></i></a>
						<div class="dropdown-content">
							<a href="acc_settings_user.php">Edit Account</a>
							<a href="user_acc_info.php">Update information</a>
							<a href="login.php">Logout</a>
							<hr>
							<a href="user_delete_acc.php" class="delete-account">Delete Account</a>
						</div>
					</li>
					<li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
				</ul>
			</div>
            <hr class="separator">
        </div>
    </div>
	<div class="container">
        <div id="cart">
            <h1 class="headline">Your Cart</h1>
            <hr class="register-line">
            
            <div class="cart-items">
                <!-- Example item -->
                <div class="cart-item">
                    <img src="velocity.png" alt="Product Image" class="item-image">
                    <div class="item-details">
                        <h2 class="item-title">Product Name</h2>
                        <p class="item-price">$999.00</p>
                        <div class="item-quantity">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1">
                        </div>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
				<div class="cart-item">
                    <img src="slate_plus.png" alt="Product Image" class="item-image">
                    <div class="item-details">
                        <h2 class="item-title">Product Name</h2>
                        <p class="item-price">$999.00</p>
                        <div class="item-quantity">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1">
                        </div>
                        <button class="remove-item">Remove</button>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>

            <div class="cart-summary">
                <h2>Order Summary</h2>
                <p><strong>Total Items:</strong> 1</p>
                <p><strong>Total Price:</strong> $999.00</p>
                <button class="checkout-button">Proceed to Checkout</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
    </div>
    <script src="velocity_slct.js"></script>
</body>
</html>

