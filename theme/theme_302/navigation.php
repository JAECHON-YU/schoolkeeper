<link href="<?php echo G5_THEME_URL ?>/css/selectric.css" rel="stylesheet" type="text/css" media="screen">


		<div class="top-bar-dark">            
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">

						<!-------------------------- 상단 sns 주소 수정 -------------------------->
                        <div class="top-bar-socials">
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-instagram">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
							<a href="#" target="_blank" class="social-icon-sm si-dark si-g-plus si-dark-round">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#" target="_blank" class="social-icon-sm si-dark si-g-plus si-dark-round">
								<i class="fa fa-youtube"></i>
								<i class="fa fa-youtube"></i>
							</a>
                        </div>
						<!-------------------------- ./ 상단 sns 주소 수정 -------------------------->
                    </div>
                    <div class="col-sm-9 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> <a href="mailto:coupe3@naver.com">coupe3@naver.com</a></li>
                            <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i><a href="tel:01050057024">010-5005-7024</li>
							<?php if($is_member){?>
							<?php if ($is_admin) {  ?>
							<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
							<?php }  ?>	
							<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-edit"></i> 정보수정</a></li>
							<li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out"></i> 로그아웃</a></li>
							<?php }else{?>
							<li><a href="<?php echo G5_BBS_URL?>/login.php"><i class="fa fa-lock"></i> 로그인</a></li>
							<li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user"></i> 회원등록</a></li>
							<?php }?>
							<li><a href="<?php echo G5_BBS_URL ?>/faq.php"> 자주묻는질문</a></li>
							<li class="ko_gul"><a href="<?php echo G5_URL ?>/board_qa/write"> 1:1문의</a></li>
							<li><a class="topbar-icons" href="#"><span><i class="fa fa-search top-search"></i></span></a></li>
                        </ul>
						<!-- search -->
                        <div class="search">
							<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" >
								<input type="hidden" name="sfl" value="wr_subject||wr_content">
								<input type="hidden" name="sop" value="and">
                                <input type="text" name="stx" id="sch_stx" class="form-control" autocomplete="off" placeholder="Search">
                                <span class="search-close"><i class="fa fa-times"></i></span>
								

                            </form>
							<script>
							function fsearchbox_submit(f)
							{
								if (f.stx.value.length < 2) {
									alert("검색어는 두글자 이상 입력하십시오.");
									f.stx.select();
									f.stx.focus();
									return false;
								}

								// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
								var cnt = 0;
								for (var i=0; i<f.stx.value.length; i++) {
									if (f.stx.value.charAt(i) == ' ')
										cnt++;
								}

								if (cnt > 1) {
									alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
									f.stx.select();
									f.stx.focus();
									return false;
								}

								return true;
							}
							</script>
                        </div>
                   </div>
                </div>
            </div>
        </div><!--top-bar-dark end here-->




        <!-- 네비게이션 시작 세로 메뉴 -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

					<!-- logo -->
					<a href="<?php echo G5_URL?>"><img src="<?php echo G5_THEME_URL?>/img/logo7.png" class="img-responsive m-logo" style="width:200px;"></a>

					<!-- 
					텍스트로고
					<a class="navbar-brand" href="<?php echo G5_URL?>">SOFTZONE</a>
					-->

                </div>

				<div class="navbar-collapse collapse" id="slide-navbar-collapse">
					<div class="navi-content">
					<!-------------------------- 모바일 추가 메뉴 -------------------------->
					<div class="mobile-nav mobile-sns hidden-lg hidden-md">
                        <div class="top-bar-socials">
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-instagram">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#" target="_blank" class="social-icon-sm si-dark si-dark-round si-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>

							<a href="#" target="_blank" class="social-icon-sm si-dark si-g-plus si-dark-round">
								<i class="fa fa-youtube"></i>
								<i class="fa fa-youtube"></i>
							</a>
                        </div>
						<!-- close -->
						<div class="mobile-close  hidden-lg hidden-md">
							<i class="fa fa-times" data-toggle="slide-collapse" data-target="#slide-navbar-collapse"></i>
						</div>
					</div><!-- ./mobile-nav -->
					<div class="mobile-login hidden-lg hidden-md">
					<?php if($is_member){?>

						<!-- 아래 내용 대신 아웃로그인을 사용해서 꾸미셔도 됩니다. 회사용도 이기 때문에 간단히 만듬 -->
						<?php
						/*
						<?php echo outlogin(); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
						*/
						?>
						<span class="ko color-white margin-left-20"><?php echo $member['mb_name']?>님 환영합니다.</span>
						<p class="margin-left-20">
							<a class="color-white ko f12" href="<?php echo G5_BBS_URL?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a>
						</p>

					<?php }else{?>

						<a href="<?php echo G5_URL?>/bbs/login.php" class="btn btn-theme-bg">Login</a>
						<a href="<?php echo G5_URL?>/bbs/register.php" class="btn btn-theme-dark">회원가입</a>

					<?php } ?>
					</div>
					<!-------------------------- ./모바일 추가 메뉴 -------------------------->
                    <ul class="nav navbar-nav navbar-right">
						<?php
						$sql = " select *
									from {$g5['menu_table']}
									where me_use = '1'
									  and length(me_code) = '2'
									order by me_order, me_id ";
						$result = sql_query($sql, false);
						$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
						$menu_datas = array();
						for ($i=0; $row=sql_fetch_array($result); $i++) {
							$menu_datas[$i] = $row;

							$sql2 = " select *
										from {$g5['menu_table']}
										where me_use = '1'
										  and length(me_code) = '4'
										  and substring(me_code, 1, 2) = '{$row['me_code']}'
										order by me_order, me_id ";
							$result2 = sql_query($sql2);
							for ($k=0; $row2=sql_fetch_array($result2); $k++) {
								$menu_datas[$i]['sub'][$k] = $row2;
							}
						}
						$i = 0;
						foreach( $menu_datas as $row ){
							if( empty($row) ) continue; 
						?>
					<?php if(isset($row['sub']['0'])) { ?>
						<li class="dropdown">
							<a href="<?php echo $row['me_link']; ?>" class="dropdown-toggle" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
							<a href="#" class="dropdown-sub" data-toggle="dropdown"><i class="fa fa-angle-down"></i></a>
									<!-- 서브 -->
								<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
									<?php
									// 하위 분류
									$k = 0;
									foreach( (array) $row['sub'] as $row2 ){

									if( empty($row2) ) continue; 

									?>
									<li class="ko_15_black"><a tabindex="-1" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"> <?php echo $row2['me_name'] ?></a></li>

									<?php
									$k++;
									}   //end foreach $row2

									if($k > 0)
									echo '</ul>'.PHP_EOL;
									?>
					<?php }else{?>
						<li class="nav-item">
						<a class="nav-link" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
						</li>
					<?php }?>
				</li>
				
				<?php
				$i++;
				}   //end foreach $row

				if ($i == 0) {  ?>
					<li class="gnb_empty">
						메뉴 준비 중입니다.
						<?php if ($is_admin) { ?> <strong>관리자모드 &gt; 환경설정 &gt; 메뉴설정에서 설정하실 수 있습니다.</strong><?php } ?>
					</li>
				<?php } ?>


			</ul>

					<!-- 바로가기 메뉴 -->
					<div class="mobile-sbox hidden-lg hidden-md">
						<a href="<?php echo G5_URL?>">
							<div class="mobile-icon ko">
								<span class="material-icons">home</span><br />
								홈
							</div>
						</a>
						<a href="<?php echo G5_URL ?>/board_qa/write">
							<div class="mobile-icon ko">
								<span class="material-icons">support_agent</span><br />
								1:1문의
							</div>
						</a>
						<a href="<?php echo G5_BBS_URL ?>/faq.php">
							<div class="mobile-icon ko">
								<span class="material-icons">help_outline</span><br />
								FAQ
							</div>
						</a>
					</div>
					<!-- ./바로가기 메뉴 -->
				</div><!-- ./navi-content -->

			</div><!--/.nav-collapse -->
		</div><!--container-->
	</div><!--네비게이션 끝-->



