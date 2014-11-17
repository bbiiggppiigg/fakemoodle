<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Teacher Home","teacher_home.tpl");
	$con = get_database_object();
	$query = "select * from courses where instructor = '".$_SESSION['id']."'";
	
	#echo $query;
	
	$result = mysql_query($query)or die(mysql_error());
	$rs = array();
	while($row = mysql_fetch_assoc($result)){
		
		$cid = $row['id'];
		#var_dump($result2);
		#echo mysql_num_rows($result2);
		#$row2 = mysql_fetch_assoc($result2);#['total'];
		$row['num'] = student_num($cid);
		array_push($rs, $row);
	}
	$tpl->assign("rs",$rs);
	$tpl->display("base.html");
?>