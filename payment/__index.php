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
	<div class="page-content contact-page">
		<div class="bg-head">
			<div class="container">
				<h1>Thông tin thanh toán</h1>
			</div>
		</div>
		<div class="container cart-page">
			<div class="contact">
                <div class="customer-form">
                    <h2>Quý khách vui lòng nhập thông tin</h2>
                    <form class="contact__form">
                        
                        <div class="form-cust-input">
                            <div class="row contact__form-row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="contact__ttl">
                                        <p>Họ và Tên</p>
                                        <span class="requid">*</span>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 contact__input">
                                    <div class="two-input">
                                        <input class="input required__check" type="text" placeholder="Họ" required="">
                                        <input class="input required__check" type="text" placeholder="Tên" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row contact__form-row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="contact__ttl">
                                        <p>Số điện thoại</p>
                                        <span class="requid">*</span>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 contact__input">
                                    <div class="two-input">
                                        <input class="input required__check" type="text" placeholder="Vui lòng nhập số điện thoại" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row contact__form-row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="contact__ttl">
                                        <p>Email</p>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 contact__input">
                                    <div class="two-input">
                                        <input class="input required__check" type="text" placeholder="Vui lòng địa chỉ Email">
                                    </div>
                                </div>
                            </div>




                            <div class="row contact__form-row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="contact__ttl">
                                        <p>Địa chỉ</p>
                                        <span class="requid">*</span>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 contact__input">
                                    <div class="contact__input-flex mb-2">
                                        <p>Tỉnh - Thành phố</p>
                                        <div class="arrow-sl-op">
                                            <select class="sel-opt">
                                                <option value="">Chọn Tỉnh thành</option>
                                                <option value="1">Thanh Hóa</option>
                                                <option value="2">Nghệ An</option>
                                                <option value="3">Hà Tĩnh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="contact__input-flex mb-2">
                                        <p>Quận - Huyện - Thị xã</p>
                                        <input class="input required__check p-locality p-street-address p-extended-address" type="text" placeholder="Chọn Quận - Huyện - Thị Xã" required="">
                                    </div>
                                    <div class="contact__input-flex mb-2">
                                        <p>Địa chỉ cụ thể</p>
                                        <input class="input required__check" type="text" placeholder="Vui lòng nhập địa chỉ cụ thể" required="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ec-RegisterRole__actions">
                            <div class="ec-off4Grid">
                                <div class="ec-off4Grid__cell">
                                    <button type="submit" class="ec-blockBtn--action">次へ</button>
                                    <a class="ec-blockBtn--cancel" href="https://fuwarii.com/cart">戻る</a>
                                </div>
                            </div>
                        </div>
                        
                    </form>

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
