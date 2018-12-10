<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập tài khoản</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="flexslider.css"/>
</head>
<body>
<div id="wedsite">
    <div id="top">
        <div id="top-left">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/"><img src="hinhanh/facebook-24.png" alt="Facebook" /></a>
                        <a href="https://mail.google.com/mail/u/0/"><img src="hinhanh/gmail-24.png"  alt="Gmail" /> </a>
                    </li>
                </ul>
        </div>

        <div id="top-right">
                <ul>
                    <li> <a href="#"><img src="hinhanh/dangnhap.png" alt="Dang nhap" /></a></li>
                    <li>|</li>
                    <li> <a href="dangnhap.php">Đăng nhập</a></li>
                    <li>|</li>
                    <li> <a href="register.php">Đăng kí</a></li>
                </ul>
        </div>
    </div>
    <div id="logo">
        <div style="float:left;width:300px;height:79px;margin:40px 10px 0px 10px">
            <a href="#"><img src="hinhanh/logo.png" alt="Trang chu" /> </a>
        </div>
            <div style="float:right;width:450px;height:100px;margin:70px 0 0 0;">
                <div id="sdt"> SUPPORT:0355370909 </div>
                <div id= "search">
                    <form>
                        <input type="text" placeholder="search for here..." id="textsearch"/>
                        <button type="submit" id="search-button"></button>
                    </form>
                </div>
            </div >
    </div>
    <div id="menu">
        <ul>
            <img src="hinhanh/iconhome-24.png"alt="trangchu" />
            <li style="border-left:1px dotted #000000"><a href="#">Trang chủ</a></li>
            <li><a href="#" >Chương trình học</a>
                <ul id="submenu">
                        <li><a href="#" >Toán Học</a></li>
                        <li><a href="#" >Vật Lý</a></li>
                        <li><a href="#" >Hóa Học</a></li>
                        <li><a href="#" >Tiếng Anh</a></li>
                        <li><a href="#" >Văn Học</a></li>
                </ul>
            </li>
            <li><a href="#" >Tin giáo dục</a></li>
            <li><a href="#">Trắc nghiệm vui</a></li>
            <li><a href="#" >Thư viện</a></li>
            <li><a href="#" >Mẹo học hay</a></li>
            <li><a href="#">Trợ giúp</a></li>
        </ul>
    </div>
    <div id="slide">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="hinhanh/banner-top1.png" />
                    </li>
                    <li>
                        <img src="hinhanh/banner-top2.png" />
                    </li>
                    <li>
                        <img src="hinhanh/banner-top3.jpg" />
                    </li>
                    <li>
                        <img src="hinhanh/bn_web1.jpg" />
                    </li>
                </ul>
            </div>
         </section>
    </div>
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
    <!-- FlexSlider -->
    <script defer src="jquery.flexslider.js"></script>
  
    <script type="text/javascript">
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
        $('.flexslider').flexslider({
          animation: "slide",
         controlNav:false,
        });
      });
    </script>
    <div class="dangnhap">
    <h2>Đăng Nhập</h2>
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
				echo "Username hoặc Password bạn không được để trống!";
			}else{
				$password=md5($password_1);
				$sql = "select * from users where username = '$username' and password = '$password' ";
				$query = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($query);
				if ($num_rows==0) {
					echo "Username hoặc Password không đúng !";
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
        <form method="Post" action="loginTk.php">
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
                Not yet a member? <a href="registerTk.php">Sign up</a>
            </p>
            
        </form>
    </div>
    <div id="footer">
        <div id="ontt">
            <img src="hinhanh/ontt.png" alt="ôn trực tuyến" style="margin:30px 10px 0 25px "/>
        </div>
        <div class="fLeft">
            <p>Cơ quan chủ quản: Công ty Cổ phần Vinsofts</p>
            <p>Địa chỉ: 175 Tây Sơn,Đống Đa, Hà Nội<br />
            Điện thoại: 0355370909</p>
            <p>Email: <a href="mailto:hieunt621@wru.vn">hieunt621@wru.vn</a></p>
            <p>
                Bạn vui lòng đọc kỹ Chính sách bảo mật thông tin và Điều khoản sử dụng<br/>
            Website đã được thông báo và được chấp nhận bởi Cục TMĐT và CNTT, Bộ Công Thương.
            </p>
            <p>Copyright (c) 2012 ABC</p>
        </div>
    </div>
    
    






</div>
    
</body>
</html>