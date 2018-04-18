<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js"><head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Shop</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/nouislider.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>

            <!-- Start Header Area -->

            <div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 109px;"><div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 108px;"><div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 108px;"><div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 108px;"><header class="default-header" style="">
                <div class="menutop-wrap">
                    <div class="menu-top container">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="list">
                                <li><a href="tel:+12312-3-1209">+12312-3-1209</a></li>
                                <li><a href="mailto:support@colorlib.com">support@colorlib.com</a></li>
                            </ul>
                            <ul class="list">
                                <li><?php
									error_reporting(E_ALL ^ E_NOTICE);

									if($_SESSION['C_ID']){

										echo "Welcome <b>".$_SESSION['C_ID']."</b><br>" ;
										echo "<a href=\"logout.php\">logout</a>";


									}
									else{


										echo "<a href=\"login.php\">login</a>";

									}


										?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                          <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" alt="">
                          </a>
                          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="navbar-collapse justify-content-end align-items-center collapse" id="navbarSupportedContent" style="">
                            <ul class="navbar-nav">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#catagory">Category</a></li>
                                <li><a href="#men">Men</a></li>
                                <li><a href="#women">Women</a></li>
                                <li><a href="#latest">latest</a></li>
                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Pages
                                      </a>
                                      <div class="dropdown-menu" style="display: none;">
                                        <a class="dropdown-item" href="category.php">Category</a>
                                        <a class="dropdown-item" href="single.html">Single</a>
                                        <a class="dropdown-item" href="cart.php">Cart</a>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        <a class="dropdown-item" href="confermation.html">Confermation</a>
                                        <a class="dropdown-item" href="login.php">Login</a>
                                        <a class="dropdown-item" href="tracking.php">Tracking</a>
                                        <a class="dropdown-item" href="generic.html">Generic</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                      </div>
                                    </li>
                            </ul>
                          </div>
                    </div>
                </nav>
            </header></div></div></div></div>
            <!-- End Header Area -->

            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Shop Category page</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index.php">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="category.php">Fashon Category</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-7">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<a href="#" class="grid-btn active"><i class="fa fa-th" aria-hidden="true"></i></a>
							<a href="#" class="list-btn"><i class="fa fa-th-list" aria-hidden="true"></i></a>
							<div class="sorting">
								<select style="display: none;">
									<option value="1">Default sorting</option>
									<option value="1">Default sorting</option>
									<option value="1">Default sorting</option>
								</select><div class="nice-select" tabindex="0"><span class="current">Default sorting</span><ul class="list"><li data-value="1" class="option selected">Default sorting</li><li data-value="1" class="option">Default sorting</li><li data-value="1" class="option">Default sorting</li></ul></div>
							</div>
							<div class="sorting mr-auto">
								<select style="display: none;">
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
								</select><div class="nice-select" tabindex="0"><span class="current">Show 12</span><ul class="list"><li data-value="1" class="option selected">Show 12</li><li data-value="1" class="option">Show 12</li><li data-value="1" class="option">Show 12</li></ul></div>
							</div>
							<div class="pagination">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
						<!-- Start Best Seller -->
						<section class="lattest-product-area pb-40 category-list">
							<div class="row">
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.001.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>NIKE AIR MAX 97 ULTRA '17 </h5>

								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.002.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Nike Metcon 4</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.003.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Adidas Gazelle Shoes</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.004.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Adidas Superstar Shoes</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.005.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Adidas SWIFT RUN</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.006.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Adidas X_PLR Shoes</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.007.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>NIKE AIR FORCE 1 07</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img src="img\shoes\03.008.jpg" class="content-image img-fluid d-block mx-auto">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
										</div>
							        </div>
								  </div>
								  <div class="price">
								  		<h5>NMD_R1 STLT Primeknit Shoes</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.010.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>

												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>NIKE AIR VAPORMAX FLYKNIT MOC</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.011.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Big Selection Nike Air Presto</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.012.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>NIKE AIR PRESTO BR QS</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="img\shoes\03.013.jpg" alt="">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
												<a href="#"><span class="lnr lnr-heart"></span></a>
												<a href="#"><span class="lnr lnr-layers"></span></a>
												<a href="#"><span class="lnr lnr-cart"></span></a>
												<a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5>Nike Air Presto Essential</h5>
								  		<h3>$150.00</h3>
								   </div>
								</div>
							</div>
						</section>
						<!-- End Best Seller -->
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
							<div class="sorting mr-auto">
								<select style="display: none;">
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
									<option value="1">Show 12</option>
								</select><div class="nice-select" tabindex="0"><span class="current">Show 12</span><ul class="list"><li data-value="1" class="option selected">Show 12</li><li data-value="1" class="option">Show 12</li><li data-value="1" class="option">Show 12</li></ul></div>
							</div>
							<div class="pagination">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
					</div>
					<div class="col-xl-3 col-lg-4 col-md-5">
						<div class="sidebar-categories">
							<div class="head">เลือกหมวดหมู่

