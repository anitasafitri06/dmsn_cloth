
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>DMSN | Cloth</title>

	<link href="<?php echo base_url()?>assets/front/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/price-range.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/animate.css" rel="stylesheet">
	
	<!-- <link href="<?php echo base_url()?>assets/front/css/sliderprice.css" rel="stylesheet"> -->
	<link href="<?php echo base_url()?>assets/front/css/jquery-ui.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/responsive.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/front/css/main.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>assets/front/js/html5shiv.js"></script>
    <script src="<?php echo base_url()?>assets/front/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/front/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/front/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="tel:085853764672"><i class="fa fa-phone"></i>085853764672</a></li>
								<li><a href="https://dmsncloth@gmail.com"><i class="fa fa-envelope"></i>dmsncloth@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://m.facebook.com/profile.php?id=100012399571908&ref=content_filter"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url()?>assets/front/images/home/dmsn.jpg" style="width:100px"; alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Category
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/6">T-Shirt</a></li>
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/7">Hoodie</a></li>
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/5">Topi</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Brands
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/6">Tess</a></li>
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/7">Jacket</a></li>
									<li><a href="http://localhost/dmsncloth/show-post-by-brand-id/5">Beanie</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<?php $customer_id = $this->session->userdata('cus_id');?>
								<?php $shipping_id = $this->session->userdata('shipping_id');?>

									<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){
										?>
								<li>
									<a href="<?php echo base_url()?>payment"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>
									<?php }elseif($this->cart->total_items()!=Null && $customer_id!=NULL){?>

								<li>
									<a href="<?php echo base_url()?>billing"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>

									<?php }else{?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-crosshairs"></i> Checkout</a>

								</li>
									<?php } ?>
								<li>
									<?php if($this->cart->total_items()!=Null && $customer_id!=NULL && $shipping_id!=NULL){?>
									<a href="<?php echo base_url()?>payment"><i class="fa fa-credit-card"></i>Payment</a>
									<?php } ?>
								</li>
								<li>	
									<a href="<?php echo base_url()?>show-cart"><i class="fa fa-shopping-cart"></i>
									<?php $cart_items =  $this->cart->total_items();
										if($cart_items>0){
									?> 
									 Cart(<?php echo $cart_items;?>)
									 <?php }else{?>
									  Cart(empty)
									 <?php } ?>
									</a>

								</li>
								<?php 
									
								if($customer_id){?>
								<li>
									<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Logout</a>
								</li>
								<?php }else{ ?>
								<li>
									<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Login</a>
								</li>
								<?php } ?>
								
							</ul>
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
								<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="<?php echo base_url()?>products">Products</a></li>
											<?php if($this->cart->total_items()!=Null && $customer_id!=NULL){
													?>
											<li>
												<a href="<?php echo base_url()?>billing">Checkout</a>

											</li>
												<?php }elseif($this->cart->total_items()!=Null){?>
											<li>
												<a href="<?php echo base_url()?>checkout">Checkout</a>

											</li>
												<?php } ?>
											<li>	
												<a href="<?php echo base_url()?>show-cart">
												<?php $cart_items =  $this->cart->total_items();
													if($cart_items>0){
												?> 
												 Cart(<?php echo $cart_items;?>)
												 <?php }else{?>
												  Cart(empty)
												 <?php } ?>
												</a>

											</li>
											<?php if($customer_id){?>
											<li>
												<a href="<?php echo base_url()?>logout"><i class="fa fa-lock"></i> Logout</a>
											</li>
											<?php }else{ ?>
											<li>
												<a href="<?php echo base_url()?>checkout"><i class="fa fa-lock"></i> Login</a>
											</li>
											<?php } ?>
			 
									</ul>
								</li> 
								<li><a href="<?php echo base_url()?>home/_404_page">404</a></li>
								<li><a href="<?php echo base_url()?>contact">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="<?php echo base_url()?>search" method="post">
							<input type="text" name="search" placeholder="search" />							
							</form>
						</div> 
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

<?php if(isset($main_content) && $main_content!=NULL){
	echo $main_content; // Load a single page under header and footer
}else{?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if(isset($slider)){
						echo $slider;
					}?>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
		<div class="container">
			<div class="row">
					<?php if(isset($category_brand)){
						echo $category_brand;
					}?>
				
				<div class="col-sm-9 padding-right">
					<?php if(isset($feature)){
						echo $feature;
					}?>
					
					<!-- This is Category Post option -->
					
					<?php if(isset($recommended)){
						echo $recommended;
					}?>
					
				</div>
			</div>
		</div>
	</section>
<?php } ?>

	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>DMSN</span>Cloth</h2>
							<p>Dapatkan kemudahan berbelanja di DMSN Cloth, Kami menyediakan kebutuhan untuk fashion anda</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="http://localhost/dmsncloth/show-post-by-brand-id/6">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/bajubaru.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>T-Shirt</p>
								<h2>2019</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="http://localhost/dmsncloth/show-post-by-brand-id/7">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/15.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Hoodie</p>
								<h2>2019</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="http://localhost/dmsncloth/show-post-by-brand-id/5">
									<div class="iframe-img">
										<img src="<?php echo base_url()?>assets/front/images/home/topi3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Beanie</p>
								<h2>2019</h2>
							</div>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo base_url()?>assets/front/images/home/map.png" alt="" />
							<p>Jl. A.Yani No. 19 Kec.Kraksaan - Kab.Probolinggo</p>
						</div>
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
								<li><a href="#">Change Location</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About DMSN</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About DMSN</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 DMSN-Cloth Inc. All rights reserved.</p>
					<p class="pull-right">Develop by <span><a target="_blank" href="http://www.sumon-it.com">DMSN-Cloth</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	<script src="<?php echo base_url()?>assets/front/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/price-range.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/jquery-ui.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url()?>assets/front/js/gmaps.js"></script>
	<script src="<?php echo base_url()?>assets/front/js/contact.js"></script>

	<script src="<?php echo base_url()?>assets/front/js/main.js"></script>
	<!-- Price Range Script Start-->
	<script type="text/javascript">  
 $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1500,
      values: [ 500,1000 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>

	<!-- Price Range Code end -->
</body>
</html>
