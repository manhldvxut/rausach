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
				<h1>Tin tức Ludala</h1>
			</div>
		</div>
		<div class="news">
			<div class="container">
				<h3 class="icon-news-content">Cập nhập tin tức từ Ludala để nhận chương trình khuyến mãi</h3>
				<div class="row">
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new01.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new03.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new02.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new01.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new02.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="news-body">
							<a href="">
								<img src="/assets/images/new03.jpg" alt="">
								<div class="news__info">
									<h3>Chương trình khuyến mãi</h3>
									<div class="detail">
										Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. Chương trình khyến mãi được áp dụng từ 1/11 đến 20/11. 
									</div>
									<div class="time">01.11.2011</div>
								</div>
							</a>
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
