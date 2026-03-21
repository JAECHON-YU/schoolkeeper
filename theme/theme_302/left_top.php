<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<input type="hidden" name="theme_url" value="<?php echo G5_THEME_URL;?>">
<div class="hidden-sm hidden-xs sub-menus ko">
<?php
	$ck = sql_fetch("SELECT count(me_code) as cnt  FROM {$g5['menu_table']} WHERE LENGTH(me_code) = '4'");
	$cnts = $ck['cnt'];
	if($cnts == '0'){
		if(!empty($_GET["bo_table"])){
			$basename = $_GET["bo_table"];
			echo menus_pc_one($basename);
		}elseif(!empty($_GET["co_id"])){
			$basename = $_GET["co_id"];
			echo menus_pc_one($basename);
		}else{
			$basename = basename($_SERVER['PHP_SELF']);
			echo menus_pc_one($basename);
		}
	}else{

		if(!empty($_GET["bo_table"])){
			$basename = $_GET["bo_table"];
			echo menus_pc($basename);
		}elseif(!empty($_GET["co_id"])){
			$basename = $_GET["co_id"];
			echo menus_pc($basename);
		}else{
			$basename = basename($_SERVER['PHP_SELF']);
			echo menus_pc($basename);
		}
	}
?>
</div>