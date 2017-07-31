<?php
session_start();
if(!isset($_SESSION['login']))
header('location:login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Kitchen<span>King</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a class="active" href="menu.php">Menu</a></li>
                            <li><a href="catalogue.php">Catalogue </a></li>
                            
                    
                            <li><a href="contact.php">Contact</a></li>
                           
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Little Place <span>Big Taste</span></h2>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-1">
                	<a href="#"><img class="img-border" src="images/banner-1.jpg" alt=""></a>
                </article>
                <article class="col-1">
                	<a href="#"><img class="img-border" src="images/banner-2.jpg" alt=""></a>
                </article>
                <article class="col-2">
                	<a href="#"><img class="img-border" src="images/banner-3.jpg" alt=""></a>
                </article>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            <h3>Our Services</h3>
                            <ul class="list-1">
                                <li><a href="#">Good Quality Food</a></li>
                                <li><a href="#">Varities Of Food Available </a></li>
                                <li><a href="#">Delivery On Time</a></li>
                                <li><a href="#">On Demand Food Service</a></li>
                                <li><a href="#">Discount For Regular Customers</a></li>
                                
                            </ul>
                        </div>
                        <a class="button-1" href="#">Read More</a>
                    </div>
                </article>
                <article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">About the Kitchen King</h3>
                        <h6 class="p2">Our team gathers information from every restaurant on a regular basis to ensure our data is fresh. Our vast community of food lovers share their reviews and photos, so you have all that you need to make an informed choice.
With dedicated engagement and management tools, we're enabling restaurants to spend more time focusing on food itself, which translates directly to better dining experiences.
                    </div>
                    <a class="button-2" href="#">Read More</a>
                </article>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	<span>KITCHEN KING &copy; 2017</span>
                
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
