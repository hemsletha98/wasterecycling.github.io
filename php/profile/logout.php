<?php 
session_start();
include 'security.php';
$x=loginTest();

if($x==true)
{
	
	session_destroy();
	session_unset();
	unset($_SESSION);
	session_write_close();
	header('location:../login.php');
}
?>