<?php
    $conn=mysqli_connect('localhost','root','','btlon');
    if(!$conn){
        die("khong the ket noi".mysqli_connect_error());
    }
    $id=$_GET["id"];
    //thuc hien cau truy van
    mysqli_set_charset($conn,"utf8");
    function deleteuser($id)
    {
        global $con;
        mysqli_query($con,"delete from users where id='{$id}'");	
    }
    header("location:http://localhost:8080/tlu/dulich/admin/index.php");
    exit();
?>