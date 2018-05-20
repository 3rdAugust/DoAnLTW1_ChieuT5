<?php 
	require "app/users.php";
	session_start();
    if(isset($_SESSION['user'])){
        header('location: index.php');
    }
	$users = new users();
	$error = "";
	if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($users->login($username, $password)){
			$_SESSION['user'] = $username;
			header('location:./');
		}
		else{
			$error = "Sai tài khoản hoặc mật khẩu";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Liên hệ</title>
</head>
<body>
    <!-- Header -->
    <header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Navbar -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Trang chủ</a>
            </div>
            
            <!-- Dropdown Brands -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                        <ul class="dropdown-menu">
                            <li><a href="products.php?brand=Apple">Apple</a></li>
                            <li><a href="products.php?brand=Samsung">Samsung</a></li>
                            <li><a href="products.php?brand=Xiaomi">Xiaomi</a></li>
                            <li><a href="products.php?brand=Oppo">Oppo</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Liên hệ</a></li>
                </ul>
            <!-- Form tim kiem -->
            <form action="search.php" class="navbar-form navbar-left" role="search" method="GET">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nhập từ khoá..." name="key">
                </div>
                <button type="submit" class="btn btn-default">Tìm</button>
            </form>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php">Giỏ hàng</a></li>
                    <?php
                     if (isset($_SESSION['user']))
                     {
                         if ($_SESSION['user'] == 'admin')
                             echo '<li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin</a>
                             <ul class="dropdown-menu">
                                 <li><a href="products.php?brand=Apple">Apple</a></li>
                                 <li><a href="products.php?brand=Samsung">Samsung</a></li>
                                 <li><a href="products.php?brand=Xiaomi">Xiaomi</a></li>
                                 <li><a href="products.php?brand=Oppo">Oppo</a></li>
                             </ul>
                         </li>';
                     
                         else
                             echo '<li><a href="cart.php">Giỏ hàng</a></li>';
                     }
                     else
                             echo '<li><a href="cart.php">Giỏ hàng</a></li>';
                             
                     if(isset($_SESSION['user'])){
                         $logout = '<li><a href="logout.php">Đăng xuất</a></li>';
                         echo $logout;
                     }
                     else{
                         $login = '<li><a href="login.php">Đăng nhập</a></li>';
                         echo $login;
                     }
                     ?>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
        
    </header>
    <!-- Content -->
    <div class="container">
    	<div>
            <h1 class="title">Đăng nhập</h1>
        </div>
     
        <div class = "login">
        	 <form action="login.php" method="POST">
			        <input type="text" name="username" class="form-control login-form" placeholder="Tên tài khoản" required autofocus>
			        <input type="password" name="password" class="form-control login-form" placeholder="Mật khẩu" required>
		      <span class="error login-form"><?php echo $error ?></span>
        <button class="btn btn-lg btn-primary btn-block login-form" type="submit">Sign in</button>
      </form>
        </div>
    </div> <!-- /container -->

    <!-- Footer -->
    <div class="footer-top">
    <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>Shop</span></h2>
                        <ul class="list-unstyled">
                            <li><h4>Phạm Ngọc Huy Duy</h4></li>
                            <li><h4>Cao Lê Viết Tiến</h4></li>
                            <li><h4>Lê Thanh Thiện</h4></li>
                        </ul>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh sách</h2>
                        <ul>
                            <li><a href="products.php?brand=Apple">Apple</a></li>
                            <li><a href="products.php?Samsung">Samsung</a></li>
                            <li><a href="products.php?Xiaomi">Xiaomi</a></li>
                            <li><a href="products.php?Oppo">Oppo</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Chức năng</h2>
                        <ul>
                            <li><a href="cart.php">Giỏ hàng</a></li>
                            <li><a href="admin.php">Trang Admin</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>