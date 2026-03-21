<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

function menus($page){
	
	global $g5;

	if($page)
	{
		
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$first_title = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$first_title = $first_title['me_name'];
		$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		$i = '1';
		echo '<div class="sidebar-box">';
		echo '<ul class="list-unstyled cat-list">';
		echo '<li class="li-first"><h4 class="category-menu ko">'.$first_title.'</h4></li>';
		while($row = sql_fetch_array($query)){
			if(strlen($row['me_code']) == '4'){
				if($me_code){
					if($me_code == $row['me_code']){
						$active = 'active';
					}else{
						$active = '';
					}
				}
				echo '<li class="ko"> <a href="'.$row['me_link'].'" target="_'.$row['me_target'].'" class='.$active.'>'.$row['me_name'].'</a> <i class="fa fa-angle-right"></i></li>';
			}
			$i++;
		}//while
		echo '</ul>';
		echo '</div>';
	}
}
function menus_mobile($page){

	global $g5;

	if($page)
	{
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$menu_name = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$mname = $menu_name['me_name'];
		echo '<div class="row">';
		echo '<div class="col-xs-6 no-padding">';
		echo '<select class="menus-mobile" id="select-3">';
		$sql = "select * from {$g5['menu_table']} where CHAR_LENGTH(me_code) = '2' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		while($row = sql_fetch_array($query)){
			if(trim($mname) == trim($row['me_name'])){ echo "<option value=".$row['me_code']." selected>".$row['me_name']."</option>"; }else{ echo "<option value=".$row['me_code'].">".$row['me_name']."</option>";}
		}
		echo '</select>';
		echo '</div>';

		$sql2 = " select count(me_id) as cnt from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$menu}' ";
		$ck = sql_fetch($sql2);
		if($ck['cnt'] == '0'){
			echo "<style> .ds{display:none;} </style>";
		}

		echo '<div class="col-xs-6 no-padding">';
		echo '<div class="ds">';
		echo '<select class="menus-mobile" id="select-4" onchange="if(this.value) location.href=(this.value)">';
		$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and CHAR_LENGTH(me_code) = '4' and me_use='1' order by me_order asc";
		$sub_query = sql_query($sql);
		while($sub = sql_fetch_array($sub_query)){
			if($sub['me_name'] == $mm['me_name']){ echo "<option selected>".$sub['me_name']."</option>"; }else{ echo "<option value=".$sub['me_link'].">".$sub['me_name']."</option>";
			}
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}
// 전체중 1차 카테고리만 있는 경우
function menus_mobile_one($page){

	global $g5;

	if($page)
	{
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$menu_name = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$mname = $menu_name['me_name'];
		echo '<div class="row">';
		echo '<div class="col-xs-12 col-sm-12 no-padding">';
		echo '<select class="menus-mobile" id="select-4">';
		$sql = "select * from {$g5['menu_table']} where CHAR_LENGTH(me_code) = '2' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		while($row = sql_fetch_array($query)){
			if(trim($mname) == trim($row['me_name'])){ echo "<option value=".$row['me_code']." selected>".$row['me_name']."</option>"; }else{ echo "<option value=".$row['me_code'].">".$row['me_name']."</option>";}
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
	}
}


function menus_mobile_ex($page){

	global $g5;

	if($page)
	{
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$menu_name = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$mname = $menu_name['me_name'];
		echo '<div class="row">';
		echo '<div class="col-xs-6 no-padding">';
		echo '<select class="menus-mobile" id="select-3">';
		$sql = "select * from {$g5['menu_table']} where CHAR_LENGTH(me_code) = '2' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		while($row = sql_fetch_array($query)){
			if(trim($mname) == trim($row['me_name'])){ echo "<option value=".$row['me_code']." selected>".$row['me_name']."</option>"; }else{ echo "<option value=".$row['me_code'].">".$row['me_name']."</option>";}
		}
		echo '</select>';
		echo '</div>';
		echo '<div class="col-xs-6 no-padding">';
		echo '<select class="menus-mobile" id="select-4" onchange="if(this.value) location.href=(this.value)">';
		$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and  CHAR_LENGTH(me_code) = '4' and me_use='1' order by me_order asc";
		$sub_query = sql_query($sql);
		while($sub = sql_fetch_array($sub_query)){
			if($sub['me_name'] == $mm['me_name']){ echo "<option selected>".$sub['me_name']."</option>"; }else{ echo "<option value=".$sub['me_link'].">".$sub['me_name']."</option>";
			}
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
	}
}

// 메뉴그룹
function menu_number($number,$mn){

	global $g5;

	if($mn)
		$me_code = $mn;
	if(!$number)
		$number = '10';

	$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$number' and me_use='1'";
	$query = sql_query($sql);
	$i = '1';
	echo '<div class="sidebar-box">';
	echo '<ul class="list-unstyled cat-list">';
	while($row = sql_fetch_array($query)){
		if($i == '1'){
			echo '<li class="li-first"><h4 class="category-menu ko">'.$row['me_name'].'</h4></li>';
			$code = $row['me_code'];
		}else{
			// 관리자 - 메뉴설정 코드
			if($me_code){
				if($me_code == $row['me_code']){
					$active = 'active';
				}else{
					$active = '';
				}
			}
			echo '<li class="ko"> <a href="'.$row['me_link'].'" target="_'.$row['me_target'].'" class='.$active.'>'.$row['me_name'].'</a> <i class="fa fa-angle-right"></i></li>';
		}
		$i++;
	}//while
	echo '</ul>';
	echo '</div>';
}

function menus_pc($page){

	global $g5;

	if($page)
	{
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$menu_name = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$mname = $menu_name['me_name'];
		echo '<div class="row">';
		echo '<div class="col-xs-6 no-padding">';
		echo '<select class="menus-pc" id="select-1">';
		$sql = "select * from {$g5['menu_table']} where CHAR_LENGTH(me_code) = '2' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		while($row = sql_fetch_array($query)){
			if(trim($mname) == trim($row['me_name'])){ echo "<option value=".$row['me_code']." selected>".$row['me_name']."</option>"; }else{ echo "<option value=".$row['me_code'].">".$row['me_name']."</option>";}
		}
		echo '</select>';
		echo '</div>';

		// 2차 메뉴가 없는 경우
		$sql2 = " select count(me_id) as cnt from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$menu}' ";
		$ck = sql_fetch($sql2);
		if($ck['cnt'] == '0'){
			echo "<style> .ds{display:none;} </style>";
		}

		echo '<div class="col-xs-6 no-padding">';
		echo '<div class="ds">';
		echo '<select class="menus-pc" id="select-2" onchange="if(this.value) location.href=(this.value)">';
		$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and  CHAR_LENGTH(me_code) = '4' and me_use='1' order by me_order asc";
		$sub_query = sql_query($sql);
		while($sub = sql_fetch_array($sub_query)){
			if($sub['me_name'] == $mm['me_name']){ echo "<option selected>".$sub['me_name']."</option>"; }else{ echo "<option value=".$sub['me_link'].">".$sub['me_name']."</option>";
			}
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
}
function menus_pc_one($page){

	global $g5;

	if($page)
	{
		$sql = "select * from {$g5['menu_table']} where me_link LIKE '%$page' and me_use='1'";
		$mm = sql_fetch($sql);
		$me_code =  $mm['me_code'];
		$menu = substr($me_code,0,2);
		$menu_name = sql_fetch("select me_name from {$g5['menu_table']} where me_code = '$menu' and me_use='1'");
		$mname = $menu_name['me_name'];
		echo '<div class="row">';
		echo '<div class="col-xs-12 col-sm-12 no-padding">';
		echo '<select class="menus-pc" id="select-1">';
		$sql = "select * from {$g5['menu_table']} where CHAR_LENGTH(me_code) = '2' and me_use='1' order by me_order asc";
		$query = sql_query($sql);
		while($row = sql_fetch_array($query)){
			if(trim($mname) == trim($row['me_name'])){ echo "<option value=".$row['me_code']." selected>".$row['me_name']."</option>"; }else{ echo "<option value=".$row['me_code'].">".$row['me_name']."</option>";}
		}
		echo '</select>';
		echo '</div>';
		echo '</div>';
	}
}
?>