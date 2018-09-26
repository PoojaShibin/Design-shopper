<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Mask Design</title>
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
</head><!--/head-->

<body>
<?php include 'connection.php';
$bit="";
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Design</span>-SHOPPER</h1>
									<h2>Products at your Finger</h2>
									<p>For The People Who Are interested in online shopping here we bring an exiting desings at your finger tip. </p>
									
								</div>
								<div class="col-sm-6">
									<img src="images/home/mm/21.jpeg" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
								                                                      <?php
                                       $sql = "SELECT * FROM product where del=0 order by pid desc ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{?>
    <div class="item">
								<div class="col-sm-6">
							<h1><span>Design</span>-SHOPPER</h1>
									<h2>Products at your Finger</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Now More..</button>
								</div>
								<div class="col-sm-6">
                           <img src="<?php echo $row['image'];?>" class="girl img-responsive" alt="" />
                           	</div>
							</div>
							
                         
                            <?php
	}
} ?>
									
							
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        										    <?php
                                       $sql = "SELECT * FROM product where del=0 group by category order by pid desc  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];
		?>
                           <div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo $row["image"];?>" alt="" width="150" height="150"/>
                                            <?php if($bit==0)
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
											}?>
											<p><?php echo $row["category"];?></p>
											<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
											<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
                         
                            <?php
	}
} ?>
						
						
			
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active">
   
                                <a href="#T-Shirt" data-toggle="tab">T-Shirt</a></li>
                                 <li><a href="#Cap" data-toggle="tab">Cap and Hats</a></li>
                                  <li><a href="#Mugs" data-toggle="tab">Mugs</a></li>
                                   <li><a href="#Phone" data-toggle="tab">Phone Cover</a></li>
                                   <li> <a href="#Pillow" data-toggle="tab">Pillow Cover</a></li>
                                     <li><a href="#Hoodie" data-toggle="tab">Hoodie</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="T-Shirt" >
                               <?php
                                       $sql = "SELECT * FROM product where category='T-Shirt' && del=0 order by pid desc limit 4  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
											<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
							
								
                                
							</div>
							<div class="tab-pane fade" id="Cap" >
								  <?php
                                       $sql = "SELECT * FROM product where category='Cap and Hats' order by pid desc limit 4  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
							
								
							</div>
							
							<div class="tab-pane fade" id="Mugs" >
								  <?php
                                       $sql = "SELECT * FROM product where category='Mugs' order by pid desc limit 4 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
											<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
							
								
							</div>
							
							
							<div class="tab-pane fade" id="Phone" >
								  <?php
                                       $sql = "SELECT * FROM product where category='Phone Cover' order by pid desc  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												
											<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
							
								
							</div>
							
							<div class="tab-pane fade" id="Pillow" >
								  <?php
                                       $sql = "SELECT * FROM product where category='Pillow Cover' order by pid desc  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
					</div>		
                    <div class="tab-pane fade" id="Hoodie" >
								  <?php
                                       $sql = "SELECT * FROM product where category='Hoodie' order by pid desc  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
												<p><?php echo $row["category"];?></p>
												<a href="shop.php?job=<?php echo $row["category"];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>See More..</a>
											</div>
											
										</div>
									</div>
								</div>
                                <?php
	}
}?>
					</div>		
					</div>			
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
                                  <?php
                                       $sql = "SELECT * FROM product  where category='T-Shirt' order by pid desc  limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
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
                                       $sql = "SELECT * FROM product where category='Hoodie'  order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
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
                                       $sql = "SELECT * FROM product where category='Mugs' order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
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
                                       $sql = "SELECT * FROM product where category='Phone Cover' order by pid limit 3 ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) 
{
    
    while($row = mysqli_fetch_assoc($result)) 
	{
		$bit=$row["offer_bit"];
		$pp=$row["offer_price"];
		$occ=$row["offer_occation"];
		$discount=$row["price"]-$row["offer_price"];?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="<?php echo $row["image"];?>" alt=""  height="150"/>
												<?php if($bit==0)
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
											}?>
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
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
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