<meta charset="utf-8">
<?php
include "../config.php";
session_start();
$customer="";
if(isset($_SESSION["loged_customer"]))
	{
	$customer = $_SESSION["loged_customer"];
	}
	else
	{
	$customer= "Đăng nhập";	
	}
	$act="";
	if(isset($_GET["act"]))
	{
		$act=$_GET["act"];
		switch ($act)
		{
			case"logout":
			unset($_SESSION["loged_customer"]);
			header("location: http://localhost:8080/tlu/dulich/index.php");
			break;	
		}
    }
    
include "../index.php";
?>