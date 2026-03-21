<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/custom.css">', 1);
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h2 span { font-size:12px; color:#ccc; }
#sns_login {
    border: 0;
    margin-top: 15px;
    padding: 20px 50px 50px;;
    border-top: 1px solid #ffffff;
}
</style>
<body id="backgrounds">
<div class="login-title"></div>
<!-- Form Module-->
<div class="module form-module">
    <form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
    <input type="hidden" name="url" value="<?php echo $login_url ?>">
	<div class="form">
		<h2>LOGIN - <span><?php echo $config['cf_title'] ?></span></h2>
			<label for="login_id" class="sound_only">회원아이디<strong class="sound_only"> 필수</strong></label>
			<input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="Username">
			<label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
			<input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="Password">
			<button type='submit' class='btn_submit'>Login</button>
			<div class="auto_login">
				<input type="checkbox" name="auto_login" id="login_auto_login">
				<label for="login_auto_login">자동로그인</label>		
			</div>
	</div>
	<div class="cta">
		<a href="<?php echo G5_BBS_URL ?>/password_lost.php" target="_blank" id="login_password_lost">아이디, 비밀번호 찾기</a> | 
		<a href="./register.php">회원가입</a>
	</div>

		<div>
			<?php
			// 소셜로그인 사용시 소셜로그인 버튼
			@include_once(get_social_skin_path().'/social_login.skin.php');
			?>
		</div>

	</form>
</div>


<div style="margin-bottom:150px;"></div>

</body>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->

<script src="<?php echo G5_THEME_URL ?>/js/jquery.min.js"></script>  
<script src="<?php echo G5_THEME_URL ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="<?php echo G5_THEME_URL ?>/js/jquery.backstretch.js"></script>


<!-- 로그인 배경 이미지 교체 주소 -->
<script type="text/javascript">
	$.backstretch([
		"<?php echo G5_THEME_URL?>/img/bg/bg-1.jpg",
		"<?php echo G5_THEME_URL?>/img/bg/bg-2.jpg",
		"<?php echo G5_THEME_URL?>/img/bg/bg-3.jpg",
		], {
			fade: 1000,
			duration: 3000
		});
</script>