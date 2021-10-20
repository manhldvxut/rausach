<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/global-config.php';
//下記のパス「demo」を変更
include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/config.php';

//ページ用の変数
$page_title = 'Sample page';
$page_description = '';
$page_keywords = '';
$page_shareurl = 'https://'.STORE_NAME.'.co.jp/'; 

?>
<!DOCTYPE html>
<html lang="ja">
<head>

<!-- meta -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/meta.php';?>

<!-- link css -->
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/css.php';?>

</head>

<body class="<?php echo STORE_NAME; ?>">

<div class="wrapper" id="data">

<?php
/**
 * Header
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/header.php'; ?>


<?php
/**
 * Main contents
 */
?>

<main class="main-contents">
	<div class="slider-top">
		<div class="mvSlideArea">
			<div class="mvSlide">
				<img src="/assets/images/banner01.jpg" alt="">
			</div>
			<div class="mvSlide">
				<img src="/assets/images/banner02.jpg" alt="">
			</div>
			<div class="mvSlide">
				<img src="/assets/images/banner03.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="box__home">
		<div class="container">
			<div class="box__home-head">
				<h2>LUDALA<span>Nông sản Đà Lạt tại Vinh</span></h2>
				<p>Mang thiên nhiên tới bữa ăn của gia đình bạn</p>
			</div>
			<div class="box__home-info">
				<p class="text-center mb-5">Ludala – Nông sản Đà Lạt. <br>
				Chúng tôi là nơi chuyên cung cấp món ăn, sản phẩm, đặc sản Đà Lạt chất lượng cao tại TP. Vinh. </p>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-4">
						<div class="list-icon-product">
							<a href="">
								<img src="/assets/images/icon-rau.png" alt="">
								<h2>Rau - Củ - Quả</h2>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-4">
						<div class="list-icon-product">
							<a href="">
								<img src="/assets/images/icon-cafe.png" alt="">
								<h2>Cafe - Đồ ăn vặt</h2>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-4">
						<div class="list-icon-product">
							<a href="">
								<img src="/assets/images/icon-dacsan.png" alt="">
								<h2>Đồ đặc sản</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="product">
		<div class="container">
			<h2>Gian hàng Ludala</h2>
			<p class="text-center">Thanh toán online - Giao hàng tận nơi</p>
			<div class="product__rau product__item">
				<h3 class="rau">Rau - Củ - Quả</h3>
				<div class="row m-0 product-slider">
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau2.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau2.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau2.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/rau2.png"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Dưa leo baby khay 500g</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>

				</div>
				<div class="tempBtn"><a href="/">Xem thêm</a></div>
			</div>
			<div class="product__coffe product__item">
				<h3 class="cafe">Cafe - Đồ ăn vặt</h3>
				<div class="row m-0 product-slider">
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">cafe Trung Nguyen</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe3.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Cafe nguyên hạt</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe2.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Pizza Đà lạt</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe2.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Product test</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe3.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Product test</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
				</div>
				<div class="tempBtn"><a href="/">Xem thêm</a></div>
			</div>
			<div class="product__dacsan product__item">
				<h3 class="dacsan">Đặc sản Đà Lạt</h3>
				<div class="row m-0 product-slider">
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan01.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Đặc sản Đà Lạt</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan02.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Đặc sản Đà Lạt</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan03.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Đặc sản Đà Lạt 03</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan02.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Product test</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-4 col-6 p-0 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan01.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Product test</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
				</div>
				<div class="tempBtn"><a href="/">Xem thêm</a></div>
			</div>
		</div>
	</div>

	<div class="news">
		<div class="box__home-head text-center">
			<h2>LUDALA Tin tức</h2>
			<p>Cập nhập tin tức mới để nhận chương trình khuyến mãi</p>
			<div class="container mt-5">
				<div class="row news-row m-0">
					<div class="col-lg-4 news-col p-0">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new01.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 news-col p-0">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new01.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 news-col p-0">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new01.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="tempBtn"><a href="/">Xem thêm</a></div>
			</div>
		</div>
	</div>

	<div class="instagram">
		<h2 class="text-center">instagram</h2>
		<div class="row m-0">
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst01.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst02.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst03.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst04.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst05.jpg" alt="">
				</a>
			</div>
			<div class="col-lg-2 col-md-4 col-4 p-0">
				<a href="">
					<img src="/assets/images/inst06.jpg" alt="">
				</a>
			</div>
		</div>
	</div>
</main>






<?php
/**
 * Footer
 */
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/src/inc/footer.php'; ?>

</div>

<!-- Javascript -->


<?php include_once $_SERVER['DOCUMENT_ROOT'].'/'.DIRNAME.'/src/inc/js.php';?>

<!-- /Javascript -->
</body>
</html>
