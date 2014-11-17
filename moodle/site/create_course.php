<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Create Course","create_course.tpl");
	if(isset($_POST['course_number'])){
		$query ="Insert into courses (number,name,instructor,description,syllabus) values 
						('".$_POST['course_number']."','".$_POST['course_name']."','".$_SESSION['id']."','".$_POST['description']."','".$_POST['syllabus']."')";
#	echo $query;
	$con = get_database_object();
	
	$result = mysql_query($query) or die("GG".mysql_error());
	
	}
	
	$tpl->display("base.html");

?>