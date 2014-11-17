<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Student Home","student_home.tpl");
	$con = get_database_object();
	$query = "select c.* from courses as c, register as r , students as s where s.id = '".$_SESSION['id']."' and s.id = r.sid and r.cid=c.id";
	
	#echo $query;
	
	$result = mysql_query($query)or die(mysql_error());
	$rs = array();
	while($row = mysql_fetch_assoc($result)){
		#print_r($row);
		/*
		$cid = $row['id'];
		#echo $cid;
		$query2 = "select count(*) as total from `register` where cid = $cid";
		echo $query2;
		$reuslt2 = mysql_query($query2) or die("GG".mysql_error());
		echo $result2;	
		$row2 = mysql_fetch_array($result2);
		echo $row2['total'];
		*/array_push($rs, $row);
	}
	$tpl->assign("rs",$rs);
	$tpl->display("base.html");
?>