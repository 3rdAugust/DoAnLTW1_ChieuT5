<?php
require "app/search.php";
$search = new search();
$keyword = $_GET['key'];
$per_page = 8;
$total_rows = $search->countSearched($keyword);
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else
    {
        $page = 1;
    }
    $data = $search->searchProduct($keyword, $page, $per_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <title>Tìm kiếm</title>
</head>
<body>

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
                    <li><a href="#">Giỏ hàng</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
        
    </header>
    <div class="container">
        <div>
            <h1 class="title">Kết quả tìm kiếm (<?php echo $total_rows?>)</h1>
        </div>
        <div class="row">
            <?php 
                foreach($data as $row)
                {
            ?>
                <div class="col-md-3" align="center">
                    <img src="public/img/<?php echo $row['brand']."/".$row['img']?>" class="hinhSP">
                        <h4><?php echo $row['name']?></h4>
                            <b>Price:</b>
                            <div class = "price">
                            <?php echo $row['price']?>
                            </div>
                            <b>VND</b>
                        <div>
                            <a class="btn btn-primary" href="#" role="button">Thêm vào giỏ</a>
                            <hr>
                        </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Pagination -->
    <div align="center">
                <ul class="pagination pagination-lg" id="page-list">
                    <?php 
                    $base_url = $_SERVER['PHP_SELF']."?key=$keyword&";
                    echo $search->create_links($base_url, $total_rows, $page, $per_page);
                    ?>
                </ul>
            </div>
    <!-- Footer -->
    <footer>
        <p>© 2018 Đồ án Lập trình web - Lớp chiều thứ 5</p>

    </footer>
    <script src="public/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>