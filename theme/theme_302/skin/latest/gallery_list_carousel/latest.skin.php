<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 360;
$thumb_height = 250;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


	<style>
	/*

	이미지들 사이즈들이 각기 다르고 텍스트 영역에 따라서 높이가 일정하지 않기 때문에

	높이 조절할 수 있게 개별로 스타일시트를 작성해두었습니다.
	아래 "좌측 버튼 높이" 와 "우측 버튼 높이" 를 수정하셔서 사용하시면 됩니다. px 값이나 % 값 둘다 사용가능합니다.
	
	*/

	@media only screen and (max-width:320px) {

	}
	@media only screen and (min-width:321px) and (max-width:1200px) {

	}
	@media only screen and (min-width:1201px) {
		#latest-carousel-gallery .owl-prev {
			position:absolute;
			font-size:20px;
			color:#000;
			bottom:0;
			left:-5px;
			padding:10px;
			background-color:#fff;
			border:1px solid #e1e1e1;
		}
		#latest-carousel-gallery .owl-next {
			position:absolute;
			font-size:20px;
			color:#000;
			right:-3px;
			bottom:0px;
			padding:10px;
			background-color:#fff;
			border:1px solid #e1e1e1;
		}

		.main-box a:hover {
			color:#333;
			text-decoration: none
		}
	}
	</style>

	<ul id="latest-carousel-gallery" class="owl-carousel owl-theme mt40">
		<?php
		for ($i=0; $i<$list_count; $i++) {
		$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

		if($thumb['src']) {
			$img = $thumb['src'];
		} else {
			
			$list[$i]['wr_content'];
			preg_match("/<img[^>]*src=[\"']?([^>\"']+)[\"']?[^>]*>/i", $list[$i]['wr_content'], $match);
			$img = $match[1];
		}
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" data-src="'.$img.'"  data-src-retina="'.$img.'" class="owl-lazy img-responsive" style="width:100%;height:'.$thumb_height.'px">';
		?>
			<li class="mb40">
				<div class="hover_container_2">
					<?php echo $img_content;?>
					<a href="<?php echo $list[$i]['href'] ?>">
						<div class="overlay">
							<div class="hover_text_2">
								<h2 class="ko"><?php echo $list[$i]['subject'] ?></h2>
								<p class=" ko"><?php echo cut_str(strip_tags($list[$i]['wr_content']),'60','...') ?></p>
							</div>
						</div>
					</a>
				</div>
			</li> 
		<?php }  ?>
		<?php if ($list_count == 0) { //게시물이 없을 때  ?>
		<li class="empty_li">게시물이 없습니다.</li>
		<?php }  ?>
	</ul>






