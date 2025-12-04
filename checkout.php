<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="checkout.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MobiCel Checkout</title>
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
        <div id="checkout">
            <h1 class="headline">Checkout</h1>
            <hr class="register-line">
            
            <div class="receipt">
                <!-- Example item -->
                <div class="receipt-item">
                    <img src="velocity.png" alt="Product Image" class="item-image">
                    <div class="item-details">
                        <h2 class="item-title">Product Name</h2>
                        <p><strong>Storage:</strong> 128GB</p>
                        <p><strong>Color:</strong> Black</p>
						<p><strong>Quantity:</strong> 1</p>
                    </div>
                </div>
                
                <div class="address-details">
                    <h2>Shipping Address</h2>
                    <p>123 Main Street</p>
                    <p>City, State, ZIP</p>
                </div>
                
                <div class="payment-details">
                    <h2>Payment Method</h2>
                    <p>Credit Card</p>
                </div>

                <div class="order-summary">
                    <h2>Order Summary</h2>
                    <p><strong>Total Items:</strong> 1</p>
                    <p><strong>Total Price:</strong> $999.00</p>
                </div>
                
                <button class="place-order-button">Place Order</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
    </div>
    <script src="velocity_slct.js"></script>
</body>
</html>
