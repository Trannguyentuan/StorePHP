<?php
//include_once '../controller/';
//start session

include_once(__DIR__ . '/../controller/controller.php');
include_once(__DIR__ . '/../controller/currency.php');
$db=new Controller(new repository());
$category=$db->getAllCategory();
$cid=$db->getAllCategory();
//$_SESSION['activepage']='shop';

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shoppinggg</title>
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

 
<?php include_once(__DIR__ . '/header.php'); ?>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>/</li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="shop_inner_area">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                       <!--sidebar widget start-->
                        <div class="sidebar_widget">
<!-- filter price                           <div class="widget_list widget_filter">
                                <h2>Filter by price</h2>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />   

                                </form> 
                            </div>-->
                            <div class="widget_list widget_categories">
                                <h2>Category</h2>
                                <ul>
                                    <?php 
                                    foreach ($category as $cate) {
                                        
                                    
                                    ?>
                                    <li class="active"><a href="shop.php?category=<?php echo $cate['cid'];if(isset($_GET['sortby'])){
                                        echo '&sortby='.$_GET['sortby'];}?>"><?php echo $cate['cname'] ?><span>6</span></a> </li>
                                        
                                    <?php }?>
                                </ul>
                            </div>

  <!--filter more-->                          
                            <div class="widget_list widget_categories">
                                <h2>Manufacturer</h2>
                                <ul>
                                    <li><a href="#">Calvin Klein <span>6</span></a> </li>
                                    <li><a href="#"> Chanel <span>10</span></a> </li>
                                    <li><a href="#">Christian Dior <span>4</span></a> </li>
                                    <li><a href="#"> ferragamo <span>4</span></a> </li>
                                    <li><a href="#">hermes <span>10</span></a> </li>
                                    <li><a href="#">louis vuitton <span>8</span></a> </li>
                                    <li><a href="#">Tommy Hilfiger <span>7</span></a> </li>
                                    <li><a href="#">Versace <span>6</span></a> </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_categories">
                                <h2>Select By Color</h2>
                                <ul>
                                    <li><a href="#">Black <span>6</span></a> </li>
                                    <li><a href="#"> Blue <span>10</span></a> </li>
                                    <li><a href="#">Brown <span>4</span></a> </li>
                                    <li><a href="#"> Green <span>4</span></a> </li>
                                    <li><a href="#">Pink <span>7</span></a> </li>
                                    <li><a href="#">White<span>8</span></a> </li>
                                    <li><a href="#">Yellow <span>5</span></a> </li>

                                </ul>
                            </div>
                            <div class="widget_list tag-cloud">
                                <h2>Popular Tags</h2>
                                <div class="tag_widget">
                                    <ul>
                                        <li><a href="#">Creams</a></li>
                                        <li><a href="#">Eyebrow Pencil</a></li>
                                        <li><a href="#">Eyeliner</a></li>
                                        <li><a href="#">Eye Shadow</a></li>
                                        <li><a href="#">Lotions</a></li>
                                        <li><a href="#">Mascara</a></li>
                                        <li><a href="#">Oils</a></li>
                                        <li><a href="#">Powders</a></li>
                                        <li><a href="#">Shampoos</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
