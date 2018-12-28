<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>QUẢN LÍ DU LỊCH TRONG NƯỚC</title>
  <link rel="stylesheet" type="text/css" href="./css/ql.css">
</head>
<body>
<div class="container-fluid">
<div class="header">
    <div class="row">
        <ul class="nav navbar-nav navbar-right">
            <li class=""><a>Xin chào <?php echo $_SESSION["username"]; ?></a></li>
            <li><a href="index.php?act=logout">Đăng xuất</a></li>
        </ul>
     <br>
     <br>
    <div class="container">
        <div class="col-sm-3 ">
        <button class="TOUR" href="http://localhost:8080/tlu/dulich/admin/index.php">QUẢN LÍ KHÁCH HÀNG</button>
        </div>
        <div class="col-sm-2 dropdown">
        <button class="TOUR" href="#">   TOUR</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        </div>
        <div class="col-sm-2 dropdown">
        <button class="TOUR" href="#">ĐƠN HÀNG</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="content">
<table style="width:100%">
<tr>
    <th>STT</th>
    <th>username</th> 
    <th>password</th>
    <th>phone</th>
    <th>email</th>
    <th>address</th>
    <th>Xóa</th>
</tr>
<tr>
<?php
    $conn=mysqli_connect('localhost','root','','btlon');
    if(!$conn){
        die("khong the ket noi".mysqli_connect_error());
    }
    //thuc hien cau truy van
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * from users order by id";
    $result=mysqli_query($conn,$sql);
    $stt=0;
    while($row=mysqli_fetch_assoc($result)){
        $stt++;
        echo "<tr>";
        echo "<td>$stt</td>";
    ?>
    <td>
        <?php
        echo'<h5>'.$row['username'].'</h5>';
        ?>
    </td>
    <td>
        <?php
        echo'<h5>'.$row['password'].'</h5>';
        ?>
    </td>
    <td>
        <?php
        echo'<h5>'.$row['phone'].'</h5>';
        ?>
    </td>
    <td>
        <?php
        echo'<h5>'.$row['email'].'</h5>';
        ?>
    </td>
    <td>
        <?php
        echo'<h5>'.$row['address'].'</h5>';
        ?>
    </td>
    <td>
        <a href="http://localhost:8080/tlu/dulich/admin/view/dele_user.php?id=<?php echo $row["id"] ?>"><span class="glyphicon glyphicon-remove" ></span></a>
    </td>
    <?php
    }
    ?>
</tr>
</table>
</div>
</body>
</html>