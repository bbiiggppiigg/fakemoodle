<?php
global $arr;
$arr = parse_ini_file("../config.ini");
 
$DB_LOCATE = $arr['ip']; // set the DB IP
$DB_USER = $arr['username']; // set the DB user
$DB_PASSWD = $arr['password']; // set the DB password
$DB_DATA = $arr['data'];
/*****************
 * This builds a DB connection, and return the db connection instance.
 * **************/

function get_database_object($db_name='moodle') //  default db name could be reset.
{
    global $DB_LOCATE;
    global $DB_USER;
    global $DB_PASSWD;

    $con = mysql_connect($DB_LOCATE, $DB_USER, $DB_PASSWD, true);
    if(!$con)   die("Could not connect: ". mysql_error());
    mysql_select_db($db_name, $con);
    return $con;
}

function login_teacher(){
	if(isset($_SESSION['teacher'])){
		return True;
	}
	header("Loaction : index.php");
}	

function login_student(){
	if(isset($_SESSION['student']))
		return True;
	header("Loaction : index.php");
}

function student_num($cid){
	$con = get_database_object();
	$query = "select * from `register` where cid = ".$cid;
	$result = mysql_query(($query)) or die(mysql_error());
	return mysql_num_rows($result);
}
?>