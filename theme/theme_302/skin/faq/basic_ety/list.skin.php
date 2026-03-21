<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_PATH.'/SF.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$faq_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/css/custom.css">', 1);

//if ($admin_href)
//    echo '<div class="faq_admin"><a href="'.$admin_href.'" class="btn_admin btn">FAQ 수정</a></div>';
?>
<style>
p { margin:0px; }
#bo_cate #bo_cate_on {
    color: #3498db;
}
</style>
<input type="hidden" name="theme_url" value="<?php echo G5_THEME_URL;?>">
<div class="breadcrumb-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h4>FAQ</h4>
			</div>
			<div class="col-sm-6 hidden-xs text-right">
				<ol class="breadcrumb">
					<li><a href="<?php echo G5_URL?>">Home</a></li>
					<li>FAQ</li>
				</ol>
			</div>
		</div>
	</div>
</div><!--breadcrumbs-->
<div class="divide80 mobile-none"></div>
<div class="container">
	<div class="hidden-lg hidden-md">
	<?php
	$basename = basename($_SERVER['PHP_SELF']);
	echo menus_mobile_ex($basename);
	?>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="center-heading">
				<h2>FAQ</h2>
				<span class="center-line"></span>
			</div><!--center-heading-->
		</div>
	</div>
	<!-- FAQ 시작 { -->
	<?php
	if ($himg_src)
		echo '<div id="faq_himg" class="faq_img"><img src="'.$himg_src.'" alt=""></div>';

	// 상단 HTML
	echo '<div id="faq_hhtml">'.conv_content($fm['fm_head_html'], 1).'</div>';
	?>

	<fieldset id="faq_sch">
		<form name="faq_search_form" method="get">
		<input type="hidden" name="fm_id" value="<?php echo $fm_id;?>">
		<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
		<input type="text" name="stx" value="<?php echo $stx;?>" required id="stx" class="frm_input " size="15" maxlength="15">
		<button type="submit" value="검색" class="btn_submit"><i class="fa fa-search" aria-hidden="true"></i> 검색</button>
		</form>
	</fieldset>

	<!-- 분류 -->
	<?php
	if( count($faq_master_list) ){
	?>
	<nav id="bo_cate">
		<h2>자주하시는질문 분류</h2>
		<ul id="bo_cate_ul">
			<?php
			foreach( $faq_master_list as $v ){
				$category_msg = '';
				$category_option = '';
				if($v['fm_id'] == $fm_id){ // 현재 선택된 카테고리라면
					$category_option = ' id="bo_cate_on"';
					$category_msg = '<span class="sound_only">열린 분류 </span>';
				}
			?>
			<li><a href="<?php echo $category_href;?>?fm_id=<?php echo $v['fm_id'];?>" <?php echo $category_option;?> ><?php echo $category_msg.$v['fm_subject'];?></a></li>
			<?php
			}
			?>
		</ul>
	</nav>
	<?php } ?>
	<div class="row">
		<div class="col-md-6">
			<div class="panel-group" id="accordion">
				<?php // FAQ 내용
				if( count($faq_list) ){
				?>
						<?php
						$i = "1";
						foreach($faq_list as $key=>$v){
							if(empty($v))
								continue;
						?>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#<?=$i?>">
										<?php echo conv_content($v['fa_subject'], 1); ?>
									</a>
								</h4>
							</div>
							<div id="<?=$i?>" class="panel-collapse collapse">
								<div class="panel-body">
								<?php echo conv_content($v['fa_content'], 1); ?>
								</div>
							</div>
						</div>

						<?php
						$i++;
						}//foreach
						?>
				<?php }//if?>
			</div><!-- /panel-group -->
		<?php echo get_paging($page_rows, $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>
		</div><!--/collapse col-->
		<div class="col-md-6">
			<!-- 유튜브 자동재생을 멈출경우 autoplay=0 으로 수정해주세요. -->
			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Stl9jwWq4T4?autoplay=1&controls=0&loop=1&showinfo=0"></iframe>
			</div>
		</div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->
<div class="divide60"></div>
<?php
// 하단 HTML
echo '<div id="faq_thtml">'.conv_content($fm['fm_tail_html'], 1).'</div>';
if ($timg_src)
    echo '<div id="faq_timg" class="faq_img"><img src="'.$timg_src.'" alt=""></div>';
?>
<!-- } FAQ 끝 -->
<!--
<?php
if ($admin_href)
    echo '<div class="faq_admin"><a href="'.$admin_href.'" class="btn_admin btn">FAQ 수정</a></div>';
?>
-->
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
