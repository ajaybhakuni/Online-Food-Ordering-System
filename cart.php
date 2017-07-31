<?php
    session_start();
    $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
    $db = mysql_select_db('fd',$con) or die(mysql_error());

    function display_product(){
        global $con;
        $q = mysql_query("SELECT `id`, `image`, `name`, `desc`, `price` FROM cart WHERE `quantity` > 0 ");
        $num = mysql_num_rows($q);
        while($fetch = mysql_fetch_assoc($q)){
            echo '<img src="images/'.$fetch['image'].'" width="120" height="120"/> <br />'.$fetch['name']. '<br />'.$fetch['desc'].'<br />&#8377;'.$fetch['price'].'<br/><a class="button-1" href="cart.php?add='.$fetch['id'].'">Add to Cart</a><br /><br />';
      
  }}
 
    if(isset($_GET['add']) && !empty($_GET['add'])){
        $id = $_GET['add'];
        $q = mysql_query("SELECT `id`, `quantity` FROM cart WHERE `id`='".$id."'");
        $num = mysql_num_rows($q);
        while($quantity = mysql_fetch_assoc($q)){
            if($quantity['quantity'] != @$_SESSION['cart_'.$id]){
                echo @$_SESSION['cart_'.$id]+=1;
            }
            
        }
    }

if(isset($_GET['remove'])){
		$_SESSION['cart_'.$_GET['remove']]--;
		header('Location:catalogue.php');
	}
if(isset($_GET['delete'])){
		$_SESSION['cart_'.$_GET['delete']]= 0;
		header('Location:catalogue.php');
	}

function paypal_item(){
        $num = 0;
  foreach($_SESSION as $name => $value){
 
        if($value !=0){
        if(substr($name,0,5) == 'cart_'){
             $id = substr($name,5, strlen($name)-5);
             $get = mysql_query('SELECT id,name, price , shipping FROM cart WHERE id = '.$id.'');
             while($get_row = mysql_fetch_assoc($get)){
    $num++;
        echo '<input type ="hidden" name="item_number_'.$num.'" value="'.$id.'">';
        echo '<input type ="hidden" name="item_name_'.$num.'" value="'.$get_row['name'].'">';
        echo '<input type ="hidden" name="amount_'.$num.'" value="'.$get_row['price'].'">';
        echo '<input type ="hidden" name="shipping_'.$num.'" value="'.$get_row['shipping'].'">';
        echo '<input type ="hidden" name="quantity_'.$num.'"value="'.$value.'">';
        }
}}
}}

 function product(){
$net_payment=0;
foreach($_SESSION as $name => $value){
if($value > 0){
if(substr($name,0,5) == 'cart_'){
$id = substr($name,5,(strlen($name-5)));
$q=mysql_query("SELECT `id`,`shipping`,`name`,`price` FROM cart WHERE `id` = '".$id ."'");
while($get = mysql_fetch_assoc($q)){
$total = $value * $get['price'];
echo $get['name'].'&nbsp;&nbsp;'.'X'.'&nbsp;'.$value.'&nbsp;'.'@'.$get['price'].'=&#8377; '.$total.'<a href="cart.php?add='.$id.'">[+]</a>&nbsp;<a href="cart.php?remove='.$id.'">[-]</a>&nbsp;<a href="cart.php?delete='.$id.'">[Delete]</a><br/><br/>';
}}
$net_payment+=$total;
   }}
if($net_payment == 0){
echo "<h5>Your Cart Is Empty</h5>";
}
else{
echo "Total = &#8377;".$net_payment.'<br/><br/>';


   ?>
<span style="text-align:center;">
                <form action= "https://www.paypal.com/cgi-bin/webscr" method ="post">
                    <input type ="hidden" name="cmd" value="_cart">
                    <input type ="hidden" name="upload" value="1">
                    <input type ="hidden" name="business" value="kitchenking@gmail.com">
                    <?php paypal_item(); ?>
                    <input type ="hidden" name="item_name" value="Item_Name">
                    <input type ="hidden" name="currency_code" value="USD">
                    <input type ="hidden" name="amount" value="<?php echo $net_payment;?>">
                    <input type ="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with Paypal">
                </form>
           </span>
 

<?php
}}
?>