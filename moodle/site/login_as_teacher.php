<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Login As Teacher","login_as_teacher.tpl");
	$con = get_database_object();
	if(isset($_POST['email'])){
		$query = "select * from teachers where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
		#secho $query;
		$result = mysql_query($query) or die(mysql_error());
		if(mysql_num_rows($result)==0){
			$tpl->assign("msg","Wrong ID Password matching");
		}else{
			$row = mysql_fetch_assoc($result);
			$_SESSION['id']=$row['id'];
			
			$_SESSION['teacher']="teacher";
			header('Location: teacher_home.php');
		}
	}
	$tpl->display("base.html");
?>