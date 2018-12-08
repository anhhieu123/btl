<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="flexslider.css"/>
    <link rel="stylesheet" type="text/css" href="login.css"/>
</head>
<body>
<div id="wedsite">
    <div id="top">
        <div id="top-left">
                <ul>
                    <li>
                        <a href="#"><img src="hinhanh/facebook-24.png" alt="Facebook" /></a>
                        <a href="#"><img src="hinhanh/gmail-24.png"  alt="Gmail" /> </a>
                    </li>
                </ul>
        </div>

        <div id="top-right">
                <ul>
                    <li> <a href="#"><img src="hinhanh/dangnhap.png" alt="Dang nhap" /></a></li>
                    <li>|</li>
                    <li> <a href="dangnhap.html">Đăng nhập</a></li>
                    <li>|</li>
                    <li> <a href="#">Đăng kí</a></li>
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
                        <button type="submit" id="search-button"</button>
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
    <div id="header">
        <div class="content">
            <div id="dangnhap">
                    <img src="hinhanh/login1.png" width="599" > 
                    <div class="loginbox">
                        <form action="method='post'">
                            <p>Tài khoản</p>
                            <input type="text" name="username" placeholder="Mời nhập tên" />
                            <p>Mật khẩu</p>
                            <input type="password" name="pass" placeholder="Mời nhập mật khẩu" />
                            <input type="submit" name="submit" value="Đăng nhập" />
                            <div id="sdt1"><a href="#">Tiếp tục với Facebook</a> </div>
                            <br/>
                            <a href="#"> Quên mật khẩu?</a><br/>
                        </form>
                    </div>
            </div>
        </div>
        <div class="sidebar">
            <div id="logo_tintuc"> <img src="hinhanh/tintuc.png" width="400" height="54" alt="Tin Tức nổi bật"></div>
            <div id="Tintuc">
                    <ul>
                      <li>
                        <a href="#" >>>Chuyên đề và bài tập Hóa vô cơ 11 Chương 3 Nhóm Cacbon, Silic có đáp án</a>
                      </li>
                      <li>
                        <a href="#" >>>Cuộc thi “Khoảnh Khắc Cô Thầy” - Tri ân thầy cô cùng Baitap123</a> 
                      </li>
                      <li>
                          <a href="#">>>Đề thi thử THPT Quốc gia lần 1 môn Toán trường THPT Ngô Sỹ Liên</a> 
                      </li>
                      <li>
                        <a href="#">>>Đề thi thử THPT Quốc gia lần 1 môn Hóa học THPT Lê Duẩn</a>
                      </li>
                      <li>
                        <a href="#">>>Đề thi thử THPT Quốc gia lần 1 môn Toán trường THPT Vĩnh Yên</a>
                        </li>
                      <li>
                       <a href="#">>>Đề thi thử THPT Quốc gia lần 1 môn Toán trường THPT Vĩnh Yên</a>
                      </li>
                    </ul>
              </div>
              <div style="margin-top:20px"> <img src="hinhanh/docnhieiu.png" width="400" height="52"  alt="Đọc nhiều nhất"></div>
              <div id="Tintuc"> 
                 <ul>
                     <li>
                       <a href="#" >>>Tất tần tật bộ sơ đồ tư duy môn Văn dành cho ôn thi THPT Quốc gia 2017</a>>
                     </li>
                     <li>
                       <a href="#">>>Hot: Một số câu hỏi và đáp án trả lời nhanh môn Lịch sử cần lưu ý</a> 
                     </li>
                     <li>
                       <a href="#" >Khối D07 - sự lựa chọn mới và hấp dẫn đối với bạn?</a>
                     </li>
                     <li>
                       <a href="#">>>Đáp án lời giải chi tiết đề thi minh họa THPT Quốc gia 2018 môn Hóa học</a> 
                     </li>
                     <li>
                       <a href="#">>>Đáp án lời giải chi tiết đề thi minh họa THPT Quốc gia 2018 môn Toán</a>
                     </li>
                 </ul>
               </div>
        </div>

    </div>
    <div id="footer">
        a
    </div>
    
    






</div>
    
</body>
</html>