</div>
							<ul class="main-categories">
								<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="รองเท้าบาส" class="collapsed"><span class="lnr lnr-arrow-right"></span>Basketball<span class="number">(53)</span></a>
									<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" ก="" style="">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>

								<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish" class="collapsed"><span class="lnr lnr-arrow-right"></span>Lifestyle<span class="number">(53)</span></a>
									<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish" style="">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span class="lnr lnr-arrow-right"></span>Running<span class="number">(53)</span></a>
									<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span class="lnr lnr-arrow-right"></span>Gym &amp; Training<span class="number">(24)</span></a>
									<ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span class="lnr lnr-arrow-right"></span>Walking<span class="number">(53)</span></a>
									<ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list"></li>
								<li class="main-nav-list">
									<ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list">
									<ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list">
									<ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list"></li>
								<li class="main-nav-list">
									<ul class="collapse" id="homeAppliance" data-toggle="collapse" aria-expanded="false" aria-controls="homeAppliance">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
								<li class="main-nav-list">
									<ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false" aria-controls="babyCare">
										<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
										<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
										<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
										<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
										<li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span class="number">(11)</span></a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="sidebar-filter mt-50">
							<div class="top-filter-head">Product Filters</div>
							<div class="common-filter">
								<div class="head">Active Filters</div>
								<ul>


								</ul>
							</div>
							<div class="common-filter">
								<div class="head">Brands</div>
								<form action="#">
									<ul>
										<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Nike<span>(29)</span></label></li>
										<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Adidas<span>(29)</span></label></li>
										<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Puma<span>(19)</span></label></li>
										<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Birkenstock <span>(19)</span></label></li>
										<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Lacoste<span>(19)</span></label></li>
									</ul>
								</form>
							</div>

							<div class="common-filter">
								<div class="head">Price</div>
								<div class="price-range-area">
									<div id="price-range" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 10%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="50.0" aria-valuenow="10.0" aria-valuetext="500.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 10%; right: 50%;"></div><div class="noUi-origin" style="left: 50%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="4000.00" style="z-index: 6;"></div></div></div><div class="noUi-base"><div class="noUi-origin" style="left: 10%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="50.0" aria-valuenow="10.0" aria-valuetext="500.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 10%; right: 50%;"></div><div class="noUi-origin" style="left: 50%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="4000.00" style="z-index: 6;"></div></div></div><div class="noUi-base"><div class="noUi-origin" style="left: 10%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="50.0" aria-valuenow="10.0" aria-valuetext="500.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 10%; right: 50%;"></div><div class="noUi-origin" style="left: 50%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="4000.00" style="z-index: 6;"></div></div></div><div class="noUi-base"><div class="noUi-origin" style="left: 10%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="50.0" aria-valuenow="10.0" aria-valuetext="500.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 10%; right: 50%;"></div><div class="noUi-origin" style="left: 50%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="100.0" aria-valuenow="50.0" aria-valuetext="4000.00" style="z-index: 6;"></div></div></div></div>
									<div class="value-wrapper d-flex">
										<div class="price">Price:</div>
										<span>$</span><div id="lower-value">500.00</div> <div class="to">to</div>
										<span>$</span><div id="upper-value">4000.00</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

            <!-- Start Most Search Product Area -->
            <section class="section-half">
                <div class="container">
                    <div class="organic-section-title text-center">
                        <h3>จากสินค้าค้นหามากที่สุด

</h3>
                    </div>
                    <div class="row mt-30">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r1.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Blueberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r2.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Cabbage</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r3.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Raspberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r4.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Kiwi</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r5.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore Bell Pepper</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r6.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Blackberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r7.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Brocoli</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r8.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Carrot</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $120.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r9.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Strawberry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r10.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Prixma MG2 Light Inkjet</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r11.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Cherry</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-search-product d-flex">
                                <a href="#"><img src="img/r12.jpg" alt=""></a>
                                <div class="desc">
                                    <a href="#" class="title">Pixelstore fresh Beans</a>
                                    <div class="price"><span class="lnr lnr-tag"></span> $240.00 <del>$340.00</del></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Most Search Product Area -->

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>เกี่ยวกับเรา</h6>
                                <p>ห้างสรรพสินค้าออนไลน์ชั้นนำ
