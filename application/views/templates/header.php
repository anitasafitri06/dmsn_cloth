<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DMSNCLOTH | Katalog Distro Mahasiswa Jember</title> 
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
	<meta name="keywords" content="Kaos, Murah" />
	<meta name="author" content="Nuzul"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/bootstrap-responsive.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span5">
					<a class="brand" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/img/dmsn.jpg'); ?>" width="110" alt="Logo"></a>
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->			
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav" style="height: auto; width: auto; padding-bottom:50px">
			              			<li class="active"><a href="<?= base_url('home'); ?>">Home</a></li>
									  <li><a href="<?= base_url('tentang'); ?>">Tentang Kami</a></li>
			              			<li><a href="<?= base_url('produk'); ?>">Produk Kami</a></li>
									<li><a href="<?= base_url('testimoni'); ?>">Testimoni</a></li>
									<li><a href="<?= base_url('login'); ?>">Login</a></li>
                                    <?php
                                    if ($this->session->userdata('items')) {
									?>
                                    <li><a href="<?= base_url('detail'); ?>">Keranjang (<?= array_sum($this->session->userdata('items')); ?>)</a></li>
                                    <?php
                                    }
                                    ?>
									<li><a href="<?= base_url('status'); ?>">Cek Status</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	<!-- start: Slider -->

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>T-Shirt</h2>
				<p><b>Kami menyediakan kaos sport dan casual yang nyaman anda kenakan setiasp hari juga update dengan perkermbangan mode di era sekarang ini.</b></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?= base_url('assets/img/Hasil/16.png'); ?>" width="200" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Hoodie</h2>
				<p><b>Kami memiliki banyak koleksi jacket dan sweater, mulai dari rider jacket hingga casual jacket dan juga casual sweater yang cocok dipakai sehari hari.</b></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?= base_url('assets/img/Hasil/3.png'); ?>" width="300" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Hat</h2>
				<p><b>Kami menerima pembuatan kaos custom sesuai dengan design keinginan anda dengan harga yang bisa di sesuaikan dengan kebutuhan anda.</b></p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="<?= base_url('assets/img/Hasil/11.png'); ?>" width="300" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>
		
	<!-- end: Slider -->