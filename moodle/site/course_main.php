<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Course Main","course_main.tpl");
	if(isset($_SESSION['student'])){
		$sid = $_SESSION['id'];
		echo $sid;
	}
	if(isset($_GET['cid'])){
		$cid = $_GET['cid'];
		$tpl->assign("cid",$cid);
		$con = get_database_object();
		$query = "select * from courses where id = ".$_GET['cid'];
		$result = mysql_query($query) or die("GG".mysql_error());
		$row = mysql_fetch_assoc($result);
		$tpl->assign("title",$row['name']);
		$iid =  $row['instructor'];
		$query = "select name from teachers where id = $iid";
		$result = mysql_query($query) or die("GG".mysql_error());
		$name_row = mysql_fetch_assoc($result);
		#echo $name_row['name'];
		$tpl->assign("instructor",$name_row['name']);
		#
		#$rs = array();
		#array_push($rs,$row);
		
		$tpl->assign("class_info",$row);
		$query = "select * from `events` where `cid` = ".$cid." and `type` = 'assignment'";
		#echo $query;	
		$result = mysql_query($query) or die("GG".mysql_error());
		$assignments = array();
		while($row = mysql_fetch_assoc($result)){
			if(isset($sid)){
				$eid = $row['id'];
				$query2 = "select * from scores where `events_id` = {$eid} and `user_id` = {$sid}";
				//echo $query2;
				$result2 = mysql_query($query2) or die("GG".mysql_error());
				if(mysql_num_rows($result2)!=0){
					$row2 = mysql_fetch_assoc($result2);
					$row['score_given']=$row2['score_given'];
				}else{
					$row['score_given']="--";
				}
			}
			array_push($assignments,$row);
		}
		$tpl->assign("assignments",$assignments);


		$query = "select * from `events` where `cid` = ".$cid." and `type` = 'project'";
		#echo $query;	
		$result = mysql_query($query) or die("GG".mysql_error());
		$projects = array();
		while($row = mysql_fetch_assoc($result)){
			if(isset($sid)){
				$eid = $row['id'];
				$query2 = "select * from scores where `events_id` = {$eid} and `user_id` = {$sid}";
				//echo $query2;
				$result2 = mysql_query($query2) or die("GG".mysql_error());
				if(mysql_num_rows($result2)!=0){
					$row2 = mysql_fetch_assoc($result2);
					$row['score_given']=$row2['score_given'];
				}else{
					$row['score_given']="--";
				}
			}
			array_push($projects,$row);
		}
		$tpl->assign("projects",$projects);

		$query = "select * from `events` where `cid` = ".$cid." and `type` = 'quiz'";
		#echo $query;	
		$result = mysql_query($query) or die("GG".mysql_error());
		$quizs = array();
		while($row = mysql_fetch_assoc($result)){
			if(isset($sid)){
				$eid = $row['id'];
				$query2 = "select * from scores where `events_id` = {$eid} and `user_id` = {$sid}";
				//echo $query2;
				$result2 = mysql_query($query2) or die("GG".mysql_error());
				if(mysql_num_rows($result2)!=0){
					$row2 = mysql_fetch_assoc($result2);
					$row['score_given']=$row2['score_given'];
				}else{
					$row['score_given']="--";
				}
			}
			array_push($quizs,$row);
		}
		$tpl->assign("quizs",$quizs);

		$query = "select * from `events` where `cid` = ".$cid." and `type` = 'exam'";
		#echo $query;	
		$result = mysql_query($query) or die("GG".mysql_error());
		$exams = array();
		while($row = mysql_fetch_assoc($result)){
			if(isset($sid)){
				$eid = $row['id'];
				$query2 = "select * from scores where `events_id` = {$eid} and `user_id` = {$sid}";
				//echo $query2;
				$result2 = mysql_query($query2) or die("GG".mysql_error());
				if(mysql_num_rows($result2)!=0){
					$row2 = mysql_fetch_assoc($result2);
					$row['score_given']=$row2['score_given'];
				}else{
					$row['score_given']="--";
				}
			}
			array_push($exams,$row);
		}
		$tpl->assign("exams",$exams);


	}
		
	$tpl->display("base.html");

?>