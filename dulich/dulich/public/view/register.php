<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DU LỊCH TRONG NƯỚC-registration</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" href="./public/js/bootstrap.min.css">
  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="register.css">
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
                      <a href="#">Miền Bắc</a>
                      <a href="#">Miền Trung</a>
                      <a href="#">Miền Nam</a>
                    </div>
                  </div>
      <div class="col-sm-0">
        <a class="log-in" href="http://localhost:8080/tlu/dulich/public/view/login.php">Đăng nhập</a>
        </div>
     </div>
  </div>
</div>
<div class="content">
  <div class="dangki">
    <form>
    <h1>Đăng kí</h1>
    <table cellpadding="5" cellspacing="50" style="width:100%">
    <tr>
        <td>Họ tên <span style="color:red">(*)</span>:</td>
        <td><input type="text" name="username" id="username" class="form-control"><span style="color:red; font-size:12px;" id="username1"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Mật khẩu<span style="color:red">(*)</span>:</td>
        <td><input type="password" name="password" id="password1" class="form-control"><span style="color:red; font-size:12px;" id="password11"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Điện thoại<span style="color:red">(*)</span>:</td>
        <td><input type="text" name="phone" id="phone" class="form-control"><span style="color:red; font-size:12px;" id="phone1"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Email<span style="color:red">(*)</span>:</td>
        <td><input type="text" name="email" id="email" class="form-control"><span style="color:red; font-size:12px;" id="email1"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Địa chỉ<span style="color:red">(*)</span>:</td>
        <td><input type="text" name="address" id="address" class="form-control"><span style="color:red; font-size:12px;" id="address1"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Nhập Lại Mật khẩu<span style="color:red">(*)</span>:</td>
        <td><input type="password"  id="password2" class="form-control"><span style="color:red; font-size:12px;" id="password21"></span></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
    <td>&nbsp;</td>
        <td>
        <input type="submit" name="btn_register" value="Đăng Ký" class="btn btn-default">
        <input type="reset" value="Viết lại" class="btn btn-default">
        </td>
    </tr>
    </table>
    </form>
  </div>
</div>
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
