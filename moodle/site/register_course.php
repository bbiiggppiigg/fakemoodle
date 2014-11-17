<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("register_user","register_course.tpl");
	$con =get_database_object();
	$msg = "";
	if(isset($_POST['id'])){
		#echo $_POST['id'];
		$query = "Insert into register values(".$_SESSION['id'].",".$_POST['id'].")";
		#echo $query;
		$result = mysql_query($query)or die("GG".mysql_error());
		$msg = "Register Succeed!";
	}

	$query = "select * from courses where id not in (select cid from register where sid = {$_SESSION['id']})";
	
	#echo $query;
	$result = mysql_query($query) or die("GG".mysql_error());
	$rs = array();
	while($row=mysql_fetch_assoc($result)){
		array_push($rs,$row);
	}
	$tpl->assign("msg",$msg);
	$tpl->assign("rs",$rs);
	$tpl->display("base.html");
?>