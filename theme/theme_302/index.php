<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
	if(is_mobile()){
		include G5_THEME_PATH.'/mobile_popup.php'; // 팝업레이어
	}else{
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
}
?>


	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ Gnuboard 최신 버전 다운로드 및 설치방법
	http://ety.kr/board/ety_theme_manual/48

	▶ 카페24 접속하기
	http://ety.kr/board/ety_theme_manual/50


	▶ 카페24 호스팅 구매하기
	http://ety.kr/board/ety_theme_manual/49


	▶ 파일질라 ftp 설치 및 접속하기
	http://ety.kr/board/ety_theme_manual/51


	▶ 그누보드 설치하기
	http://ety.kr/board/ety_theme_manual/48


	▶ 테마 적용하기
	http://ety.kr/board/ety_theme_manual/37


	▶ 테마가 반응형이 안되는 경우
	http://ety.kr/board/ety_theme_manual/23


	▶ 1분 만에 레이아웃 쉽게 만드는 방법
	http://ety.kr/board/ety_theme_manual/26?page=2


	▶ pages 폴더 사용하는 방법
	http://ety.kr/board/ety_theme_manual/16?page=3


	▶ 질문답변게시판 안내
	http://ety.kr/board/qa



	▶ 각 서브페이지 이미지 위치 : /pages/img/etc/ 폴더내

	각 서브페이지의 배경은 /theme/테마이름/js/custom.js : 385번째줄 (breadcrumb-wrap 부분) 파일에서 한번에 수정이 가능합니다.
	만일 서브페이지 별로 배경을 다르게 하실 경우 custom.js 자바스크립트를 해당페이지에 복사하셔서
	원하는 배경을 설정하시면 됩니다.

	*/


	?>


	<!-------------------------- 

	좌측 플로팅 sns 배너를 사용하지 않을시에는 아래 두군데를 삭제하시면 됩니다. 상단과 하단쪽에 있습니다.
	
	<link href="<?php echo G5_THEME_URL?>/css/socialfloating.css" rel="stylesheet">
	<script src="<?php echo G5_THEME_URL ?>/js/jquery.socialfloating.js"></script>
	

	-------------------------->




	<!-------------------------- 슬라이드 시작 -------------------------->
	<div class="container no-padding"></div>
	<?php

	/* 
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 유튜브 슬라이드 크기조절 및 사용방법안내
	http://ety.kr/board/ety_theme_manual/34?page=2

	

	[유튜브동영상주소 사용팁]

	슬라이드의 세로사이즈는 이미지 사이즈와 함께 테마폴더/common.css 파일을 수정해주시면 됩니다.

	주소창에 있는 주소의 url 중에서
	https://www.youtube.com/watch?v=o70MzTHHNbI
	뒷부분 o70MzTHHNbI 값만 넣어주세요.


	* 테마폴더/js/script.js 맨 하단에서 슬라이드 속도를 조절 할 수 있습니다.



	*/

	// 유튜브주소값 수정하는 곳
	$yt_url = 'BLL-kW_TpT4';

	?>
	<section class="main-slider">


		<!-- 이미지 
		<div class="item image">
			<figure>
				<div class="slide-image slide-media" style="background-image:url('https://cjrsf2025.mycafe24.com/pages/img/etc/2.png');">
					<img data-lazy="https://cjrsf2025.mycafe24.com/pages/img/etc/2.png" class="image-entity" />
				</div>
				<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">add_ic_call</i> 5.4 유튜브 3단 슬라이드<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
			</figure>
		</div>
		-->
		
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/5sr90soUrrI?si=Pf3PCshvmTeKt6P5<?php echo $yt_url?>?version=3&vq=hd1080&t=160s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><div class="small-text mt30">충북인라인포털</div></figcaption>
		</div>

		<!-- 유튜브 
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/<?php echo $yt_url?>?version=3&vq=hd1080&t=160s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><i class="material-icons f60 icon_ve">live_tv</i> YOUTUBE<div class="small-text mt20">반응형으로 제작된 홈페이지 입니다.</div></figcaption>
		</div>
		-->
		<div class="item youtube">
			<iframe class="embed-player slide-media" src="https://www.youtube.com/embed/VGdQGNVQv-I?si=o1hf9XcItJHhwOc8<?php echo $yt_url?>?version=3&vq=hd1080&t=160s&enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&loop=1&start=1" frameborder="0" allowfullscreen></iframe> 
			<figcaption class="caption ko lh1-5"><div class="small-text mt30">충북인라인포털</div></figcaption>
		</div>
		
		<!-- mp4 동영상 
		<div class="item video">
			<video class="slide-video slide-media" loop muted preload="metadata">
			  <source src="<?php echo G5_THEME_URL?>/images/movie.mp4" type="video/mp4" allowfullscreen />
			</video>
			<p class="video-caption caption lh1-5 ko">
				영상은 포함되어 있지 않습니다.<BR>
				MP4 동영상 SLIDE
			</p>
		</div>
		-->

	</section>







	<!-------------------------- 탭메뉴 -------------------------->
	<div class="container mt40 mb40">
		<div class="row">
			<div class="col-md-12">
				
					<div class="tabs-container new-tab">
						<!-------------------------- tabs -------------------------->
						<ul class="nav nav-tabs row" style="margin:0px 0px;">
							<li class="active col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-001" aria-expanded="true"><i class="material-icons vcenter">local_library</i> 공지사항</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-004" aria-expanded="false"><i class="material-icons vcenter">event_note</i> 대회정보</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-003" aria-expanded="false"><i class="material-icons vcenter">notifications</i> 커뮤니티 공지사항</a></li>
							<li class="col-md-3 col-sm-6 col-xs-6 text-center no-padding">
								<a data-toggle="tab" href="#tab-002" aria-expanded="false"><i class="material-icons vcenter">event_note</i> 자유게시판 </a></li>
						</ul>

						<div class="tab-content" style="padding:0px; margin:0px;">
							<div id="tab-001" class="tab-pane fade in active ko">
								<!-- 
								동일한 최근게시물을 추가하시는 경우 테마폴더/js/custon.js 에도 슬라이드를 추가해주셔야 합니다.
								-->
								<?php echo latest('theme/theme_notice_no_title_carousel', 'CBRSF_notice', 6, 30);?>

							</div>
							<div id="tab-004" class="tab-pane fade ko">
								<!-- 대회정보 -->
								<?php echo latest('theme/theme_notice_no_title_carousel_2', 'CBRSF_meet', 6, 30);?>
								
							</div>
							<div id="tab-003" class="tab-pane fade ko">
								<!-- 커뮤니티 공지사항 -->
								<?php echo latest('theme/gallery_list_carousel_yt', 'community_notice', 6, 30);?>
							</div>

							<div id="tab-002" class="tab-pane fade ko">
								<!-- 최근갤러리 -->
								<?php echo latest('theme/gallery_list_carousel', 'community_free', 6, 40);?>
							</div>

						</div>
					</div><!-- ./End tabs -->

			</div>
		</div>
	</div>
	<!-------------------------- /텝메뉴 -------------------------->









	<!-------------------------- YOUR PARTNER -------------------------->

	<?php
	/*
	
	#=========================================#
	| 테마적용방법 동영상팁
	#=========================================# 

	▶ 수백개의 아이콘을 변경해보기
	http://ety.kr/board/ety_theme_manual/38?page=2

	▶ 아이콘박스에 링크걸기
	http://ety.kr/board/ety_theme_manual/24?page=2
	

	https://material.io/resources/icons/?style=outline
	위 주소에서 아이콘 이름만 교체하시면 바로 사용이 가능합니다.

	아래 예처럼 analytics 이나 phonelink_setup 처럼 이름만 변경해주세요.

	<i class="material-icons f60">analytics</i>
	<i class="material-icons f60">phonelink_setup</i>


	*/
	?>

	<!-------------------------- 아이콘박스 -------------------------->




	<!-------------------------- 아이콘박스 끝 -------------------------->






	<!-------------------------- 온라인문의 -------------------------->






	<!-------------------------- 갤러리 -------------------------->
	<?php
	/*

	[최근게시물 수정 팁영상]
	http://ety.kr/board/ety_theme_manual/47

	*/
	?>
	<?php echo latest('theme/basic_gallery', 'gallery', 8, 20);?>














	<!-------------------------- 하단 배너 -------------------------->
	<!-- 
	테마폴더/js/custom.js : 283줄
	-->
	<div class="container mb40">
		<div class="row">
			<div class="col-md-12">
				<div id="banner-carousel" class="owl-carousel owl-theme">
					<div class="item"><a href="https://koreaskate.or.kr/" target="_blank" rel="noopener noreferrer"><img src="https://cjrsf2025.mycafe24.com/pages/img/etc/krsf.png" alt="대한롤러스포츠연맹"></a></div>
					<div class="item"><a href="https://www.sports.or.kr/" target="_blank" rel="noopener noreferrer"><img src="https://cjrsf2025.mycafe24.com/pages/img/etc/sports.svg" alt="대한체육회"></a></div>
					<div class="item"><a href="http://www.cbsports.or.kr/" target="_blank" rel="noopener noreferrer"><img src="https://cjrsf2025.mycafe24.com/pages/img/etc/cb.gif" alt="충청북도체육회"></a></div>
					<div class="item"><a href="http://www.cjsports.or.kr/" target="_blank" rel="noopener noreferrer"><img src="https://cjrsf2025.mycafe24.com/pages/img/etc/cj.png" alt="청주시체육회"></a></div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------------- 하단 배너 끝 -------------------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>