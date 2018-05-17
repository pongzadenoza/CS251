<?php
session_start();
	


	require("class/cartctrl.php");
	require("Promotion.php");
	
	
	 $usr = $_SESSION['C_ID'];
	// $arrPro = CartCtrl::getCartProductfromUser($usr);
	 $countArr = count($arrPro);
	 $conn = new mysqli("13.231.233.64:3306","project","123456","CS281");
		 $getsql = "SELECT p_id, p_price , p_name , p_date , p_time FROM history WHERE p_usr = '".$usr."' ;";
	$res = $conn->query($getsql);
	$arrPro = mysqli_fetch_all($res);
	
	 $transport = 500;

	$totalPrice =0.0 ;
	for($i=0 ;$i<$countArr ;$i++){


		if($i==4)
		{
			$transport = 0;
		}


		if(Promotion::chekPromotion($arrPro[$i][3])==0)
		{
			 echo 'ไม่มีโปรโมชั่น';
		}
		else {
			echo 'ลด '.Promotion::chekPromotion($arrPro[$i][3])." %";
		}
		$promo=(100-Promotion::chekPromotion($arrPro[$i][3]))/100;



		$totalPrice += $arrPro[$i][2]*$promo;
	}

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

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,600,600,700" rel="stylesheet">
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/nice-select.css">
            <link rel="stylesheet" href="css/ion.rangeSlider.css">
            <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/main.css">
        </head>
        <body>

            <!-- Start Header Area -->
            <div id="undefined-sticky-wrapper" class="sticky-wrapper is-sticky" style="height: 108px;"><header class="default-header" style="width: 1348px; position: fixed; top: 0px;">
                <div class="menutop-wrap">
                    <div class="menu-top container">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="list">

                                <li><a href="tel:+12312-3-1209">0861234567 </a></li>
                                <li><a href="mailto:support@colorlib.com">JR'Zaa@gmail.com</a></li>
                            </ul>
                            <ul class="list">
                                <li>
									<?php
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
                          <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="">
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="./index.php">Home</a></li>
                                <li><a href="./category.php">Category</a></li>

                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Pages
                                      </a>
                                      <div class="dropdown-menu" style="display: none;">
                                        <a class="dropdown-item" href="category.php">Category</a>
                                        <a class="dropdown-item" href="single.php">Single</a>
                                        <a class="dropdown-item" href="cart.html">Cart</a>
                                        <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        <a class="dropdown-item" href="confermation.html">Confermation</a>
                                        <a class="dropdown-item" href="login.html">Login</a>
                                        <a class="dropdown-item" href="tracking.php">Tracking</a>

																				<a class="dropdown-item" href="Favorite.php">Favorite</a>

                                      </div>
                                    </li>
                            </ul>
                          </div>
                    </div>
                </nav>
            </header></div>
            <!-- End Header Area -->

            <!-- Start Banner Area -->
            <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>History</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="cart.html">History</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Cart Area -->
            <div class="container">
                <div class="cart-title">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="ml-15">Product</h6>
                        </div>
						<div class="col-md-2">
							<h6>วันที่</h6>
						</div>
						<div class="col-md-2">
							<h6>เวลา</h6>
						</div>
												
                        <div class="col-md-2">
                            <h6>ราคา</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>ราคา(รวมภาษี 7%)</h6>
                        </div>
												<div class="col-md-2">

												</div>
                    </div>
                </div>


				<?php for($i=0 ;$i< count($arrPro) ;$i++) { ?>

                <div class="cart-single-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-item d-flex align-items-center">
                                <img <?php  echo "src=\"img/product/".$arrPro[$i][0].".jpg\"" ; ?> class="img-fluid" alt="" width="200">
                                <h6><?php echo $arrPro[$i][3]?></h6>
								<h6><?php echo $arrPro[$i][4]?></h6>
                            </div>
                        </div>
												<div class="col-md-2 col-6">
													<h6>	<?php
												if(Promotion::chekPromotion($arrPro[$i][3])==0)
												{
													 echo 'ไม่มีโปรโมชั่น';
												}
												else {
													echo 'ลด '.Promotion::chekPromotion($arrPro[$i][3])." %";
												}
												$promo=(100-Promotion::chekPromotion($arrPro[$i][3]))/100;

														 ?></h6>

												 </div>
                        <div class="col-md-2 col-6">
                            <div class="price"><?php echo $arrPro[$i][1]*$promo."฿"?></div>
                        </div>
                        <div class="col-md-2 col-6">
                          	<div class="price"><?php echo ($arrPro[$i][1]*$promo)*1.07."฿" ?></div>
                        </div>

                       
                    </div>

                </div>

				<?php } ?>



                <!--<div class="cupon-area d-flex align-items-center justify-content-between flex-wrap">
                    <a href="#" class="view-btn color-2" disable><span>Update Cart</span></a>
                    <div class="cuppon-wrap d-flex align-items-center flex-wrap">
                        <div class="cupon-code">
                            <input type="text">
                            <button class="view-btn color-2"><span>Apply</span></button>
                        </div>
                        <a href="#" class="view-btn color-2 have-btn" ><span>ส่วนลด</span></a>
                    </div>
                </div>-->
                
				


								 </div>
                <!--<div class="shipping-area d-flex justify-content-end">
                    <div class="tile text-uppercase">การส่งสินค้า</div>
                    <form action="#" class="d-inline-flex flex-column align-items-end">
                        <ul class="d-flex flex-column align-items-end">
                            <li class="filter-list">
                                <label for="flat-rate">Flat Rate:<span>$5.00</span></label>
                                <input class="pixel-radio" type="radio" id="flat-rate" name="brand">
                            </li>
                            <li class="filter-list">
                                <label for="free-shipping">Free Shipping</label>
                                <input class="pixel-radio" type="radio" id="free-shipping" name="brand">
                            </li>
                            <li class="filter-list">
                                <label for="flat-rate-2">Flat Rate:<span>$10.00</span></label>
                                <input class="pixel-radio" type="radio" id="flat-rate-2" name="brand">
                            </li>
                            <li class="filter-list">
                                <label for="local-delivery">Local Delivery:<span>$2.00</span></label>
                                <input class="pixel-radio" type="radio" id="local-delivery" name="brand">
                            </li>
                            <li class="calculate">Calculate Shipping</li>
                        </ul>
                        <div class="sorting">
                            <select style="display: none;">
                                <option value="1">Bangladesh</option>
                                <option value="1">India</option>
                                <option value="1">Srilanka</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="1" class="option selected">Bangladesh</li><li data-value="1" class="option">India</li><li data-value="1" class="option">Srilanka</li></ul></div>
                        </div>
                        <div class="sorting mt-20">
                            <select style="display: none;">
                                <option value="1">Select a State</option>
                                <option value="1">Select a State</option>
                                <option value="1">Select a State</option>
                            </select><div class="nice-select" tabindex="0"><span class="current">Select a State</span><ul class="list"><li data-value="1" class="option selected">Select a State</li><li data-value="1" class="option">Select a State</li><li data-value="1" class="option">Select a State</li></ul></div>
                        </div>
                        <input type="text" placeholder="Postcode/Zipcode" onfocus="this.placeholder=''" onblur="this.placeholder = 'Postcode/Zipcode'" required="" class="common-input mt-10">
                        <button class="view-btn color-2 mt-10"><span>Update Details</span></button>
                    </form>

                </div>-->
            </div>
            <!-- End Cart Area -->

            <!-- Start Most Search Product Area -->
            <section class="section-half">
                <div class="container">
                    <div class="organic-section-title text-center">
                        <h3>จากสินค้าค้นหามากที่สุด</h3>
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
                        <p class="footer-text m-0">Copyright ©<script>document.write(new Date().getFullYear());</script>2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
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

    </body></html>
