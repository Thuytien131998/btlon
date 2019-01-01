<?php
$conn=mysqli_connect('localhost','root','','btlon');
if(!$conn){
    die("khong the ket noi".mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
  $nameTour= mysqli_real_escape_string($conn,$_POST["nameTour"]);
  $ngaykhoihanh= mysqli_real_escape_string($conn,$_POST["ngaykhoihanh"]);
  $ngayketthuc= mysqli_real_escape_string($conn,$_POST["ngayketthuc"]);
  $gia= mysqli_real_escape_string($conn,$_POST["gia"]);
  $diemxuatphat= mysqli_real_escape_string($conn,$_POST["diemxuatphat"]);
  $noibat= mysqli_real_escape_string($conn,$_POST["noibat"]);
  $vungmien= mysqli_real_escape_string($conn,$_POST["vungmien"]);
  $vanchuyen= mysqli_real_escape_string($conn,$_POST["vanchuyen"]);
  $khachsan= mysqli_real_escape_string($conn,$_POST["khachsan"]);
  $images=mysql_real_escape_string($_FILES["images"]["name"]);
  $sochongoi= mysqli_real_escape_string($conn,$_POST["sochongoi"]);
  $lichtrinh= mysqli_real_escape_string($conn,$_POST["lichtrinh"]);
  $ghichu= mysqli_real_escape_string($conn,$_POST["ghichu"]);
  $socho= mysqli_real_escape_string($conn,$_POST["socho"]);
  $idvung= mysqli_real_escape_string($conn,$_POST["idvung"]);
  $sql="INSERT into tour(nameTour,ngaykhoihanh,ngayketthuc,gia,diemxuatphat,noibat,vungmien,vanchuyen,khachsan,images,sochongoi,lichtrinh,ghichu,socho,idvung)value('$nameTour','$ngaykhoihanh','$ngayketthuc','$gia','$diemxuatphat','$noibat','$vungmien','$vanchuyen','$khachsan','$images','$sochongoi','$lichtrinh','$ghichu','$socho','$idvung')";
  $query=mysqli_query($conn,$sql);
  if($query){
    header("http://localhost:8080/tlu/dulich/admin/index.php?view=tour");
  }
?>