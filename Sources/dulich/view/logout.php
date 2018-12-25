<meta charset="utf-8">
<?php
 ession_start();
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
?>