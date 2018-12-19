<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DU LỊCH TRONG NƯỚC-login</title>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="./public/js/bootstrap.min.css">
  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./../public/css/login.css" >
  <script src="main.js"></script>
</head>
<body>
<div class="container-fluid">
  <div class="hearder">
     <div>
     <div class="row">
      <div class="col-sm-1">
      <a class="fa fa-home" href="http://localhost:8080/tlu/dulich/index.php"></a>
      </div>
      <div class="col-sm-1">
      <p><a href="mailto:Tien.vitconxauxi@gmail.com">
        Email
       </a></p>
      </div>
      <div class="col-sm-2">
      <a class="ticket-hotline"  href="tel:1900 1800">
      Hotline: 1900 1800</a>
      </div>
      <div class="col-sm-3">
                    <form class="navbar-form navbar-left" action="/action_page.php">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập nội dung cần tìm">
                        <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
      </div>
      <div class="col-sm-3 dropdown">
                    <button class="TOUR" href="#">TOUR TRONG NƯỚC</button>
                    <div class="dropdown-content">
                      <a href="http://localhost:8080/tlu/dulich/view/menu.php">Miền Bắc</a>
                      <a href="http://localhost:8080/tlu/dulich/view/menu.php">Miền Trung</a>
                      <a href="http://localhost:8080/tlu/dulich/view/menu.php">Miền Nam</a>
                    </div>
                  </div>
      <div class="col-sm-0">
                    <a class="dangki" href="http://localhost:8080/tlu/dulich/view/register.php">Đăng kí</a>
                  </div>
     </div>
  </div>
</div>
<div class="content">
  <form method="post">
    <h1>Đăng nhập</h1>
    <input class="t" placeholder="username" type="text" required=""  name="username" >
    <input  class="t" placeholder="password" type="password" required="" name="password">
    <button class="t" type="submit" name="submit">Đăng nhập</button>
</div>
<?php
$conn=mysqli_connect('localhost','root','','btlon');
if(!$conn){
    die("khong the ket noi".mysqli_connect_error());
}
if(isset($_POST["submit"])){
  $username= mysqli_real_escape_string($conn,$_POST["username"]);
  $password= mysqli_real_escape_string($conn,$_POST["password"]);
  $sql="select * from users where username='$username' and password='$password'";
  $query=mysqli_query($conn,$sql);
  $num_row=mysqli_num_rows($query);
  if($num_row !=0){
    header("Location: http://localhost:8080/tlu/dulich/index.php");
    $_SESSION["loged_customer"]=true;
		$_SESSION["loged_customer"]=$username;
    die();
  }
  else{
    echo"Tên hoặc mật khẩu không đúng!";
  }
  mysqli_close($conn);
}
?>
<div class="footer">
    <div class="container">
      <div class="col-sm-5">
        <a href="http://localhost:8080/tlu/dulich/index.php">DU LỊCH TRONG NƯỚC</a>
        <ul>
          <p>Email:Tien.vitconxaixi@gmail.com</p>
          <p>Tư vấn: 1900 1800</p>
        </ul>
      </div>
      <div class="col-sm-5">
        <a>QUY ĐỊNH DÀNH CHO WEBSITE TMĐT BÁN HÀNG – DỊCH VỤ ĐẶT PHÒNG</a>
        <ul>
          <li><a href="#">Chính sách quy định chung</a></li>
          <li><a href="#">quy định về thanh toán</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>