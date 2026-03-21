<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/custom.css">', 1);
?>
<style>
.fa-check{
    font-size: 50px;
    line-height: 75px;
    color: #32c5d2;
}
#reg_result {
    padding: 30px 0 40px;
    text-align: center;
    background: #fff;
}
#reg_result h3 {
    font-size: 2em;
    margin: 20px 0 20px;
}
</style>
<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4>REGISTER</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Register</li>
				</ol>
			</div>
		</div>
	</div>
</div><!--breadcrumbs-->
<div class="divide80"></div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<!-- progress -->
			<div class="row bs-wizard" style="border-bottom:0;">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">약관동의</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-4 bs-wizard-step complete"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">회원가입</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>
                
                <div class="col-xs-4 bs-wizard-step active"><!-- complete -->
                  <div class="text-center bs-wizard-stepnum">가입성공</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                 </div>
            </div>
			<!-- progress -->

			<!-- 회원가입결과 시작 { -->
			<div id="reg_result">
				<i class="fa fa-check"></i>
				<h3>회원가입이 완료되었습니다. 감사합니다.</h3>
				
				<?php if (is_use_email_certify()) {  ?>
				<p>
					회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
					발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.
				</p>
				<div id="result_email">
					<span>아이디</span>
					<strong><?php echo $mb['mb_id'] ?></strong><br>
					<span>이메일 주소</span>
					<strong><?php echo $mb['mb_email'] ?></strong>
				</div>
				<p>
					이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.
				</p>
				<?php }  ?>

					<a href="<?php echo G5_URL ?>/" class="btn_submit">메인으로</a>

			</div>
			<!-- } 회원가입결과 끝 -->
		</div>
		<div class="col-md-3"></div>
	</div><!-- row -->
</div>
<div class="divide80"></div>

<script>
$(document).ready(function(){
	$('.breadcrumb-wrap').backstretch([
	  "<?php echo G5_THEME_URL?>/img/etc/sub-1.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-2.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-3.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-5.png",
	  "<?php echo G5_THEME_URL?>/img/etc/sub-6.png"
	], {
		fade: 750,
		duration: 4000
	});
});
</script>