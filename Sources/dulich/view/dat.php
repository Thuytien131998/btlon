 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DU LỊCH TRONG NƯỚC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./public/js/bootstrap.min.css">
  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./../public/css/dat1.css">
    <script src="main.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="header">
          <div>
              <div class="row">
              <div class="col-sm-1">
                  <a class="fa fa-home" href="http://localhost:8080/tlu/dulich/index.php" ></a></div>  
                  <div class="col-sm-1">
                    <p><a href="mailto:Tien.vitconxauxi@gmail.com">
                        Email
                        </a>
                    </p>
                  </div>
                  <div class="col-sm-2">
                    <a class="ticket-hotline"
                    href="tel:1900 1800">
                     Hotline: 1900 1800
                    </a>
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
                    <?php
                      $con = mysqli_connect("localhost","root","","btlon"); //mo ra kết nối đến máy chủ
                      if (mysqli_connect_errno())
                      {
                          echo "Failed to connect to MySQL: " . mysqli_connect_error();//không thể kết nối
                      }
                      //đặt bộ kí tự máy khách mặc định là 
                      mysqli_query($con,"SET CHARACTER SET 'utf8'");
                      mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
                     function getmenu(){
                      global $con;
                      mysqli_set_charset($con,"utf8");
                      $result = mysqli_query($con,"select DISTINCT vungmien,idvung from tour");
                      $arr=array();
                      while($rows=mysqli_fetch_array($result,MYSQLI_ASSOC))
                      {
                        $arr[]=$rows;	
                      }	
                      return $arr;
                     }
                     $getmenu=getmenu();
                     if(isset($getmenu))foreach($getmenu as $value){
                    ?>
                      <a href="http://localhost:8080/tlu/dulich/view/menu.php?idvung=<?php echo $value["idvung"] ?>"><?php echo $value["vungmien"]?></a>
                      <?php
                      }
                      ?>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <a class="log-in" href="http://localhost:8080/tlu/dulich/view/login.php">Đăng nhập</a>
                  </div>  
              </div>
          </div>
        </div>  
</div>
<div class="content">
  <div class="don">
  <form action="/action_page.php">
    <div class="col-50">
      <h3>Thông Tin</h3>
      <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
      <input type="text" id="fname" name="firstname" placeholder="Full name" required="">
      <label for="email"><i class="fa fa-envelope"></i> Email</label>
      <input type="text" id="email" name="email" placeholder="john@example.com" required="" pattern="([\w._%+-]+@[\w.-]+[a-zA-Z]{2,4})"title="Vui lòng nhập lại email!">
      <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
      <input type="text" id="adr" name="address" placeholder="address" required="">
    </div>
    <div class="col-50">
      <h3>Thanh toán</h3>
      <label for="fname"><i class="fa fa-user"></i>Chủ thẻ</label>
      <input type="text" id="NameCard" name="NameCard" placeholder="Name on Card" required="">
      <label for="fname"><i class="fa fa-user"></i>Số thẻ tín dụng</label>
      <input type="text" id="Creditnumber" name="Creditnumber" placeholder="Credit card number" required="" pattern="(^[1-9]{4}+-^[1-9]{4}+-^[1-9]{4}+-^[1-9]{4}$)" title="Vui lòng nhập lại số thẻ!">
      <label for="fname"><i class="fa fa-user"></i>Năm hết hạn thẻ</label>
      <input type="text" id="ExpYear" name="ExpYear" placeholder="Exp Year" required="">
      <label>
        <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống với thanh toán!
      </label>
      <input type="submit" value="XÁC NHẬN" class="btn">
    </div>
  </form>
  </div>
  <div class="don">
  <div class="col-25">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i> 
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
<div class="footer">
    <div class="container">
      <div class="col-sm-5">
        <a href="http://localhost:8080/tlu/dulich/index.php">DU LỊCH TRONG NƯỚC</a>
        <ul>
          <p>Email:Tien.vitconxaixi@gmail.com</p>
          <p>Tư vấn: 1900 1800</p>
         <img src="./../public/images/i.png" class="a1">
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