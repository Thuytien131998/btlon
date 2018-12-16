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
    $conn=mysqli_connect('localhost','root','','laodong');
    if(!$conn){
        die("khong the ket noi".mysqli_connect_error());
    }
    //thuc hien cau truy van
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * from new";
    $result=mysqli_query($conn,$sql);
    //xu li ket qua truy van
    while($row=mysqli_fetch_assoc($result)){
        echo'<h2>'.$row['newTile'].'</h2>';
        echo'<h3>'.$row['newDesc'].'</h3>';
        echo '<p>'.$row['content'].'</p>';
    }
    mysqli_close($conn);
    ?>
</body>
</html>