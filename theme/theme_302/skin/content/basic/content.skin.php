<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<style>
.ctt_admin{ display: none; }
</style>
			<div class="breadcrumb-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4 class="ko"><?php echo $g5['title']; ?></h4>
						</div>
						<div class="col-sm-6 hidden-xs text-right">
							<ol class="breadcrumb">
								<li><a href="<?php echo G5_URL?>">Home</a></li>
								<li class="ko"><?php echo $g5['title']; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div><!--breadcrumbs-->
			<div class="container-fluid hidden-sm hidden-xs top-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-1 home-btn"><a href="<?php echo G5_URL?>"><i class="fa fa-home f36" aria-hidden="true"></i></a></div>
						<div class="col-sm-4"><?php include_once(G5_THEME_PATH.'/left_top.php');?></div>
						<div class="col-sm-7">
							
						</div><!--sidebar col end-->
					</div>
				</div><!-- ./container -->
			</div><!-- ./container-fulid -->
			<div class="divide80 mobile-none"></div>
			<div class="container">
				<div class="row">
					<!--<div class="col-sm-3" style="overflow-y: auto;">-->
					<div class="col-sm-3">
						<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
					</div>
					<div class="col-md-9">
					<article id="ctt" class="ctt_<?php echo $co_id; ?>" style="padding:0;margin:0px;">
						<div id="ctt_con">
							<?php echo $str; ?>
						</div>
					</article>

				</div>
			</div><!-- row -->
		</div>
		<div class="divide80"></div>
