<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="acc_list.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>MobiCel</title>
</head>
<body>
    <div class="container">
        <div class="bg-color">
            <div class="header"> 
                <a href="#default" class="logo">
                    <img src="logo.png" alt="MobiCel Logo" class="logo-image">
                </a>
                <div class="menu-search-container">
                    <!-- Hamburger Menu -->
                    <div class="menu-toggle" id="menu-toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="menu-container">
                        <ul id="menu">
                            <li><a href="sellerpage.php">Home</a></li>
							<li class="dropdown">
								<a href="javascript:void(0)" class="dropbtn">Accounts<i class="arrow down"></i></a>
								<div class="dropdown-content">
									<a href="acc_list.php">User List</a>
									<a href="acc_ad.php">User Info</a>
								</div>
							</li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Products<i class="arrow down"></i></a>
                                <div class="dropdown-content">
                                    <a href="prod_cat.php">Products Category</a>
                                    <a href="prod_li_tbl.php">Product List</a>
                                    <a href="prod_storage.php">Product Variation (Storage)</a>
                                    <a href="prod_color.php">Product Variation (Colors)</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Transaction<i class="arrow down"></i></a>
								<div class="dropdown-content">
                                    <a href="trans.php">Transaction Summary</a>
									<a href="trans_items.php">Transaction Quantity</a>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">My Account<i class="arrow down"></i></a>
                                <div class="dropdown-content">
                                    <a href="login.php">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <form method="POST" action="results_page.php" class="search-form">
                        <input type="text" size="25" placeholder="Looking for..." name="src_key"> 
                        <input type="submit" value="Search">
                    </form>
                </div>
                <hr class="separator">
            </div>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Account ID</th>
                        <th>Username</th>
                        <th>Password</th>
						<th>Email Address</th>
						<th>Registration Date</th>
						<th>Payment Method</th>
                    </tr>
                    <tr>
                        <td> placeholder </td>
                        <td> placeholder </td>
						<td> placeholder </td>
						<td> placeholder </td>
						<td> placeholder </td>
						<td> placeholder </td>
						<td> <center> <a href = "edit_acc.php"> Edit </center> </td>
						<td> <center> <a href = "delete_acc.php"> Delete </center> </td> 
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <p class="footer-rights">Copyright © MobiCel Corp. All Rights Reserved.</p>    
    </div>
    <script src="general.js"></script>
</body>
</html>
