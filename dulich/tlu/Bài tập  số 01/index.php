<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $conn=mysqli_connect('localhost','root','','dangki');
    if(!$conn){
        die("khong the ket noi".mysqli_connect_error());
    }
    //thuc hien cau truy van
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * from new";
    $result=mysqli_query($conn,$sql);
    //xu li ket qua truy van
    while($row=mysqli_fetch_assoc($result)){
       
    }
    mysqli_close($conn);

    if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = $_POST["confirm"];
		$username = $_POST["email"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		// $username = strip_tags($username);
		// $username = addslashes($username);
		// $password = strip_tags($password);
		// $password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index2.php');
			}
		}
	}
    ?>
    <form method="POST" action="index.php">
	<fieldset>
	    <legend>Đăng kí</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
				<tr>
	    			<td>Confirm</td>
	    			<td><input type="text" name="confirm" size="30"></td>
	    		</tr>
				<tr>
	    			<td>Email</td>
	    			<td><input type="text" name="email" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng kí"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["password"];
		$confirm = $_POST["confirm"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $confirm == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(
                username,
                password,
                confirm,
                email
            ) VALUES (
                '$username',
                '$password',
                '$confirm',
                '$email'
            )";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            mysqli_query($conn,$sql);
            echo "chúc mừng bạn đã đăng ký thành công";
        }
	}
?>