<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$connect_skin_url.'/style.css">', 0);
?>
			<input type="hidden" name="theme_url" value="<?php echo G5_THEME_URL;?>">
			<div class="breadcrumb-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4>CONNECT</h4>
						</div>
						<div class="col-sm-6 hidden-xs text-right">
							<ol class="breadcrumb">
								<li><a href="<?php echo G5_URL?>">Home</a></li>
								<li>Connect</li>
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
				<div class="hidden-lg hidden-md">
				<?php
				$basename = basename($_SERVER['PHP_SELF']);
				echo menus_mobile_ex($basename);
				?>
				</div>
				<div class="row">
					<div class="col-md-12">
					<div class="divide30"></div>

					<div class="row">

					<!-- 현재접속자 목록 시작 { -->
						<ul>
						<?php
						for ($i=0; $i<count($list); $i++) {
							//$location = conv_content($list[$i]['lo_location'], 0);
							$location = $list[$i]['lo_location'];
							// 최고관리자에게만 허용
							// 이 조건문은 가능한 변경하지 마십시오.
							if ($list[$i]['lo_url'] && $is_admin == 'super') $display_location = "<a href=\"".$list[$i]['lo_url']."\">".$location."</a>";
							else $display_location = $location;

							$classes = array();
							if( $i && ($i % 4 == 0) ){
								$classes[] = 'box_clear';
							}
						?>
							<div class="col-md-3 margin-btm-20">
								<div class="quote dark">
									<blockquote>
										<p class="ko connects">
											<?php echo $display_location ?> - <?php echo $list[$i]['name'] ?>
										</p>
									</blockquote>                        
								</div>
								<div class="quote-footer text-right">
									<div class="quote-author-img">
										<?php echo get_member_profile_img($list[$i]['mb_id']); ?>
									</div>
									<h4><?php echo $list[$i]['num'] ?></h4>
								</div>
							</div><!--colored quote box col-->
						<?php
						}
						if ($i == 0)
							echo "<li class=\"empty_li\">현재 접속자가 없습니다.</li>";
						?>
						</ul>
					</div>
					<!-- } 현재접속자 목록 끝 -->

				</div>
			</div><!-- row -->
		</div>
		<div class="divide80"></div>

