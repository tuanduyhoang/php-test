<?php 

$hostname = '127.0.0.1'; 
$port = 3308;
$databaseName = 'project'; 
$username = 'root'; 
$password = ''; 

$connect = mysqli_connect($hostname, $username, $password, $databaseName, $port);


if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
// viết câu lệnh sql 

// $user = "INSERT INTO users (name, email, password, status, avatar)
// VALUE ('Hoang Duy','sc.duyhoang@gmail.com','abcabc2',1,
// 'https://tuiriviu.com/wp-content/uploads/2023/05/Linh-Miu-tiet-lo-cat-xe-9-chu-so-noi-mot-cau-ve-scandal-trong-qua-khu-z3024416864099_62fc6a65e80b6785657e8cb3f8438f12-1639561306-766-width852height1280.jpg');";

// thực thi câu lệnh sql với hàm mysqli_query

// $check = mysqli_query($connect, $user);
// var_dump($check);die;







