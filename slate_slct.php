                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <!--<!DOCTYPE html> ETOOOOOOOOOOO YUNG SAMPLE NG PHP
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product UI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="carousel-container">
        <div class="product-container">
		/*
            <?php
            /*// Example array of products, you can fetch these from a database
            $products = [
                ["name" => "iPad Pro", "image" => "ipad_pro_image_url", "description" => "The ultimate iPad experience with the most advanced technology.", "price" => "From $999 or $83.25/mo. for 12 mo.*", "tag" => "New"],
                ["name" => "iPad Air", "image" => "ipad_air_image_url", "description" => "Serious performance in a thin and light design.", "price" => "From $599 or $49.91/mo. for 12 mo.*", "tag" => "New"],
                ["name" => "iPad", "image" => "ipad_image_url", "description" => "The colorful, all-screen iPad for the things you do every day.", "price" => "From $349 or $29.08/mo. for 12 mo.*", "tag" => "New Price"],
                // Add more products as needed
            ];

            foreach ($products as $product) {
                echo '<div class="product">
                        <img src="'.$product['image'].'" alt="'.$product['name'].'">
                        <h2>'.$product['tag'].'</h2>
                        <h1>'.$product['name'].'</h1>
                        <p>'.$product['description'].'</p>
                        <button class="learn-more">Learn more</button>
                        <button class="buy">Buy ›</button>
                      </div>';
            }
            ?>
        </div>
        <div class="carousel-controls">
            <button class="carousel-button prev">&lt;</button>
            <div class="carousel-dots">
                <?php
                foreach ($products as $index => $product) {
                    $activeClass = $index === 0 ? 'active' : '';
                    echo '<span class="dot '.$activeClass.'"></span>';
                }*/
                ?>
            </div>
            <button class="carousel-button next">&gt;</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="velocity_slct.css"/> <!--SAME CSS SA VELOCITY-->
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
            <hr class="separator">
        </div>
    </div>
	<div class="carousel-container">
        <div class="product-container">
			<div class="product">
                <img src="slate_mini.png" alt="Slate Mini">
                <h1>Slate Mini</h1>
                <p>The full Slate experience in an ultraportable design.</p>
				<p> M15 Unreal chip </p>
				<p> 12MP Camera </p>
                <button class="buy">Buy ›</button>
            </div>
			<div class="product">
                <img src="slate.png" alt="Slate">
                <h1>Slate</h1>
                <p>The colorful, all‑screen Slate for the things you do every day.</p>
				<p> M14 Unreal chip </p>
				<p> 12MP Camera </p>
                <button class="buy">Buy ›</button>
            </div>
			<div class="product">
                <img src="slate_plus.png" alt="Slate Plus">
                <h1>Slate Plus</h1>
                <p>Serious performance in a thin and light design.</p>
				<p> S2 Chip </p>
				<p> 12MP Camera </p>
                <button class="buy">Buy ›</button>
            </div>
			<div class="product">
                <img src="slate_pro.png" alt="Slate Pro">
                <h1>Slate Pro</h1>
                <p>The ultimate Slate experience with the most advanced technology.</p>
				<p> S4 chip </p>
				<p> 12MP Camera </p>
                <button class="buy">Buy ›</button>
            </div>	
            <!-- Add more products as needed -->
        </div>
        <div class="carousel-controls">
            <button class="carousel-button prev">&lt;</button>
            <div class="carousel-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <!-- Add more dots as needed -->
            </div>
            <button class="carousel-button next">&gt;</button>
        </div>
    </div>
    <div class="footer">
        <p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
    </div>
    <script src="velocity_slct.js"></script>
</body>
</html>

