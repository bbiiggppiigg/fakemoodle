<?php
	
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("register_user","register_as_student.tpl");
	$con =get_database_object();
	$msg = "";
	if(isset($_POST['email'])){
		$query = "Select * from students where email = '".$_POST['email']."'";
		$result = mysql_query($query) or die("GG".mysql_error());
		if(mysql_num_rows($result)!=0)
			$msg = "Email Used!";
		else{
			$query = "Insert into students (password,email,name) values ('".$_POST['password']."','".$_POST['email']."','".$_POST['name']."')";
			#echo $query;
			mysql_query($query) or die (mysql_error());	
			$msg = "Account Created!";
		}
		
	}
	$query = "select * from students where 1";
	$result = mysql_query($query) or die(mysql_query(query));
	$rs = array();
	while($row=mysql_fetch_assoc($result)){
		array_push($rs,$row);
	}
	$tpl->assign("msg",$msg);
	$tpl->assign("rs",$rs);
	$tpl->display("base.html");
?>