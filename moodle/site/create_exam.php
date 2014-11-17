<?php
	include("lib/database.php");
	include("lib/handler.php");
	$tpl = new Handler("Create Assignment","create_event.tpl");
	$msg ="";
	$cid = $_GET['cid'];
	$con = get_database_object();
	if($_POST['event_name']){
		#echo $_POST['due_date'];
		$due_date = $_POST['due_date'];
		$due_date[10]=' ';
		$due_date[16]=':';
		$due_date[17]='0';
		$due_date[18]='0';
		#$due_date[19]='/0';
		#echo $due_date;
		$query = "Insert into `events` (`name`,`type`,`due_date`,`description`,`cid`,`percentage`,`total`) values ('".$_POST['event_name']."','".$_POST['event_type']."','".$due_date."','".$_POST['descript']."',".$cid.",".$_POST['percentage'].",".$_POST['total'].")";
	#	
		echo $query;
		#echo $query;
		$result =mysql_query($query);
		if(!$result) $msg = mysql_error();
		else
		$msg = "You have succesfully created an ".$_POST['event_type'];
	}
	$tpl->assign("msg",$msg);
	$tpl->assign("event_type","exam");

	$tpl->display("base.html");
?>