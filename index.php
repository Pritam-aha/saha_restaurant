<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<style>
	body {
		margin: 0;
		padding: 0;
		font-family: 'Arial', sans-serif;
	}

	.content {
		width: 80%;
		max-width: 800px;
		margin: 0 auto;
	}

	.error {
		color: #ff0000;
	}

	.success {
		color: #008000;
	}

	.size {
		font-size: 20px;
	}

	.logout {
		text-align: right;
		padding-top: 10px;
	}

	.logout a {
		color: red;
		text-decoration: none;
	}

	@media screen and (max-width: 600px) {
		.size {
			font-size: 16px;
		}

		.logout {
			text-align: left;
			padding-top: 10px;
		}
	}
</style>

<body>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php if (isset($_SESSION['username'])) : ?>
			<p class="size">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
			
		<?php endif ?>
		
	</div>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                   
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
					<a href="index.html?logout='1'">logout</a> 
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="manage-food.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="asset/cream-ice-pistachio.png" alt="Ice Cream" class="img-responsive img-curve">

                <h3 class="float-text text-white">Ice cream</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="asset/basmati-rice-png.png" alt="Indian Food" class="img-responsive img-curve">

                <h3 class="float-text text-white">Indian Food</h3>
            </div>
            </a>

            <a href="category-foods-pizza.html">
            <div class="box-3 float-container">
                <img src="asset/pizza-category.png" alt="Burger and Pizzas" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizzas</h3>
            </div>
            </a>

            
            <a href="category-foods-burger.html">
                <div class="box-3 float-container">
                    <img src="burger/burger6(boss whopper chicken).png" alt="Indian Food" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Burger</h3>
                </div>
                </a>
                
            <a href="category-foods-cake.html">
                <div class="box-3 float-container">
                    <img src="asset/cake10.png" alt="Indian Food" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Cake</h3>
                </div>
                </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Pizzas</h4>
                    <p class="food-price">Starting price Rs-140</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="category-foods-pizza.html" class="btn btn-primary">See all Pizzas</a>
                </div>
            </div>

            <div class="food-menu-box" >
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4>Burgers</h4>
                    <p class="food-price">RS-130</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="category-foods-burger.html" class="btn btn-primary">See all burgers</a>
                </div>
            
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="asset/ice-cream-images.png" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Ice cream</h4>
                    <p class="food-price">RS-150</p>
                    <p class="food-detail">
                        Made with vanila, milk and delesious fruits .  <br> Qty: 135g
                    </p>
                    <br>

                    <a href="order3.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="asset/biryani-category.png" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Biryani</h4>
                    <p class="food-price">RS-160</p>
                    <p class="food-detail">
                        Made with deradun fine rice Chicken and spicy Masala.
                    </p>
                    <br>

                    <a href="order4.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="asset/birthday-cake-png-clip-art-birthday-cake-.png" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cake</h4>
                    <p class="food-price">RS-550</p>
                    <p class="food-detail">
                        Made with delesious fruits, cream and chocolates.
                    </p>
                    <br>

                    <a href="order5.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-momo.jpg" alt="Chicke Hawain Momo" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Steam Momo</h4>
                    <p class="food-price">RS-100</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="order6.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="https://www.facebook.com/pritamsaha.pritam.965?mibextid=zLoPMf"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/pritamsaha9810?igsh=OGQ5ZDc2ODk2ZA=="><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/pritam-saha-a72972239?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>Founder and CEO of our company <a href="#">Pritam Saha</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    <section id="cart">
        <h3>Cart</h3>
        
        <ul id="cart-items">
            <!-- Cart items will be dynamically added here -->
        </ul>
        <p>Total Price: <span id="total-price">0</span></p>
    </section>
    
    <script src="cart.js"></script>
    <link rel="" href="index.php">

</body>
</html>
