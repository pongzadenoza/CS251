<?php
	session_start();
	require("productgetset.php");
	$conn = new mysqli( "13.231.233.64:3306", "project", "123456", "CS281" );
	$getsql = "SELECT * FROM product";
	$res = $conn->query($getsql);
	$idArr = mysqli_fetch_all($res);

	$procount = count($idArr);
	$conn->close();



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

                                      <a class="dropdown-item" href="single.php">Single</a>
                                      <a class="dropdown-item" href="cart.php">Cart</a>
                                      <a class="dropdown-item" href="checkout.html">Checkout</a>
                                      <a class="dropdown-item" href="confermation.html">Confermation</a>
                                      <a class="dropdown-item" href="login.php">Login</a>
                                      <a class="dropdown-item" href="tracking.php">Tracking</a>
                                      <a class="dropdown-item" href="generic.html">Generic</a>
                                      <a class="dropdown-item" href="elements.html">Elements</a>
                                      <a class="dropdown-item" href="Favorite.php">Favorite</a>
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
                            <h1>ยืนยันการสั่งซื้อ</h1>
                             <nav class="d-flex align-items-center justify-content-start">


                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->


		<!-- Start Billing Details Form -->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="login-form">
						<h3 class="billing-title text-center">กรอกข้อมูล</h3>
						<p class="text-center mt-40 mb-30">

					<h6>		<P Align=right>	<?php echo "ราคารวม            ".$_GET['select_P1']." ฿"; ?></P>  </h6>
					<h6>		<P Align=right>	<?php echo "ราคารวม + แว็กซ์            ".$_GET['select_P2']." ฿"; ?></P>  </h6>
					<h6>		<P Align=right>	<?php echo "ค่าจัดส่ง            ".$_GET['select_P3']." ฿"; ?></P>  </h6>
	<?php $sum=$_GET['select_P3']+$_GET['select_P2'] ?>
						<h6>		<P Align=right>	<?php  echo "จำนวนเงินทั้งหมด            ".$sum." ฿"; ?></P>  </h6>
							<input name ="cname" type="text" placeholder="ชื่อผู้รับ*" onfocus="this.placeholder=''" onblur="this.placeholder = 'ชื่อผู้รับ*'" required class="common-input mt-20">
							<input name="cmail" type="email" placeholder="ชื่อผู้ส่ง*" onfocus="this.placeholder=''" onblur="this.placeholder = 'ชื่อผู้ส่ง*'" required class="common-input mt-20">
							<input name="cphone" type="text" placeholder="เบอร์โทร*" onfocus="this.placeholder=''" onblur="this.placeholder = 'เบอร์โทร*'" required class="common-input mt-20">
							<input name="cads" type="text" placeholder="่ที่อยู่*" onfocus="this.placeholder=''" onblur="this.placeholder = 'ที่อยู่*'" required class="common-input mt-20">


							<button class="view-btn color-2 mt-20 w-100"><span>ชำระเงิน</span></button>

					</div>

				</div>
				<div class="col-md-6">
					<div class="login-form">
						<h3 class="billing-title text-center">ตัวอย่างใบเสร็จ</h3>
					

						<style>
    embed {
        width: 100%;
        height: 500px;
    }
</style>
							<embed src="pdf.php" width="400px" height="569px" />

					</div>
				</div>
			</div>
		</div>

		<!-- End Bill</p>ing Details Form -->


    <!-- start footer Area -->
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">

          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Newsletter</h6>
              <p>Stay update with our latest</p>


              <form action="sentemailtoSQL.php" method="post" name="form" class="form-box">
                <div class="d-flex flex-row">

                  <input class="form-control" type="email" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                  <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
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
          <div class="col-lg-3  col-md-6 col-sm-6">
            <!--<div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Instragram Feed</h6>
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
            </div>-->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Follow Us</h6>
              <p>Let us be social</p>
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
          <p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>

      </div>
    </footer>
    <!-- End footer Area -->

            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/ion.rangeSlider.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/main.js"></script>
        </body>
    </html>
