<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/custom.css">', 1);
?>
			<style>
			/* 전체영향 받는 css 별도 처리 */
			#fregister h2 {
				font-size: 18px;
			}
			.btn_submit {
				background: #3498db;
			}
			.btn_submit:hover {
				background: #3498db;
			}
			input, button, select, textarea, label {
				font-family: "굴림체", sans-serif;
				font-size: 12px;
				font-weight: 600;
			}
			input[type=checkbox], input[type=radio] {
				margin: 4px 0px 9px 4px;
				margin-top: 1px\9;
				line-height: normal;
			}
			.table01 {
				font-size: 12px;
				font-family: "굴림체";
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
						
						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
						  <div class="text-center bs-wizard-stepnum">회원가입</div>
						  <div class="progress"><div class="progress-bar"></div></div>
						  <a href="#" class="bs-wizard-dot"></a>
						</div>
						
						<div class="col-xs-4 bs-wizard-step disabled"><!-- complete -->
						  <div class="text-center bs-wizard-stepnum">가입성공</div>
						  <div class="progress"><div class="progress-bar"></div></div>
						  <a href="#" class="bs-wizard-dot"></a>
						 </div>
					</div>
					<!-- progress -->
					<div class="divide30"></div>

					<!-- 회원가입약관 동의 시작 { -->
					<div>

						<form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

						<div id="fregister_chkall">
							<label for="chk_all">전체선택</label>
							<input type="checkbox" name="chk_all"  value="1"  id="chk_all">

						</div>
						<section id="fregister_term">
							<h2><i class="fa fa-check-square-o" aria-hidden="true"></i> 회원가입약관</h2>
							<textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
							<fieldset class="fregister_agree">
								<label for="agree11">동의</label>
								<input type="checkbox" name="agree" value="1" id="agree11">
							</fieldset>
						</section>

						<section id="fregister_private">
							<h2><i class="fa fa-check-square-o" aria-hidden="true"></i> 개인정보처리방침안내</h2>
							<div>
								<table class="table01">
									<caption>개인정보처리방침안내</caption>
									<thead>
									<tr>
										<th>목적</th>
										<th>항목</th>
										<th>보유기간</th>
									</tr>
									</thead>
									<tbody>
									<tr valign="top">
										<td>이용자 식별 및 본인여부 확인</td>
										<td>아이디, 이름, 비밀번호</td>
										<td>회원 탈퇴 시까지</td>
									</tr>
									<tr valign="top">
										<td>고객서비스 이용에 관한 통지,<br>CS대응을 위한 이용자 식별</td>
										<td>연락처 (이메일, 휴대전화번호)</td>
										<td>회원 탈퇴 시까지</td>
									</tr>
									</tbody>
								</table>
							</div>

							<fieldset class="fregister_agree">
								<label for="agree21">동의</label>
								<input type="checkbox" name="agree2" value="1" id="agree21">
							</fieldset>
						</section>

						<div class="btn_confirm">
							<input type="submit" class="btn_submit" value="회원가입">
						</div>

						</form>

						<script>
						function fregister_submit(f)
						{
							if (!f.agree.checked) {
								alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
								f.agree.focus();
								return false;
							}

							if (!f.agree2.checked) {
								alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
								f.agree2.focus();
								return false;
							}

							return true;
						}
						
						jQuery(function($){
							// 모두선택
							$("input[name=chk_all]").click(function() {
								if ($(this).prop('checked')) {
									$("input[name^=agree]").prop('checked', true);
								} else {
									$("input[name^=agree]").prop("checked", false);
								}
							});
						});

						</script>
					</div>
					<!-- } 회원가입 약관 동의 끝 -->


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