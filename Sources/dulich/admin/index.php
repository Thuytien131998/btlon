<meta charset="utf-8">
<?php 
	session_start();
	$act="";
	if(isset($_GET["act"]))
	{
		$act=$_GET["act"];
		switch ($act)
		{
			case "logout":
			unset($_SESSION["loged"]);
			break;		
		}
	}
  include "../config.php"; //chèn nd của tệp này vào tệp khác trc khi máy chủ thực thi nó
  if(!isset($_SESSION["loged"]))
	{
		header("location:login.php");
	}
  include "view/ql.php";
?>
