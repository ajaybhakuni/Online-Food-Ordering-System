<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
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
<body id="page6">
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
                           
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Little Place <span>Big Taste</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
            <div class="wrapper">
            	<article class="col-1">
                	<div class="indent-left">
                    	<h3 class="p1">Our Contacts</h3>
                        <figure class="indent-bot">
                            <iframe width="240" height="180" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Faridabad,+Harayana,+HR,+India&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </figure>
                        <dl>
                            <dt class="p1">Sector-3,Faridabad,Haryana</dt>
                            <dd><span>Toll Free:</span> 180012479888 </dd>
                            <dd><span>Telephone:</span>  01292478954</dd>
                            <dd><span>Fax:</span>  +91 800 889 9898</dd>
                            <dd><span>Email:</span><a class="color-2" href="#">mail@kitchenking</a></dd>
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">Contact Form</h3>
                    <form id="contact-form" method="post" enctype="multipart/form-data">                    
                        <fieldset>
                              <label><span class="text-form">Your Name:</span><input name="name" type="text" /></label>
                              <label><span class="text-form">Your Email:</span><input name="email" type="text" /></label>                              
                              <div class="wrapper">
                                <div class="text-form">Your Message:</div>
                                <div class="extra-wrap">
                                    <textarea></textarea>
                                    <div class="clear"></div>
                                    <div class="buttons">
                                        <a class="button-2" href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                        <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                    </div> 
                                </div>
                              </div>                            
                        </fieldset>						
                    </form>
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
</body>
</html>

