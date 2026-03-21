<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_height = '100%';
?>
	<style>
	/*

	이미지들 사이즈들이 각기 다르고 텍스트 영역에 따라서 높이가 일정하지 않기 때문에

	높이 조절할 수 있게 개별로 스타일시트를 작성해두었습니다.
	아래 "좌측 버튼 높이" 와 "우측 버튼 높이" 를 수정하셔서 사용하시면 됩니다. px 값이나 % 값 둘다 사용가능합니다.
	
	*/
	.our-team-v-2 {
		background-color:#fff
	}
	.news-desc {
		background:#f9f9f9;
		border-left:1px solid #ddd;
		border-right:1px solid #ddd;
		border-bottom:1px solid #ddd;
		padding:5px 10px;
		height:130px
	}
	@media only screen and (max-width:320px) {
		.play-btn-01 {
			text-align:center
		}
	}
	@media only screen and (min-width:321px) and (max-width:1200px) {
		.play-btn-01 {
			text-align:center
		}
	}
	@media only screen and (min-width:1201px) {
		#item-carousel .owl-prev {
			position:absolute;
			font-size:20px;
			color:#000;
			left:0;
			top:37%;
			padding:10px;
			background-color:#fff;
			border:1px solid #ccc
		}
		#item-carousel .owl-next {
			position:absolute;
			font-size:20px;
			color:#000;
			right:0;
			top:37%;
			padding:10px;
			background-color:#fff;
			border:1px solid #ccc
		}
		.play-btn-01 {
			position:absolute;
			right:20px;
			bottom:10px;
			font-size:12px;
			z-index:99
		}
		.play-btn-01 a:focus {
			color:#32c5d2;
			text-decoration:none
		}
		.main-box a:hover {
			color:#333;
			text-decoration: none
		}
	}
	</style>



<div class="our-team-v-2 pb60">
	<div class="container" style="position: relative; ">

		<div class="center-heading">
			<h2 class="kos4"><?php echo $bo_subject;?></h2>
			<span class="center-line"></span>
		</div>

		<div id="item-carousel" class="owl-carousel owl-theme">
			<?php
			for ($i=0; $i<count($list); $i++) {

				$mb = sql_fetch("select * from {$g5['board_file_table']} where bo_table = '".$bo_table."' and wr_id = '".$list[$i]['wr_id']."'");
				if($mb['bf_file']) {
					$img = "<img src=".G5_URL."/data/file/".$bo_table."/".$mb['bf_file']." class='img-responsive' style='max-width:100%'>";
					$img_path = G5_URL."/data/file/".$bo_table."/".$mb['bf_file'];
				}else{
					//$img = "<img src=".G5_THEME_URL."/img/no-img.png class='img-responsive'>";
					$list[$i]['wr_content'];
					preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $list[$i]['wr_content'], $match);
					$img = $match[0];
					$img_path = $match[1];
				}

			?>
			<div class="item" style="padding:5px;">
				<div>
					<a href="<?php echo $list[$i]['href'] ?>" class="lt_img">

					    <!-- 기본 height 100% : 상단 $thumb_height 를 이용하여 이미지의 세로 사이즈를 지정할 수 있습니다. -->

						<div class="item-img-wrap" style="background-image: url('<?php echo $img_path?>'); max-width:100%; height:<?php echo $thumb_height?>;">
							<img src="<?php echo $img_path?>" height:<?php echo $thumb_height?>;>
							<div class="item-img-overlay">
								<span></span>
							</div>
						</div>                       
					</a><!--news link--> 
					<div class="news-desc text-left ko f12">
						<span>DATE : <?php echo $list[$i]['datetime2']?></span>
						<h4><a href="<?php echo $list[$i]['href'] ?>" class="lt_img ko f14"><?php echo strip_tags($list[$i]['subject'])?></a></h4>
						<?php echo strip_tags(cut_str($list[$i]['wr_content'],'30'));?>
					</div><!--news desc-->
				</div> 
			</div>
			<?php }  ?>
			<?php if (count($list) == 0) { //게시물이 없을 때  ?>
				게시물이 없습니다.
			<?php }  ?>
		</div>
		<div class="play-btn-01">
			<a href="javascript:void(0);" class="stop"><i class="fa fa-pause" aria-hidden="true"></i></a>&nbsp;&nbsp;
			<a href="javascript:void(0);" class="play"><i class="fa fa-play" aria-hidden="true"></i></a>
		</div>
	</div><!-- ./container -->
</div>
