<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="homepage.css"/>
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
		<div class="container">
        <div class="banner">
            <img src="banner.jpg" alt="Buy MobiCel Now">
            <div class="overlay">
                <h1 class="tagline">Reimagine. Reinvent. Challenge.</h1>
				<p class="short-desc">Shop the latest in MobiCel. Free delivery.</p>
            </div>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="image-container">
                    <img src="velocity_prev.jpg" alt="Velocity MobiCel Phone">
                </div>
                <div class="product-info">
                    <h3><center>Velocity</center></h3>
                    <p class="desc">The product you love.</p>
                    <center><a href="velocity_slct.php" class="button">Buy Slate</a></center>
                </div>
            </div>
            <div class="product-card">
                <div class="image-container">
                    <img src="slate_prev.jpg" alt="Diamonds">
                </div>
                <div class="product-info">
                    <h3><center>Slate Tablets</center></h3>
                    <p class="desc">Best for graphic design.</p>
                    <center><a href="slate_slct.php" class="button">Buy Slate</a></center>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer">
        <p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>
    </div>
    <script src="homepage.js"></script>
</body>
</html>