<!--                        sidebar widget end-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <!--shop wrapper start-->
                        <!--shop toolbar start-->
                        <div class="shop_title">
                            <h1>everything here</h1>
                        </div>
                        <div class="shop_toolbar_wrapper">
                            <div class="shop_toolbar_btn">

                                <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3 products"></button>

                                <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4 products"></button>

                                <button data-role="grid_5" type="button"  class="btn-grid-5" data-toggle="tooltip" title="5 products"></button>

                                <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                            </div>
                            <div >
                                <?php $arr=array('1'=> 'Latest','2' => 'Popular' ,'3'=>'Top Sales','4'=>'Price: Low to High','5'=>'Price: High to Low','6'=>'A -> Z','7'=>'Z -> A');
                                
                                ?>
                                <form name="myField" action="shop.php<?php if(isset($_GET['category'])){echo '?category='.$_GET['category'];}?>">
                                    <select class=" nice-select" name='sortby' onchange="myField.submit();">
                                                                                
                                        <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='1'){
                                                echo 'selected';
                                            }} else {echo 'selected';} ?> value="1">Latest</option>
                                        <option <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='2'){
                                                echo 'selected';
                                            }} ?> value="2">Top sales</option>
                                        <option <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='3'){
                                                echo 'selected';
                                            }} ?> value="3">Price: Low to High</option>
                                        <option <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='4'){
                                                echo 'selected';
                                            }} ?> value="4">Price: High to Low</option>
                                        <option <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='5'){
                                                echo 'selected';
                                            }} ?> value="5">A -> Z</option>
                                        <option <option <?php if(isset($_GET['sortby'])){
                                            if($_GET['sortby']=='6'){
                                                echo 'selected';
                                            }} ?> value="6">Z -> A</option>
                                    </select>                 
                                </form>
                            </div>
                            <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div>
                        </div>
                         <!--shop toolbar end-->
                        
                         <div class="row shop_wrapper">
                            <?php
                            //foreach($product as $row){
                            $categoryfilter='';
                            $sortby='';
                            if(isset($_GET['category'])){
                                $categoryfilter=$_GET['category'];
                            }
                            if(isset($_GET['sortby'])){
                                $sortby=$_GET['sortby'];
                            }
                            
                            $filter=$db->filter($categoryfilter,$sortby);
                            while ($row = $filter->fetch(PDO::FETCH_ASSOC)) {                           
                            ?>
                             
                             <div class="col-lg-4 col-md-4 col-12 ">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="product_details.php?productID=<?php echo $row['id'] ?>"><img src="assets/img/product/<?php echo $row['imageUrl']?>" alt=""></a>
                                        <a class="secondary_img" href="product_details.php?productID=<?php echo $row['id'] ?>"><img src="assets/img/product/<?php echo $row['imageUrl']?>" alt=""></a>
                                        <div class="quick_button">
                                            <a href="product_details.php?productID=<?php echo $row['id'] ?>"title="quick_view">Xem sản phẩm</a>
                                        </div>

<!--                                        <div class="double_base">-->
                                            <div class="product_sale">
                                                <span><?php if($row['discount']!=0) echo $row['discount'].'%' ?></span>
                                            </div>
<!--                                            <div class="label_product">
                                                <span>new</span>
                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                    
                                    <div class="product_content grid_content">
                                        
                                        <h3><a href="product_details.php?productID=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h3>
                                        <span classS"current_price"><?php echo num(pricediscount($row['price'], $row['discount']))?></span>
                                        <?php if($row['discount']!=0){?>
                                        <span class="old_price"><?php echo num($row['price']) ?></span>
                                        <?php } ?>
                                    </div>
                                    
                                    
                                    <div class="product_content list_content">
                                        <h3><a href="product-details.html">Marshall Portable  Bluetooth</a></h3>
<!--                                        <div class="product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>-->
                                        <div class="product_price">
                                            <span classS"current_price"><?php echo num(pricediscount($row['price'], $row['discount']))?></span>
                                        <?php if($row['discount']!=0){?>
                                        <span class="old_price"><?php echo num($row['price']) ?></span>
                                        <?php } ?>
                                        </div>
                                        <div class="product_desc">
                                            <p><?php echo $row['description'] ?></p>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                            <?php }?>
                         </div>
                    </div>
                        <!--shop toolbar end-->
                        <!--shop wrapper end-->
                    </div>
                </div>
            </div>   
                
        </div>
    <!--shop  area end-->
<?php
include './footer.php';
?>
    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product4.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product6.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product8.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product2.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/product12.jpg" alt=""></a>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">    
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/s-product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/s-product/product4.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false"><img src="assets/img/s-product/product5.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Handbag feugiat</h2> 
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>    
                                        <span class="old_price" >$78.99</span>    
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>    
                                    </div> 
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="0" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>    
                                    </div>      
                                </div>    
                            </div>    
                        </div>     
                    </div>
                </div>    
            </div>
        </div>
    </div> 
    <!-- modal area start-->
    
<script src="assets/js/main.js"></script>

</body>

</html>