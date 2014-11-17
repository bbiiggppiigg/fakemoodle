<?php
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Assign Grades","assign_grades_main.tpl");
	$con =get_database_object();
	$msg ="";
	
	$eid = $_GET['eid'];
	$query = "select * from events where id = {$eid}";
	
	$result = mysql_query($query) or ($msg=$msg."".mysql_error());
	echo mysql_error();
	$info = array();
	array_push($info,mysql_fetch_assoc($result));
	
	




//var_dump($_POST);


	$query = "select s.* from register as r, students as s, courses as c, events as e where e.id = {$eid} and e.cid = c.id and r.cid = c.id and s.id = r.sid order by s.id";
	//echo $query;
	$result = mysql_query($query) or ($msg=$msg."".mysql_error());
	$students = array();
	$i=0;
	while($row = mysql_fetch_assoc($result)){
		$sid = $row['id'];
		$query3 = "select * from scores where events_id = {$eid} and user_id= {$sid}";
		//echo $query3;
		$result2 = mysql_query($query3) or die("GG".mysql_error());
		if(mysql_num_rows($result2)!=0){
			if(is_numeric($_POST['scores'][$i])&&$_POST['scores'][$i]!=""){
				//$row2 = mysql_fetch_assoc($result2);
				//$row['score']=$row2['score_given'];	
				$row['score']=$_POST['scores'][$i];
				$query4 = "update scores set `score_given` = {$_POST['scores'][$i]} where events_id = {$eid} and user_id = {$sid}";
				//echo $query4;
			}else{
				$row2 = mysql_fetch_assoc($result2);
				$row['score']=$row2['score_given'];	

			}
			
		}else{
			if(is_numeric($_POST['scores'][$i])&&$_POST['scores'][$i]!=""){
				$row['score']=$_POST['scores'][$i];
				$query4 = "insert into scores values({$eid},{$sid},{$_POST['scores'][$i]},null)";
			}

		}if(is_numeric($_POST['scores'][$i])&&$_POST['scores'][$i]!=""){
			echo $query4;
			mysql_query($query4 ) or die("GG".mysql_error());
			
		}
		array_push($students,$row);
		$i++;
	}


	$tpl->assign("info",$info);
	$tpl->assign("students",$students);
	$tpl->assign("msg",$msg);
	$tpl->display('base.html');

?>