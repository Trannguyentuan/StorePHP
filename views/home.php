<?php
//include_once '../controller/';
//start session
include(__DIR__ . '/header.php');
include_once(__DIR__ . '/../controller/controller.php');
include_once(__DIR__ . '/../controller/currency.php');
$db=new Controller(new repository());
$category=$db->getAllCategory();
$catego=$db->getAllCategory();
//$ca=$category->fetch( PDO::FETCH_ASSOC);
//$productbycateid=$product->getByCategory($cateid);
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

    <!--slider area start-->
    <div class="slider_area slider_style home_three_slider owl-carousel">
        <div class="single_slider" data-bgimg="assets/img/slider/slider4.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_one">
                            <img src="assets/img/slider/content3.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>    
        </div>
        <div class="single_slider" data-bgimg="assets/img/slider/slider5.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_two">
                            <img src="assets/img/slider/content4.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider" data-bgimg="assets/img/slider/slider6.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content content_three">
                            <img src="assets/img/slider/content5.png" alt="">
                            <p>the wooboom clothing summer collection is back at half price</p>
                            <a href="shop.php">Discover Now</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--banner area start-->
    <div class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner8.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner9.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner_area bottom">
                        <div class="banner_thumb">
                            <a href="shop.php"><img src="assets/img/bg/banner10.jpg" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section womens_product">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm của chúng tôi</h2>
                       <p>Các sản phẩm thiết kế hiện đại,mới nhất</p>
                   </div>
                </div> 
            </div>    
    <div class="product_area"> 
        <div class="row">
            <div class="col-12">
                <div class="product_tab_button">
                    <ul class="nav" role="tablist">
                        <?php
                        foreach($catego as $cate) {
                            if($cate['cid']=='1'){//chon class active
                        ?>
                        <li>
                            <a class="active" data-toggle="tab" href="<?php echo "#".$cate['cname']?>"  role="tab" aria-controls="<?php echo $cate['cname']  ?>" aria-selected="true"><?php echo $cate['cname']  ?></a>
                        </li>
                                        
                        <?php
                            }
                        else {?>
                        <li>
                            <a data-toggle="tab" href="<?php echo "#".$cate['cname']?>"  role="tab" aria-controls="<?php echo $cate['cname']  ?>" aria-selected="false"><?php echo $cate['cname']  ?></a>
                        </li>   <?php
                        }}
                        ?>
                        
                       
                    </ul>
                </div>
            </div>
        </div>
         <div class="tab-content">
            <?php           
    foreach ($category as $cname){            
    //        while ($cname = $category->fetch( PDO::FETCH_ASSOC )) {
        if($cname['cid']==1){
            ?>
              <div class="tab-pane fade show active" id="<?php echo $cname['cname']?>" role="tabpanel">
        <?php }
        else {
        ?> <div class="tab-pane fade" id="<?php echo $cname['cname']?>" role="tabpanel">
        <?php } ?>         
            <div class="product_container">
                        <div class="row product_column4">
                            <?php
                            $pro=$product->getProductByCateId($cname['cid']);
                            while ($row = $pro->fetch(PDO::FETCH_ASSOC)) {                           
                            ?>
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?productID=<?php echo $row['id'] ?>"><img src="assets/img/product/<?php echo $row['imageUrl']?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?productID=<?php echo $row['id']?>"><img src="assets/img/product/<?php echo $row['imageUrl']?>" alt=""></a>

                                        <div class="quick_button">
                                            <a href="product_details.php?productID=<?php echo $row['id'] ?>" title="quick_view">Xem sản phẩm</a>

                                        </div>

                                        <div class="product_sale">
                                            <span><?php if($row['discount']!=0) echo $row['discount'].'%' ?></span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product_details.php?productID=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h3>
                                        <span classS"current_price"><?php echo num(pricediscount($row['price'], $row['discount']))?></span>
                                        <?php if($row['discount']!=0){?>
                                        <span class="old_price"><?php echo num($row['price']) ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                        </div>
                    </div>
              </div>
        <?php
            }
        ?>
             
    </div>
              </div> 
        </div>
    </section>
    <!--banner area start-->
    <section class="banner_section banner_section_three">
        <div class="container-fluid">
            <div class="row ">
               <div class="col-lg-6 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php?category=Accessories"><img src="assets/img/bg/banner11.jpg" alt="#"></a>
                            <div class="banner_content">
                               <h1>Handbag <br> Men’s Collection</h1>
                                <a href="shop.php?category=Accessories">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner_area">
                        <div class="banner_thumb">
                            <a href="shop.php?category=Shoes"><img src="assets/img/bg/banner12.jpg" alt="#"></a>
                            <div class="banner_content">
                               <h1>Sneaker <br>Collection Edition</h1>
                                <a href="shop.php?category=Shoes">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->
    
    <!--product section area start-->
    <section class="product_section womens_product bottom">
        <div class="container">
            <div class="row">   
                <div class="col-12">
                   <div class="section_title">
                       <h2>Sản phẩm thịnh hành</h2>
                       <p>Sản phẩm ấn tượng và bán chạy nhất</p>
                   </div>
                </div> 
            </div>    
            <div class="product_area">  
                 <div class="row">
                    <div class="product_carousel product_three_column4 owl-carousel">
                        <?php 
                        $bestsell=$db->getBestSell();
                        //foreach ($bestsell as $best){
                        while($best=$bestsell->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?productID=<?php echo $best['id'] ?>"><img src="assets/img/product/<?php echo $best['imageUrl']?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?productID=<?php echo $best['id']?>"><img src="assets/img/product/<?php echo $best['imageUrl']?>" alt=""></a>

                                        <div class="quick_button">
                                            <a href="product_details.php?productID=<?php echo $best['id'] ?>" title="quick_view">Xem sản phẩm</a>

                                        </div>

                                        <div class="product_sale">
                                            <span><?php if($best['discount']!=0) echo $best['discount'].'%' ?></span>
                                        </div>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="product_details.php?productID=<?php echo $best['id'] ?>"><?php echo $best['name'] ?></a></h3>
                                        <span classS"current_price"><?php echo num(pricediscount($best['price'], $best['discount']))?></span>
                                        <?php if($best['discount']!=0){?>
                                        <span class="old_price"><?php echo num($best['price']) ?></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
               
        </div>
    </section>
    <!--product section area end-->

    <!--blog section area start-->
    <section class="blog_section blog_section_three">
        <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section_title">
                       <h2>Bài viết mới nhất</h2>
                       <p>Cập nhật xu thế thời trang</p>
                   </div>
               </div>
           </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog_details.php"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="blog_details.php"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog_details.php">Mercedes Benz– Mirror To The Soul 360</a></h3>
                                <div class="author_name">
                                   <p> 
                                        <span class="post_by">by</span>
                                        <span class="themes">ecommerce Themes</span>
                                        / 30 Oct 2017
                                   </p>
                                    
                                </div>
                                <div class="post_desc">
                                    <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog_details.php"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="blog_details.php"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog_details.php">Dior F/W 2015 First Fashion Experience</a></h3>
                                <div class="author_name">
                                   <p> 
                                        <span class="post_by">by</span>
                                        <span class="themes">ecommerce Themes</span>
                                        / 30 Oct 2017
                                   </p>
                                    
                                </div>
                                <div class="post_desc">
                                    <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog_details.php"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="blog_details.php"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog_details.php">London Fashion Week & Royal Day</a></h3>
                                <div class="author_name">
                                   <p> 
                                        <span class="post_by">by</span>
                                        <span class="themes">ecommerce Themes</span>
                                        / 30 Oct 2017
                                   </p>
                                    
                                </div>
                                <div class="post_desc">
                                    <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog_details.php"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                                <div class="blog_icon">
                                    <a href="blog_details.php"></a>
                                </div>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog_details.php">Best of New York Spring/Summer 2016</a></h3>
                                <div class="author_name">
                                   <p> 
                                        <span class="post_by">by</span>
                                        <span class="themes">ecommerce Themes</span>
                                        / 30 Oct 2017
                                   </p>
                                    
                                </div>
                                <div class="post_desc">
                                    <p>Maria Denardo is the Fashion Director at theFashionSpot. Prior to joining tFS, she worked as...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->

  <?php
                      include './footer.php';
                      ?>

<!-- JS
============================================ -->

<script src="assets/js/main.js"></script>
</body>

</html>