<?php 
  include "config.php"; //chèn nd của tệp này vào tệp khác trc khi máy chủ thực thi nó
	session_start(); //phiên bắt đầu
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DU LỊCH TRONG NƯỚC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="./public/js/bootstrap.min.css">
  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <script src="./btlon.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" type="text/css" href="./public/css/btlon.css">
</head>
<body>
  <div class="container-fluid">
      <div class="header">
          <div>
              <div class="row">
                  <div class="col-sm-0">
                  <a class="fa fa-home" href="file:///D:/xampp/htdocs/tlu/btlon.html" ></a></div>
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
                    <a class="log-in" href="#">Đăng nhập</a>
                  </div>  
                  <div class="col-sm-0">
                    <a class="dangki" href="#">Đăng kí</a>
                  </div>
              </div>
          </div>
        </div>  
  </div>
  <div class="content">
    <div class="bangtruyen">
      <div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
            
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="./public/images/a8.jpg">
                </div>
            
                <div class="item">
                  <img src="./public/images/a7.jpg" >
                </div>
            
                <div class="item">
                  <img src="./public/images/a5.jpg" >
                </div>
              </div>
            
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
      </div>
    </div>
    <div class="container">
    <div class="col-sm-12">
         <h3>ĐIỂM ĐẾN ĐANG HOT</h3>
    </div>
    
    <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/hoian.jpg" class="img1">
        <h4 class="text1">Tour Miền Trung - Đà Nẵng - Hội An</h4><span> Giá: 3,299,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành: Hồ Chí Minh</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
    </div>
    <div class="col-sm-4">
        <div class="hot1">
          <img src="./public/images/danang.jpg" class="img1">
          <h4 class="text1">Tour Đà Nẵng - Huế - Động Thiên </h4><span> Giá: 5,599,000đ</span>
          <p>Khách sạn 3*</p>
          <p>Khởi hành:Hồ Chí Minh</p>
          <a href="#" class="more">Xem chi tiết>></a> 
        </div>
    </div>
    <div class="col-sm-4">
        <div class="hot1">
          <img src="./public/images/a4.jpg" class="img1">
          <h4 class="text1">Du Lịch Đà Nẵng - Bà Nà - Hội An</h4><span> Giá: 4,890,000đ</span>
          <p>Khách sạn 3*</p>
          <p>Khởi hành:Hà Nội</p>
          <a href="#" class="more">Xem chi tiết>></a> 
        </div>
    </div>
    <div class="col-sm-12">
        <h3>DU LỊCH MIỀN BẮC</h3>
   </div>
   <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/baidinh.jpg" class="img1">
        <h4 class="text1">Du Lịch Hạ Long- Chùa Bái Đính</h4><span> Giá: 6,299,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Hồ Chí Minh</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/caobang.png" class="img1">
        <h4 class="text1">Du lịch Hà Giang- Thác Bản</h4><span> Giá: 7,399,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Sài gòn</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/langbac.jpg" class="img1">
        <h4 class="text1">Du Lịch Hạ Long - Hà nội</h4><span> Giá: 7,199,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Sài gòn</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-12">
      <h3>DU LỊCH MIỀN TRUNG</h3>
 </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/nhatrang.jpg" class="img1">
        <h4 class="text1">Tour Nha Trang</h4><span> Giá: 5,890,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Hà nội</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/quy.jpg" class="img1">
        <h4 class="text1">Tour Du lịch Quy Nhơn </h4><span> Giá: 5,890,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Hà Nội</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/phu.jpg" class="img1">
        <h4 class="text1">Du lịch Phú Yên </h4><span> Giá: 3,990,000đ</span>
        <p>Khách sạn 4*</p>
        <p>Khởi hành:Hà Nội</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-12">
      <h3>DU LỊCH MIỀN NAM</h3>
 </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/phuquoc.jpg" class="img1">
        <h4 class="text1">Du Lịch Phú Quốc</h4><span> Giá: 3,299,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Hồ Chí Minh</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/ba.jpg" class="img1">
        <h4 class="text1">Du lịch MIẾU BÀ CHÚA XỨ </h4><span> Giá: 3,099,000đ</span>
        <p>Khách sạn 3*</p>
        <p>Khởi hành:Hồ Chí Minh</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  <div class="col-sm-4">
      <div class="hot1">
        <img src="./public/images/tay.jpg" class="img1">
        <h4 class="text1">Du Lịch Miền Tây </h4><span> Giá: 699,000đ</span>
        <p>Khách sạn 4*</p>
        <p>Khởi hành:Sài gòn</p>
        <a href="#" class="more">Xem chi tiết>></a> 
      </div>
  </div>
  </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="col-sm-5">
        <a href="file:///D:/xampp/htdocs/tlu/btlon.html">DU LỊCH TRONG NƯỚC</a>
        <ul>
          <p>Email:Tien.vitconxaixi@gmail.com</p>
          <p>Tư vấn: 1900 1800</p>
         <img src="./public/images/i.png" class="a1">
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