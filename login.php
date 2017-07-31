
<?php
session_start();
if(isset($_SESSION['login'])){
echo"<script>alert('You are already logged in')
window.open('menu.php','_self')
</script>";
}
$con = mysql_connect("localhost","root","") or die (mysql_error());
$db = mysql_select_db('fd',$con) or die (mysql_error());
if(isset($_POST['login'])){
$name=$_POST['t1'];
$pass=$_POST['t2'];


$query="select * from my_fd where u_name='$name' AND u_pwd='$pass'";
$result=mysql_query($query);

$count= mysql_num_rows($result);
if($count>0)
{
$_SESSION['login']="$name";
header('location:menu.php'); 
}
else {
header("location:login.php?err=1");

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
                            <li><a href="catalogue.php">Catalogue </a></li>
                            <li><a href="contact.php">Contact</a></li>
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
                </div>
            </div>
        </div>
    </header>
.................................


<section id="content">
  <div class="main">
    <div class="wrapper img-indent-bot">
      <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-1.jpg" align="left"></a> </article>
      <article class="col-1"> <a href="#"><img class="img-border" src="images/banner-2.jpg" align="right"></a> </article>
      <article class="col-2"> <a href="#"><img class="img-border" src="images/banner-3.jpg" align="center"></a> </article>
    </div>
    <div class="wrapper">
      <article class="column-1">
        <div class="indent-left">
          <div class="maxheight indent-bot">
            <h3>SIGN IN</h3>
            <form id="two" name ="two" method="post" action="login.php">
			<table>
			<tr>
			<td><h6>User Name </h6><td>&nbsp&nbsp&nbsp<td><input type="text" id="t1" name="t1" required><br><br></tr>
			<tr>
			<td><h6>Password</h6><td><td><input type="password" id="t2" name="t2" required><br><br></tr>
		<tr><td>
                        <input type="submit" class="button-2" name="login"></tr>
			</table></form>
          </div>
		  New user?
          <a class="button-1" href="register.php">Register</a>
		  </div>
      </article>
      <article class="column-2">
        <div class="maxheight indent-bot">
          <h3 class="p1">About the Online food order</h3>
          <h6 class="p2">Online food ordering, is an internet e-commerce service/s with websites that feature interactive menus, ratings and reviews allowing customers to place orders with local restaurants and food cooperatives. </h6>
          <p class="p2">Much like ordering consumer goods online, many of these allow customers to keep accounts with them in order to make frequent ordering convenient.
              A customer will search for a favorite restaurant, usually filtered via type of cuisine and choose from available items, and choose delivery or pick-up.
              Payment can be amongst others either by credit card or cash, with the restaurant returning a percentage to the online food company. <a href="index.html">About</a>, <a href="menu.html">Menu</a>, <a href="catalogue.html">Catalogue</a>, <a href="contact.html">Contact</a> </div>
        <a class="button-2" href="#">Read More</a> </article>
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
