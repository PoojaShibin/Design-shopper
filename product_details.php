<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Details | Mask Design</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}
.img-zoom-container {
  position: relative;
}
.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  /*set the size of the lens:*/
  width: 40px;
  height: 40px;
}
.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 900px;
  height: 300px;
}
</style>
<script>
function imageZoom(imgID, resultID) {
  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>

</head><!--/head-->

<body>
<?php include 'connection.php'; $bit="";
$pp="";
$occ="";
$discount="";?>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +96566031628</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="login.php"><i class="fa fa-home"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                     
                                                                     <?php
                                       $sql = "SELECT * FROM cat ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{?>
                            <li><a href="shop.php?job=<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
                         
                            <?php
	}
} ?>
										
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Products
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											    <?php
                                       $sql = "SELECT * FROM cat ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{?>
                            <li><a href="shop.php?job=<?php echo $row['category'];?>"><?php echo $row['category'];?></a></li>
                         
                            <?php
	}
} ?>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="shop.php?job=T-Shirt">T-Shirts</a></li>
											<li><a href="shop.php?job=Phone Cover">Phone Cover</a></li>
									</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="shop.php?job=T-Shirt">T-Shirts</a></li>
											<li><a href="shop.php?job=Phone Cover">Phone Cover</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div><!--/category-products-->
					
					
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/mm/09.jpeg" alt="" width="250"/>
						</div><!--/shipping-->
					
					</div>
				</div>				  <?php
				  $id=$_REQUEST['job'];
                                       $sql = "SELECT * FROM product p inner join cat c on p.category=c.category where p.pid=$id && p.del=0";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<div class="img-zoom-container">
  <img id="myimage" src="<?php echo $row["image"];?>" width="300" height="200"><br />
<br />
<br />

  <div id="myresult" class="img-zoom-result"></div>
</div>
							</div>
							

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $row["category"];?></h2>
								<p>Item: <?php echo $row["item_no"];?></p>
								<img src="images/product-details/rating.png" alt="" /><br />
							    <b><span style="color:#F93;font-size:20px"><?php if($bit==0)
											{
												?>
											<h2>د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <?php
											}else
											{?>
                                            <h2 style="text-decoration:line-through">د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <h4><?php echo $occ;?> Discounted Price </h4>
                                            <h2>د.ك<?php echo $discount;?>(KD)</h2>
                                            <?php
											}?> </span></b>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> Mask Design</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                                <br/>
                                <a href="https://m.me/396601804136658" class="btn btn-info" style="padding:5px 105px 5px 105px">Chat In Messenger To Order</a>

							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
                    <?php
	}
}
?>
					
						<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#color" data-toggle="tab">color</a></li>
								<li><a href="#size" data-toggle="tab">size</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							
							
							<div class="tab-pane fade" id="color" >
								<div class="col-sm-12">
									<img src="images/color.jpg" width="500" height="500"/>
								</div>
							</div>
							
							<div class="tab-pane fade" id="size" >
								<div class="col-sm-12">
                                <img src="images/size.jpg" width="500" height="500"/>
									</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>MASK DESIGN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php date_default_timezone_set("Asia/Kolkata");$t=date("h:i:sa");echo $t;?></a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php $b=date("d-m-Y");echo $b;?></a></li>
									</ul>
									<p>Your reviews are Valuable to us . Please give us your review.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="user.php?job=1" method="post">
										<span>
											<input type="text" placeholder="Your Name" name="name"/>
											<input type="email" placeholder="Email Address" name="mail"/>
										</span>
										<textarea name="review" ></textarea>
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
							<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
                                  <?php
                                       $sql = "SELECT * FROM product  where category='T-Shirt' && del=0 order by pid desc  limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<h2>د.ك<?php if($bit==0)
											{
												?>
											<h2>د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <?php
											}else
											{?>
                                            <h2 style="text-decoration:line-through">د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <h4><?php echo $occ;?> Discounted Price </h4>
                                            <h2>د.ك<?php echo $discount;?>(KD)</h2>
                                            <?php
											}?></h2>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <?php
	}
}
?>
									
								</div>
                             
							<div class="item">	
                                  <?php
                                       $sql = "SELECT * FROM product where category='Hoodie' && del=0  order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<h2>د.ك<?php if($bit==0)
											{
												?>
											<h2>د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <?php
											}else
											{?>
                                            <h2 style="text-decoration:line-through">د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <h4><?php echo $occ;?> Discounted Price </h4>
                                            <h2>د.ك<?php echo $discount;?>(KD)</h2>
                                            <?php
											}?></h2>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <?php
	}
}
?>
									
								</div>
                                	<div class="item">	
                                  <?php
                                       $sql = "SELECT * FROM product where category='Mugs' && del=0 order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<h2>د.ك<?php if($bit==0)
											{
												?>
											<h2>د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <?php
											}else
											{?>
                                            <h2 style="text-decoration:line-through">د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <h4><?php echo $occ;?> Discounted Price </h4>
                                            <h2>د.ك<?php echo $discount;?>(KD)</h2>
                                            <?php
											}?></h2>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <?php
	}
}
?>
									
								</div>
                                	<div class="item">	
                                  <?php
                                       $sql = "SELECT * FROM product where category='Phone Cover' && del=0 order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<h2>د.ك<?php if($bit==0)
											{
												?>
											<h2>د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <?php
											}else
											{?>
                                            <h2 style="text-decoration:line-through">د.ك<?php echo $row["price"];?>(KD)</h2>
                                            <h4><?php echo $occ;?> Discounted Price </h4>
                                            <h2>د.ك<?php echo $discount;?>(KD)</h2>
                                            <?php
											}?></h2>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
												</div>
												
											</div>
										</div>
									</div>
                                    <?php
	}
}
?>
									
								</div>
                                </div>
                             
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer  id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Design </span>-shopper</h2>
							<p>For The People Who Are interested in online shopping here we bring an exiting desings at your finger tip. </p>
						</div>
					</div>
					
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Phone Cover</a></li>
								<li><a href="#">Hoodie</a></li>
								<li><a href="#">Mugs</a></li>
								<li><a href="#">Caps</a></li>
                                <li><a href="#">Pillow Cover</a></li>
							</ul>
						</div>
					</div>
			<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<img src="images/home/mm/pp.jpg"/>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 Design-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by XXX</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

  
<script>
// Initiate zoom effect:
imageZoom("myimage", "myresult");
</script>
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b2a2dffeba8cd3125e30374/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>