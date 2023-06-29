<?php 

require_once './database.php';

error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']); 
$retypepassword = sha1($_POST['retypepassword']);

// $status = 1;

// viết câu lệnh sql
$user = "INSERT INTO users (name, email, password, retypepassword)
VALUES ('$name', '$email', '$password', $retypepassword);";
// var_dump($user);die;
// thực thi câu lệnh sql với hàm mysqli_query
$check = mysqli_query($connect, $user);
// nếu thành công -> true, thất bại -> false
if ($check == true){
    // đi đến trang đăng nhập
    header('location: ./login.php?status=1');
}
else {
    // quay trở lại trang đăng ký
    header('location: ./register.php?status=2');
}

// check
// var_dump($check);die;