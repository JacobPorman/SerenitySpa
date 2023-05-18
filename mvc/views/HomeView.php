<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Serenity - Mỹ phẩm hàng đầu tại Đại học Sài Gòn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Style CSS -->

    <!-- Fontawesome CSS -->

    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
    <?php include "./assets/libs/bootstrap/bootstrap.min.css";
    include "./assets/css/style.css";
    include "./assets/css/index.css";
    ?>
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="sticky-top" id="header">
        <div class="container-fluid m-0 p-0">
            <div class="logo text-center p-0 m-0">
                <a href="<?php echo getURL() . "/home" ?>"><img
                        src="<?php echo getURL() . "/assets/image/logo/logo(500x300).png" ?>" alt="SpaLogo" /></a>
            </div>
            <div class="icon">
                <form action="" method="get" id="form-search">
                    <div class="item-icon">
                        <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Search..." />
                            <a href="#" class="search_icon">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                        <div class="shopping-cart">
                            <a href="cart" class="shopping_icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                        <div class="message-user">
                            <?php if ($_SESSION['user']['user_role'] == 'admin') echo "<li><a href=" . getURL() . "/admin" . ">Admin</a>
                            </li>
                            <li><a href=" . getURL() . "/login/logout" . ">Logout</a></li>";
                            else echo "<li>Hello User
                            </li><li><a href=" . getURL() . "/login/logout" . ">Logout</a></li>"; ?>
                        </div>
                    </div>
                </form>
                <!-- <i class="fa-solid fa-cart-shopping"></i> -->
            </div>

            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm justify-content-center">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item px-4">
                        <a class="nav-link" href="<?php echo getURL() . "/intro" ?>">Giới Thiệu</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="<?php echo getURL() . "/product" ?>">Sản Phẩm
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="<?php echo getURL() . "/info" ?>">Thông Tin</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="<?php echo getURL() . "/connect" ?>">Liên Hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- MAIN -->
    <main id="homepage">
        <section class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/image/banner/banner1.jpg" alt="First slide" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/image/banner/banner2.jpg" alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/image/banner/banner3.jpg" alt="Third slide" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/image/banner/banner4.jpg" alt="Third slide" />
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section class="container bestProduct">
            <h1 style="text-transform: uppercase">Sản Phẩm Bán Chạy</h1>
            <div id="myCarousel" class="carousel-product slide" data-ride="slide" data-interval="0">
                <!-- Carousel indicators -->

                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./assets/image/trang-chu/bestproduct_1.png" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="thumb-content">
                                        <h6>Bộ đôi trị nám, trắng da ILUMA x MD</h6>
                                        <p class="item-price">
                                            <strike>$250.00</strike> <span>$199.00</span>
                                        </p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./assets/image/trang-chu/bestproduct_2.png" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="thumb-content">
                                        <h6>Serum trị nám trắng da Intense Facial</h6>
                                        <p class="item-price">
                                            <strike>$25.00</strike> <span>$23.99</span>
                                        </p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./assets/image/trang-chu/bestproduct_3.png" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="thumb-content">
                                        <h6>Tinh chất làm sáng, giảm nếp nhăn MD</h6>
                                        <p class="item-price">
                                            <strike>$120.00</strike> <span>$99.00</span>
                                        </p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star-half-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./assets/image/trang-chu/bestproduct_4.png" class="img-fluid"
                                            alt="" />
                                    </div>
                                    <div class="thumb-content">
                                        <h6>Serum cấp nước - khóa ẩm Vital C</h6>
                                        <p class="item-price">
                                            <strike>$65.00</strike> <span>$50.00</span>
                                        </p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary">Thêm vào giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-seeProductAll">
                        <a href="product"><input type="button" value="Xem tất cả sản phẩm" style="
                    border: none;
                    cursor: pointer;
                    text-transform: uppercase;
                  " /></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="container collection">
            <h1 style="
            text-transform: uppercase;
            text-align: center;
            font-weight: bold;
            margin-top: 50px;
          ">
                Bộ Sưu Tập
            </h1>

            <div class="item-collect">

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/ageless.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Chống lão hóa</p>
                        <h3 style="color: white">AGELESS</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/body-spa.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Chăm sóc da và cơ thể</p>
                        <h3 style="color: white">BODY SPA</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/clear-cell.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Đặc trị mụn - Da dầu</p>
                        <h3 style="color: white">CLEAR CELL</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/i-beauty.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Makeup</p>
                        <h3 style="color: white">I BEAUTY</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/i-mask.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Dưỡng da tại nhà</p>
                        <h3 style="color: white">I MASK</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/iluma.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Sáng da tự nhiên</p>
                        <h3 style="color: white">ILUMA</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/md.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Lão hóa - Nám - Sáng da</p>
                        <h3 style="color: white">IMAGE MD</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/ormedic.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Chăm sóc da từ thiên nhiên</p>
                        <h3 style="color: white">ORMEDIC</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/prevention.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Kem chống nắng</p>
                        <h3 style="color: white">PREVENTION</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/the-max.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0">
                        <p>Chống lão hóa - Phục hồi</p>
                        <h3 style="color: white">THE MAX</h3>
                    </div>
                </div>

                <div class="item-img" style="position: relative">
                    <a href="<?php echo getURL() . "/product" ?>">
                        <img src="./assets/image/product/vital-c.jpg" alt="" />
                    </a>
                    <div class="item-text" style="position: absolute; top: 0px">
                        <p>Da nhạy cảm và phục hồi tổn thương</p>
                        <h3 style="color: white">VITAL C</h3>
                    </div>
                </div>
            </div>
            <div class="btn-seeProductAll" style="text-align: center; margin-top: 100px">
                <a href="<?php echo getURL() . "/product" ?>"><input type="button" value="Xem tất cả sản phẩm"
                        style="border: none; cursor: pointer; text-transform: uppercase" /></a>
            </div>
        </section>

        <div class="cover-border" style="border-top: 1px solid black; margin: 50px 0; padding: 0 0 50px 0">
            <section class="container followus">
                <h1 style="
              text-transform: uppercase;
              text-align: center;
              font-weight: bold;
              margin-top: 50px;
            ">
                    Theo Dõi Chúng Tôi Trên Instagram
                </h1>

                <div class="image-flwus">
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-1.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-2.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-3.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-4.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-5.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-6.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-7.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-img-flwus">
                        <a href="<?php echo getURL() . "/product" ?>">
                            <img src="./assets/image/product/flwus-8.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="cover-footer">
            <div class="content-footer" style="text-align: justify">
                <div class="col-footer">
                    <img src="./assets/image/logo/logo(500x300).png" alt="" />
                    <div class="icon-footer">
                        <div>
                            <a href="https://www.facebook.com/hungnguyen130"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <div>
                            <a href="https://www.instagram.com/khianhyeu_trieutraitimtanvo_/"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </div>
                        <div>
                            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="text-1">
                        <p>
                            <strong>Mã số thuế:</strong> 0316725309. Do sở kế hoạch và đầu
                            tư Thành phố Hồ Chí Minh cấp ngày 02/03/2021
                        </p>
                        <p>
                            <strong>Địa chỉ:</strong> Tầng 1, 207A Nguyễn Văn Thủ, phường Đa
                            Kao, Quận 1, TPHCM
                        </p>
                    </div>
                </div>
                <div class="col-footer" style="border-left: 1px solid rgba(4, 4, 4, 0.475)">
                    <p class="title">
                        MAI HÂN GROUP ĐẠI LÝ PHÂN PHỐI CHÍNH THỨC IMAGE SKINCARE VIỆT NAM
                    </p>
                    <p>
                        <strong>Showroom HCM:</strong> 166 Nguyễn Văn Thương (D1 cũ), P25,
                        Bình Thạnh, TPHCM
                    </p>
                    <p><strong>Điện thoại:</strong> 070 766 1676</p>
                </div>
                <div class="col-footer">
                    <p class="title">THỜI GIAN LÀM VIỆC</p>
                    <p>Thứ 2 - Chủ nhật: 8h00 - 18h00</p>

                    <p class="title">TIẾP ĐIỆN THOẠI NGOÀI GIỜ</p>
                    <p>Đến 23h30 hàng ngày</p>
                </div>
                <div class="col-footer">
                    <p class="title">HỖ TRỢ KHÁCH HÀNG</p>
                    <p><a href="" class="link">Chính sách bảo mật thanh toán</a></p>
                    <p><a href="" class="link">Hình thức thanh toán</a></p>
                    <p><a href="" class="link">Chính sách giao hàng</a></p>
                    <p><a href="" class="link">Chính sách đổi trả hàng</a></p>
                    <p><a href="" class="link">Cam kết chất lượng dịch vụ</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->

    <script type="module" src="./js/module.js"></script>


    <script>
    <?php include "./assets/libs/bootstrap/bootstrap-jQ.min.js";
        include "./assets/libs/bootstrap/popper.min.js";
        include "./assets/libs/bootstrap/bootstrap.min.js";


        include "./assets/js/main.js";
        include "./assets/js/index.js";



        ?>
    </script>
</body>

</html>