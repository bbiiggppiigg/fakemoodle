<?php
	session_start();
	if(isset($_SESSION['login']))
		unset($_SESSION['login']);
	if(isset($_SESSION['teacher']))
        unset($_SESSION['teacher']);
    if(isset($_SESSION['student']))
        unset($_SESSION['student']);
    if(isset($_SESSION['id']))
        unset($_SESSION['id']);
    session_destroy();
	header('Location: index.php'); 
?>