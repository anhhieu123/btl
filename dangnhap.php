<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
session_start();
?>
<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
<div class="header">
	<h2>Dang nhap</h2>
	<?php
		//Gọi file connection.php 
		require_once("connection.php");
		// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
		if (isset($_POST["login"])) {
			// lấy thông tin người dùng
			$username = $_POST["username"];
			$password_1 = $_POST["password_1"];
			//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
			//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
			$username = strip_tags($username);
			$username = addslashes($username);
			$password_1 = strip_tags($password_1);
			$password_1 = addslashes($password_1);
			if ($username == "" || $password_1 =="") {
				echo "username hoặc password bạn không được để trống!";
			}else{
				$password=md5($password_1);
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
					header('Location: index.php');
				}
			}
		}
	?>	
        <form method="Post" action="dangnhap.php">
            <div class="input-group">
                <Lable>Username</Lable>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <Lable>Password</Lable>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
            
        </form>
    </div>
</body>
</html>