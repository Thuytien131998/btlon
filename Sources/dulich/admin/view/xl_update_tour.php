<?php
$conn=mysqli_connect('localhost','root','','btlon');
if(!$conn){
    die("khong the ket noi".mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
  $idTour=mysqli_real_escape_string($conn,$_POST["idTour"]);
  $nameTour= mysqli_real_escape_string($conn,$_POST["nameTour"]);
  $ngaykhoihanh= mysqli_real_escape_string($conn,$_POST["ngaykhoihanh"]);
  $ngayketthuc= mysqli_real_escape_string($conn,$_POST["ngayketthuc"]);
  $gia= mysqli_real_escape_string($conn,$_POST["gia"]);
  $diemxuatphat= mysqli_real_escape_string($conn,$_POST["diemxuatphat"]);
  $noibat= mysqli_real_escape_string($conn,$_POST["noibat"]);
  $vungmien= mysqli_real_escape_string($conn,$_POST["vungmien"]);
  $vanchuyen= mysqli_real_escape_string($conn,$_POST["vanchuyen"]);
  $khachsan= mysqli_real_escape_string($conn,$_POST["khachsan"]);
  $images=mysqli_real_escape_string($conn,$_POST["images"]);
  $sochongoi= mysqli_real_escape_string($conn,$_POST["sochongoi"]);
  $lichtrinh= mysqli_real_escape_string($conn,$_POST["lichtrinh"]);
  $ghichu= mysqli_real_escape_string($conn,$_POST["ghichu"]);
  $socho= mysqli_real_escape_string($conn,$_POST["socho"]);
  $idvung= mysqli_real_escape_string($conn,$_POST["idvung"]);
  $sql="UPDATE  tour set nameTour='$nameTour',ngaykhoihanh='$ngaykhoihanh',ngayketthuc='$ngayketthuc',gia='$gia',diemxuatphat='$diemxuatphat',noibat='$noibat',vungmien='$vungmien',vanchuyen='$vanchuyen',khachsan='$khachsan',images='$images',sochongoi='$sochongoi',lichtrinh='$lichtrinh',ghichu='$ghichu',socho='$socho',idvung='$idvung' where idTour='$idTour'";
  $query=mysqli_query($conn,$sql);
  if($query){
    header("http://localhost:8080/tlu/dulich/admin/index.php?view=tour");
  }
?>