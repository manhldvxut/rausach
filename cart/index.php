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
				<h1>Cart LUDALA</h1>
			</div>
		</div>
		<div class="container cart-page">
			<div class="contact">
				<form name="form" id="form_cart" class="ec-cartRole" method="post" action="/cart">
					<div class="ec-cartRole__cart">
						<div class="ec-cartTable">
							<ol class="ec-cartHeader">
								<li class="ec-cartHeader__label">Xóa</li>
								<li class="ec-cartHeader__label">Tên sản phẩm</li>
								<li class="ec-cartHeader__label">Số lượng</li>
								<li class="ec-cartHeader__label">Thành tiền</li>
							</ol>
							<ul class="ec-cartRow">
								<li class="ec-cartRow__delColumn">
									<a href="" class="ec-icon">
										<img src="/assets/images/cart/cross.svg" alt="delete">
									</a>
								</li>
								<li class="ec-cartRow__contentColumn">
									<div class="ec-cartRow__img">
										<a target="_blank" href="">
											<img src="/assets/images/cafe2.jpg" alt="">
										</a>
									</div>
									<div class="ec-cartRow__summary">
										<div class="ec-cartRow__name">
											<a target="_blank" href="">Rau xà lách loại 1</a>
										</div>
										<div class="ec-cartRow__unitPrice">
											10.000 VND
										</div>
									</div>
								</li>
								<li class="ec-cartRow__amountColumn">
									<div class="ec-cartRow__amount">1</div>
									<div class="ec-cartRow__amountUpDown">
										<div class="ec-cartRow__amountDownButtonDisabled">
											<span class="ec-cartRow__amountDownButton__icon"><img src="/assets/images/cart/icon-minus.svg" alt="reduce"></span>
										</div>
										<a href="" class="ec-cartRow__amountUpButton load-overlay">
											<span class="ec-cartRow__amountUpButton__icon"><img src="/assets/images/cart/icon-plus.svg" alt="increase"></span>
										</a>
									</div>
								</li>
								<li class="ec-cartRow__subtotalColumn">
									<div class="ec-cartRow__sutbtotal">10.000 VND</div>
								</li>
							</ul>
							<ul class="ec-cartRow">
								<li class="ec-cartRow__delColumn">
									<a href=""class="ec-icon">
										<img src="/assets/images/cart/cross.svg" alt="delete">
									</a>
								</li>
								<li class="ec-cartRow__contentColumn">
									<div class="ec-cartRow__img">
										<a target="_blank" href="">
											<img src="/assets/images/rau.png" alt="">
										</a>
									</div>
									<div class="ec-cartRow__summary">
										<div class="ec-cartRow__name">
											<a target="_blank" href="">Cà tím loại 200gram</a>
										</div>
										<div class="ec-cartRow__unitPrice">
											150.000 VND
										</div>
									</div>
								</li>
								<li class="ec-cartRow__amountColumn">
									<div class="ec-cartRow__amount">1</div>
									<div class="ec-cartRow__amountUpDown">
										<div class="ec-cartRow__amountDownButtonDisabled">
											<span class="ec-cartRow__amountDownButton__icon"><img src="/assets/images/cart/icon-minus.svg" alt="reduce"></span>
										</div>
										<a href="" class="ec-cartRow__amountUpButton load-overlay" >
											<span class="ec-cartRow__amountUpButton__icon"><img src="/assets/images/cart/icon-plus.svg" alt="increase"></span>
										</a>
									</div>
								</li>
								<li class="ec-cartRow__subtotalColumn">
									<div class="ec-cartRow__sutbtotal">150.000 VND</div>
								</li>
							</ul>

						</div>
					</div>
					<div class="ec-cartRole__progress">
						Tổng tiền chưa bao gồm phí vận chuyển
					</div>
					<div class="ec-cartRole__actions">
						<div class="ec-cartRole__total">Tổng tiền：<span class="ec-cartRole__totalAmount">160.000 VND</span>
						</div>
						<a class="ec-blockBtn--action" href="">Thanh toán</a>
						<a class="ec-blockBtn--cancel" href="/">Tiếp tục mua hàng</a>
					</div>
					</form>
				
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
