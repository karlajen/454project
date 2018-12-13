<?php
$db_server_name = "phpmyadmin.c3c1na9iqysr.us-west-1.rds.amazonaws.com";
$db_user_name   = "phpMyAdmin";
$db_pass        = "phpMyAdmin";
$db_name        = "fiilegramDB";
$db_conn = new mysqli($db_server_name, $db_user_name, $db_pass, $db_name);
if($db_conn->connect_error)
{
	die("Failed to connect to database: " . $db_conn->connect_error);
}
?>