<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// 선택삭제으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_admin) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$new_skin_url.'/style.css">', 0);
?>
			<input type="hidden" name="theme_url" value="<?php echo G5_THEME_URL;?>">
			<div class="breadcrumb-wrap">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h4>New</h4>
						</div>
						<div class="col-sm-6 hidden-xs text-right">
							<ol class="breadcrumb">
								<li><a href="<?php echo G5_URL?>">Home</a></li>
								<li>New</li>
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
					<!-- 전체게시물 검색 시작 { -->
					<fieldset id="new_sch">
						<form name="fnew" method="get">
						<?php echo $group_select ?>
						<label for="view" class="sound_only">검색대상</label>
						<select name="view" id="view">
							<option value="">전체게시물
							<option value="w">원글만
							<option value="c">코멘트만
						</select>
						<label for="mb_id" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
						<input type="text" name="mb_id" value="<?php echo $mb_id ?>" id="mb_id" required class="frm_input" size="40" placeholder="회원아이디만 검색 가능">
						<button type="submit" class="btn_submit"><i class="fa fa-search" aria-hidden="true"></i> 검색</button>
						
						</form>
						<script>
						/* 셀렉트 박스에서 자동 이동 해제
						function select_change()
						{
							document.fnew.submit();
						}
						*/
						document.getElementById("gr_id").value = "<?php echo $gr_id ?>";
						document.getElementById("view").value = "<?php echo $view ?>";
						</script>
					</fieldset>
					<!-- } 전체게시물 검색 끝 -->

					<!-- 전체게시물 목록 시작 { -->
					<form name="fnewlist" id="fnewlist" method="post" action="#" onsubmit="return fnew_submit(this);">
					<input type="hidden" name="sw"       value="move">
					<input type="hidden" name="view"     value="<?php echo $view; ?>">
					<input type="hidden" name="sfl"      value="<?php echo $sfl; ?>">
					<input type="hidden" name="stx"      value="<?php echo $stx; ?>">
					<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>">
					<input type="hidden" name="page"     value="<?php echo $page; ?>">
					<input type="hidden" name="pressed"  value="">

					<div class="tbl_head01 tbl_wrap">
						<table>
						<thead>
						<tr>
							<?php if ($is_admin) { ?>
							<th scope="col">
								<label for="all_chk" class="sound_only">목록 전체</label>
								<input type="checkbox" id="all_chk">
							</th>
							<?php } ?>
							<th scope="col">그룹</th>
							<th scope="col">게시판</th>
							<th scope="col">제목</th>
							<th scope="col">이름</th>
							<th scope="col">일시</th>
						</tr>
						</thead>
						<tbody>
						<?php
						for ($i=0; $i<count($list); $i++)
						{
							$num = $total_count - ($page - 1) * $config['cf_page_rows'] - $i;
							$gr_subject = cut_str($list[$i]['gr_subject'], 20);
							$bo_subject = cut_str($list[$i]['bo_subject'], 20);
							$wr_subject = get_text(cut_str($list[$i]['wr_subject'], 80));
						?>
						<tr>
							<?php if ($is_admin) { ?>
							<td class="td_chk">
								<label for="chk_bn_id_<?php echo $i; ?>" class="sound_only"><?php echo $num?>번</label>
								<input type="checkbox" name="chk_bn_id[]" value="<?php echo $i; ?>" id="chk_bn_id_<?php echo $i; ?>">
								<input type="hidden" name="bo_table[<?php echo $i; ?>]" value="<?php echo $list[$i]['bo_table']; ?>">
								<input type="hidden" name="wr_id[<?php echo $i; ?>]" value="<?php echo $list[$i]['wr_id']; ?>">
							</td>
							<?php } ?>
							<td class="td_group"><a href="./new.php?gr_id=<?php echo $list[$i]['gr_id'] ?>"><?php echo $gr_subject ?></a></td>
							<td class="td_board" style='width:15%;'><a href="./board.php?bo_table=<?php echo $list[$i]['bo_table'] ?>"><?php echo $bo_subject ?></a></td>
							<td><a href="<?php echo $list[$i]['href'] ?>" class="new_tit"><?php echo $list[$i]['comment'] ?><?php echo $wr_subject ?></a></td>
							<td class="td_name"><?php echo $list[$i]['name'] ?></td>
							<td class="td_date"><?php echo $list[$i]['datetime2'] ?></td>
						</tr>
						<?php }  ?>

						<?php if ($i == 0)
							echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>';
						?>
						</tbody>
						</table>
					</div>

					<?php if ($is_admin) { ?>
					<div class="sir_bw02 sir_bw">
						<button type="submit" onclick="document.pressed=this.title" title="선택삭제" class="btn_b01 btn"><i class="fa fa-trash-o" aria-hidden="true"></i><span class="sound_only">선택삭제</span></button>
					</div>
					<?php } ?>
					</form>


				</div>
			</div><!-- row -->
		</div>
		<div class="divide80"></div>


		<?php if ($is_admin) { ?>
		<script>
		$(function(){
			$('#all_chk').click(function(){
				$('[name="chk_bn_id[]"]').attr('checked', this.checked);
			});
		});

		function fnew_submit(f)
		{
			f.pressed.value = document.pressed;

			var cnt = 0;
			for (var i=0; i<f.length; i++) {
				if (f.elements[i].name == "chk_bn_id[]" && f.elements[i].checked)
					cnt++;
			}

			if (!cnt) {
				alert(document.pressed+"할 게시물을 하나 이상 선택하세요.");
				return false;
			}

			if (!confirm("선택한 게시물을 정말 "+document.pressed+" 하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다")) {
				return false;
			}

			f.action = "./new_delete.php";

			return true;
		}
		</script>
		<?php } ?>

		<?php echo $write_pages ?>
		<!-- } 전체게시물 목록 끝 -->

