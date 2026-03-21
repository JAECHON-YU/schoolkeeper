<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_THEME_PATH.'/SF.lib.php');
?>

<?php
/*

************************
* 읽어 보신후에 삭제하셔도 됩니다.
************************

Company : http://www.softzone.co.kr
About   : 솔루션 (솔루션개발, 홈페이지, 템플릿, 그누보드 테마)
Email   : Softzonecokr@Naver.com
Phone   : (82)10-5879-9928 (010-5879-9928)
Name    : 이종오(Developer) , Lee Jong o 
Skill   : 파이썬 , PHP , ASP , ASP.NET , C# , SQL , JAVASCRIPT(JQUERY), HTML , HTML5 ,CSS , CSS3 , AJAX Skill , NODEJS

license : 한개의 사이트에 한개만 적용 가능합니다. (1 site,1 copy)
		  두개의 도메인이면 2개를 구매하셔야 합니다. 
		  서브도메인도 두개의 도메인으로 취급합니다.
		  (예 : sub.softzone.co.kr , www.softzone.co.kr)

		  한개의 사이트 라면 여러개의 도메인을 붙여서 사용할 수는 있습니다.
		  사이트를 복제해서 사용하시면 라이선스 위반이 됩니다.

		  * 개별적으로 추출해서 사용하시면 안됩니다.
		  * 배포 또는 재배포 하시면 안됩니다.
		  * 납품용으로 사용가능하나 한개의 도메인에만 사용가능하며 추가로 설치시 재 구매하여야 합니다.

		  * 위 사항을 어길시에는 법적 책임이 따르거나 손해배상이 청구됩니다.

  
Contact : 홈페이지 템플릿 또는 테마의 모든 저작권은 소프트존에 있습니다.
Version : ver 5.0(LAST)
부트스트랩3 + CSS 를 동시에 사용할 수 있게 제작되어 있습니다.

*/
?>


        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <link href="<?php echo G5_THEME_URL ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="<?php echo G5_THEME_URL ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- flex slider css -->
        <link href="<?php echo G5_THEME_URL ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="<?php echo G5_THEME_URL ?>/css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL ?>/css/rev-style.css">
        <!--owl carousel css-->
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo G5_THEME_URL ?>/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="<?php echo G5_THEME_URL ?>/css/yamm.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo G5_THEME_URL ?>/css/bootstrap-select.css">
        <!-- slide -->
		<link href="<?php echo G5_THEME_URL ?>/slide/responsive-slider.css" rel="stylesheet">
        <!--cube css-->
        <link href="<?php echo G5_THEME_URL ?>/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
		<!-- chart -->
		<link href="<?php echo G5_THEME_URL ?>/morris/morris.css" rel="stylesheet" type="text/css" media="screen">
        <!-- custom css-->
        <link href="<?php echo G5_THEME_URL ?>/css/style_aqours.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo G5_THEME_URL?>/css/effects.min.css" rel="stylesheet">

		<!-- 좌측에 고정되어 있는 메뉴를 사용하지 않을지 아래 스타일시트를 제거하시거나 주석처리 해주세요. -->
		<link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">


		<link href="<?php echo G5_THEME_URL ?>/css/common.css" rel="stylesheet" type="text/css" media="screen">
		<link href="<?php echo G5_THEME_URL?>/css/slick.min.css" rel="stylesheet">
		<link href="<?php echo G5_THEME_URL?>/css/jquery.bxslider.min.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

	<?php
	include_once(G5_THEME_PATH.'/navigation.php');

	// head / navigation / tail / footer 이처럼 4개로 분할되어 있습니다.

	?>