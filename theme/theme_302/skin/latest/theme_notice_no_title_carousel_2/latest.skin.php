<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
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
		#latest-carousel-2 .owl-prev {
			position:absolute;
			font-size:20px;
			color:#000;
			bottom:0;
			left:-5px;
			padding:10px;
			background-color:#fff;
			border:1px solid #e1e1e1;
		}
		#latest-carousel-2 .owl-next {
			position:absolute;
			font-size:20px;
			color:#000;
			right:-3px;
			bottom:0px;
			padding:10px;
			background-color:#fff;
			border:1px solid #e1e1e1;
		}
		#latest-carousel-2 .owl-item .theme-notice-no-title-carousel:last-child{
			border-right:1px solid #e1e1e1;
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

    <ul id="latest-carousel-2" class="mt40 owl-carousel owl-theme">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="margin-bottom-30 no-padding item">
			<div class="theme-notice-no-title-carousel text-left">
            <?php
            //if ($list[$i]['icon_secret']) echo "<span class=\"lock_icon\"><i class=\"fa fa-lock\" aria-hidden=\"true\"></i></span> ";
            //if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
             //echo $list[$i]['icon_reply']." ";
            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
            if ($list[$i]['is_notice'])
                echo "<div class='theme-title ko f19'><strong>[공지] ".$list[$i]['subject']."</strong></div>";
            else
                echo "<div class='theme-title ko f19'><strong>".$list[$i]['subject']."</strong></div>";

			echo "</a>";
			
			
			echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\">";
			echo "<div class='theme-content'>";
			echo cut_str(strip_tags($list[$i]['wr_content']),'56','...');
            if ($list[$i]['comment_cnt'])
                echo "<span> + ".$list[$i]['comment_cnt']."</span>";
			echo "</div>";
			echo "</a>";

            ?>
			
				<div class="theme-footer">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>" class="btn btn-default btn-ico btn-lg ko">바로가기</a>

						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="line-height: 3.5;"><?php echo $list[$i]['datetime2']?></div>
					</div>
				</div>

			</div><!-- /theme-notice-no-title -->
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>

