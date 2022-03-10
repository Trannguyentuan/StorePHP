<?php
//include_once '../controller/';
include_once(__DIR__ . '/../controller/controller.php');
//start session
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();}
//init uid

if(!isset($_SESSION['uid'])){
  $_SESSION['uid'] = '-1';}
$userID = $_SESSION['uid'];
if(!isset($_SESSION['username'])){
$username='My Account';}
else{$username=$_SESSION['username'];}
// number of products in cart
$cartCount = isset($_SESSION['unpaidItems']) ? $_SESSION['unpaidItems']['count'] : 0;

$product=new Controller(new repository());
$allcate=$product->getAllCategory();

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fashion eCommerce by TNT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--Offcanvas menu area start-->
    <!--header area start-->
    <header class="header_area header_three">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                                <?php if($userID=='-1') //chua login
                                        {echo "<li><a href='login.php'>Log In</a></li>";}
                                    else {?>
                                        <li class="top_links">
                                            <a href="#"><?php echo $username; ?><i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                        <li><a href="wishlist.php">My Wish List </a></li>
                                        <li><a href="my-account.php">My Account </a></li>                                        
                                        <li><a href="controller/login/logout.php">Log Out</a></li>
                                       
                                    </ul>
                                </li> 
                                <?php }?>
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div> 
          <!--header middel start-->
        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="search_bar">
                                <form action="#">                          
                                    <input placeholder="Search entire store here..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="../index.php"><img src="assets/img/logo/logo.png" alt="home"></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart_area">
                                <div class="cart_link">
                                    <a href="cart.php"><i class="fa fa-shopping-basket"></i><?php echo $cartCount; ?></a>
                                    <!--mini cart-->
                                     <div class="mini_cart">
                                        <div class="cart_item top">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Apple iPhone SE 16GB</a>

                                            <span>1x $60.00</span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable  Bluetooth</a>
                                                <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$184.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="cart.php">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="checkout.php">Checkout</a>
                                    </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
                </div>
            </div>
         <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active"><a href="../index.php">Home </a></li>
                                        <li><a href="shop.php">shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <?php
                                                while ($cate = $allcate->fetch( PDO::FETCH_ASSOC )) {
                                                ?>
                                                <li><a href=" <?php echo "shop.php?category=". $cate['cname'] ?>"><?php echo $cate["cname"] ?> </a></li>
                                                <?php
                                            }
                                                ?>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="services.php">services</a></li>
                                                <li><a href="faq.php">Frequently Questions</a></li>
                                                <li><a href="login.php">login</a></li>
                                                <li><a href="my-account.php">my account</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                <li><a href="404.php">Error 404</a></li>
                                                <li><a href="compare.php">compare</a></li>
                                                <li><a href="privacy-policy.php">privacy policy</a></li>
                                                <li><a href="coming-soon.php">coming soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.php">blog</a></li>
                                        
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>

<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->




</body>

</html>