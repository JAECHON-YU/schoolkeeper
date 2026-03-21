<?php
include_once('./_common.php');
error_reporting(E_ALL);
ini_set("display_errors", 0);
if($_POST["mode"] == 'se'){
	$menu = trim($_POST['menu']);
	//$arr = array();
	$sql = "select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and  CHAR_LENGTH(me_code) = '4' and me_use = '1' order by me_order asc";
	$query = sql_query($sql);
	while($row = sql_fetch_array($query)){
		if(isset($row['me_link'])){
			$arr .= "<option value=".$row['me_link'].">".$row['me_name']."</option>";
		}
	}
	
	if($arr){
		echo $arr;
	}else{
		$sub = sql_fetch("select * from {$g5['menu_table']} where substring(me_code,1,2) = '$menu' and  CHAR_LENGTH(me_code) = '2' and me_use = '1' order by me_order asc");
		echo 'url|'.$sub['me_link'].'|'.$sub['me_target'];
	}
}
?>

