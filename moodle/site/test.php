<?php
	include("lib/handler.php");
	include("lib/database.php");
	if($_GET['cid'])
	$con  = get_database_object();
	$query = "select * from `register`";
	$result =mysql_query($query) or die ("GG".mysql_error());
	$row = mysql_fetch_assoc($result);
	var_dump($row);
?>