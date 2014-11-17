<?php
	session_start();
	include_once("lib/handler.php");
	include_once("lib/database.php");
	$tpl = new Handler("Index","index.tpl");
	echo $_SESSION['id'];
	$tpl->display("base.html");
?>