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
	<div class="page-content">
		<div class="bg-head">
			<div class="container">
				<h1>Gian hàng Ludala</h1>
			</div>
		</div>
		<div class="search-product collection">
			<div class="container">
				<div id="sort-by">
					<ul>
						<li><span class="val">Lựa chọn: </span>
							<ul class="ul_2">
								<li><a href="javascript:;" onclick="sortby('default')">Yêu thích</a></li>								
								<li class="active"><a href="javascript:;" onclick="sortby('alpha-asc')">Sản phẩm mới</a></li>
								<li><a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
								<li><a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-4  product-col">
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
					<div class="col-md-4 product-col">
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
					<div class="col-md-4  product-col">
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
					<div class="col-md-4 product-col">
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
					<div class="col-md-4 product-col">
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

					<div class="col-md-4 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/cafe2.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Bánh tráng trộn free ship</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-col">
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
					<div class="col-md-4 product-col">
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
					<div class="col-md-4 product-col">
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
					<div class="col-md-4 product-col">
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
					<div class="col-md-4 product-col">
						<div class="item-prd text-center">
							<div class="avarta">
								<a href="?add-to-cart=12"><img class="img-fluid" alt="Dưa leo baby khay 500g" 
								src="/assets/images/dacsan01.jpg"></a>
								<div class="avr-abs"><span>MUA NGAY</span></div>
							</div>
							<div class="info">
								<h4><a href="">Hồng Đà Lạt</a></h4>
								<p><del aria-hidden="true"><span class="woocommerce-Price-amount amount"></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi>20,000<span class="woocommerce-Price-currencySymbol">VND</span></bdi>
							</span></ins></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-col">
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
				</div>
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
