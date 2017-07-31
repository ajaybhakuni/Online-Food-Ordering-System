
<?php
session_start();
if(isset($_SESSION['login'])){
echo"<script>alert('You are already registered')
window.open('menu.php','_self')
</script>";
}


$con = mysql_connect("localhost","root","") or die (mysql_error());
$db = mysql_select_db('fd',$con) or die(mysql_error());
if(isset($_POST['sub']))
{
$name = $_POST['t1'];
$pass = $_POST['t2'];
$mail = $_POST['t3'];
$mob = $_POST['t5'];


$query = "insert into my_fd(u_name,u_pwd,u_mail,u_mob) values('$name','$pass','$mail','$mob')";
if(mysql_query($query)){

echo"<script>window.open('menu.php','_self')</script>";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
		}); 
	</script>
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
<body id="page3">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="menu.php">Kitchen<span>King</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a class="active" href="catalogue.php">Catalogue </a></li>
                            
                            <li><a href="login.php">Login</a></li>
                            
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
    ...........................
<section id="content">
  <div class="main">
    <div class="wrapper img-indent-bot">
      <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-1.jpg" ></a> </article>
      <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-2.jpg" ></a> </article>
      <article class="col-2"> <a href="#"><img class="img-border" src="images/banner-3.jpg" ></a> </article>
    </div>
    <div class="container">
      <center><h3>Sign Up form for 1st Time Users<br></h3>
      <ul class="list-1">
          <form id="one" name="one" method="post" action="register.php" onsubmit="return validate()">
<table>
<tr>
<td><h6>Name</h6><td>&nbsp&nbsp&nbsp&nbsp<td><input type="text" id="t1" name="t1" required><br><br></tr>
<tr>
<td><h6>Password</h6><td><td><input type="password" id="t2" name="t2" required><br><br></tr>
<tr>
<td><h6>E-mail Id</h6><td><td><input type="email" id="t3" name="t3" required><br><br></tr>
<tr>
<td><h6>Gender</h6>
<td><input type="radio" id="t4" name="t4">Female<td><input type="radio" id="t4" name="t4">Male</tr>
<tr>
<td><h6>Contact Number</h6><td>&nbsp&nbsp&nbsp&nbsp<td><input type="text" id="t5" name="t5"><br><br></tr>
<tr>
<td><h6>Address</h6><td><td><input type="text" id="t6" name="t6"><br><br></tr>
<tr>
<td><a class="button-1" href="index.php">Back</a> <td><td><input type="submit" class="button-2" id="sub" name="sub"></tr>
</table>
</form></center>
      </ul>
    </div>
  </div>
</section>

.........................................

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
