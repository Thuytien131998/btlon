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
  <link rel="stylesheet" type="text/css" href="../../public/css/ta.css">
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
                      <a href="#">Miền Bắc</a>
                      <a href="#">Miền Trung</a>
                      <a href="#">Miền Nam</a>
                    </div>
                  </div>
                  <div class="col-sm-1">
                    <a class="log-in" href="http://localhost:8080/tlu/dulich/view/login.php">Đăng nhập</a>
                  </div>  
                  <div class="col-sm-0">
                    <a class="dangki" href="http://localhost:8080/tlu/dulich/view/register.php">Đăng kí</a>
                  </div>
              </div>
          </div>
        </div>  
</div>
<div class="content">
    <?php
    $conn=mysqli_connect('localhost','root','','btlon');
    if(!$conn){
        die("khong the ket noi".mysqli_connect_error());
    }
    //thuc hien cau truy van
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * from tour where idTour=2";
    $result=mysqli_query($conn,$sql);
    //xu li ket qua truy van
    while($row=mysqli_fetch_assoc($result)){

        echo'<h2>'.$row['nameTour'].'</h2>';
        echo'<h5>'.$row['ngaykhoihanh'].'</h5>';
        echo'<h5>'.$row['ngayketthuc'].'</h5>';
        echo'<h5>'.$row['diemxuatphat'].'</h5>';
        echo'<h5>'.$row['vanchuyen'].'</h5>';
        echo'<h5>'.$row['khachsan'].'</h5>';
        echo'<h5>'.$row['sochongoi'].'</h5>';
        echo'<img src="../../public/images/'.$row['images'].'"/>';
        echo '<p>'.$row['lichtrinh'].'</p>';
        echo '<p>'.$row['ghichu'].'</p>';
    }
    mysqli_close($conn);
    ?>
</div>
<div class="footer">
    <div class="container">
      <div class="col-sm-5">
        <a href="http://localhost:8080/tlu/dulich/index.php">DU LỊCH TRONG NƯỚC</a>
        <ul>
          <p>Email:Tien.vitconxaixi@gmail.com</p>
          <p>Tư vấn: 1900 1800</p>
         <img src="../../public/images/i.png" class="a1">
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