JR ‘Zaa คือห้างสรรพสินค้าออนไลน์ที่ จัดส่งสินค้ารวดเร็ว เชื่อถือได้ และมอบความสะดวกสบายในการเลือกซื้อสินค้าแก่ลูกค้า

ด้วยการนำเสนอสินค้าที่คู่ควรแก่คุณ
JR ‘Zaa พร้อมมอบสิ่งที่ดีที่สุด ให้แก่ลูกค้าเสมอ ไม่ว่าจะเป็นวิธีการชำระเงินปลายทาง หรือบริการการคืนสินค้าฟรี และศูนย์บริการลูกค้าที่พร้อมจะให้คำแนะนำตลอดการเลือกซื้อสินค้า


</p>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">

                                <p>เราไม่เคยหยุดที่จะหาสิ่งที่ดีที่สุดให้คุณ เพราะเราคือห้างสรรพสินค้าที่อยู่เพียงแค่ปลายนิ้ว ที่ให้คุณช๊อปปิ้งได้ทุกที่ทุกเวลา! ตลอด 24 ชั่วโมง ง่าย ๆ เพียงแค่สมัครเป็นส่วนหนึ่งของเว็ป JR ‘Zaa มาเป็นสมาชิกกับเราและรับสิทธิพิเศษรวมทั้งข่าวสารและโปรโมชั่นสุดพิเศษอย่างต่อเนื่อง

เพราะคุณคือคนสำคัญของเรา เราจึงทุ่มเทที่จะสร้างประสบการณ์การชอปปิ้งที่ดีที่สุดให้กับคุณ หากคุณมีคำถามใดๆ พวกเรารอตอบคุณอยู่เพียงต่อสายโทรศัพท์หรืออีเมลล์หาเราเท่านั้น

</p>
                                <div class="" id="mc_embed_signup">

                                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                        <div class="d-flex flex-row">





                                                <div style="position: absolute; left: -5000px;">
                                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                                </div>

                                            <!-- <div class="col-lg-4 col-md-4">
                                                <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                            </div>  -->
                                        </div>
                                        <div class="info"></div>
                                        </form>
                                </div>
                                </div>
                        </div>
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget mail-chimp">

                                <ul class="instafeed d-flex flex-wrap">
                                    <li><img src="img/i1.jpg" alt=""></li>
                                    <li><img src="img/i2.jpg" alt=""></li>
                                    <li><img src="img/i3.jpg" alt=""></li>
                                    <li><img src="img/i4.jpg" alt=""></li>
                                    <li><img src="img/i5.jpg" alt=""></li>
                                    <li><img src="img/i6.jpg" alt=""></li>
                                    <li><img src="img/i7.jpg" alt=""></li>
                                    <li><img src="img/i8.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>ติดตามเราได้ที่</h6>

                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer-text m-0"><script>document.write(new Date().getFullYear());</script>2018© JR 'Zaa 2018</p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->

			<!-- Modal Quick Product View -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="container relative">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<div class="product-quick-view">
							<div class="row align-items-center">
								<div class="col-lg-6">
									<div class="quick-view-carousel">
										<div class="item" style="background: url(img/organic-food/q1.jpg);">

										</div>
										<div class="item" style="background: url(img/organic-food/q1.jpg);">

										</div>
										<div class="item" style="background: url(img/organic-food/q1.jpg);">

										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="quick-view-content">
										<div class="top">
											<h3 class="head">Mill Oil 1000W Heater, White</h3>
											<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
											<div class="category">Category: <span>Household</span></div>
											<div class="available">Availibility: <span>In Stock</span></div>
										</div>
										<div class="middle">
											<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.</p>
											<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
										</div>
										<div class="bottom">
											<div class="color-picker d-flex align-items-center">Color:
												<span class="single-pick"></span>
												<span class="single-pick"></span>
												<span class="single-pick"></span>
												<span class="single-pick"></span>
												<span class="single-pick"></span>
											</div>
											<div class="quantity-container d-flex align-items-center mt-15">
												Quantity:
												<input type="text" class="quantity-amount ml-15" value="1">
												<div class="arrow-btn d-inline-flex flex-column">
													<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
													<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
												</div>

											</div>
											<div class="d-flex mt-20">
												<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
												<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
												<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
				<script src="js/nouislider.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/main.js"></script>


</body></html>
