<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản phẩm</title>

    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
        <?php include "./assets/libs/bootstrap/bootstrap.min.css";
        include "./assets/css/style.css";
        include "./assets/css/product.css";
        ?>
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="sticky-top" id="header">
        <div class="container-fluid m-0 p-0">
            <div class="logo text-center p-0 m-0">
                <a href="home"><img src="./assets/image/logo/logo(500x300).png" alt="SpaLogo" /></a>
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
                    </div>
                </form>
                <!-- <i class="fa-solid fa-cart-shopping"></i> -->
            </div>

            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm justify-content-center">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item px-4">
                        <a class="nav-link" href="intro">Giới Thiệu</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="product">Sản Phẩm
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="info">Thông Tin</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="connect">Liên Hệ</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container product-page">
            <div class="row">
                <section class="cate-side col-3">
                    <div class="title" style="text-transform: uppercase; font-weight: bold">
                        Danh mục sản phẩm
                    </div>

                    <div class="cate-list">
                        <ol class="list">
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                            <li class="item">
                                <a href="#">
                                    <span class="text-1">Chăm sóc mắt</span>
                                    <span class="text-2">7</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </section>
                <section class="product-side col-9">
                    <div class="nav-product">
                        <ol>
                            <li class="breadcumb-item">
                                <a href="home" target="_blank">Trang chủ&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            </li>
                            &frasl;
                            <li class="breadcumb-item" style="font-weight: bold">
                                Sản phẩm
                            </li>
                        </ol>
                    </div>

                    <div class="product-list">
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                        <div class="product-item">
                            <a href="#">
                                <img src="./assets/image/product/product-1.jpg" alt="" class="img" />
                                <p class="bl-1">1.485.000</p>
                                <h3 class="text-3">
                                    Kem trị thâm quầng mắt Image Vital C Hydrating Eyye Recovery
                                    Gel
                                </h3>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
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
                            <a href="https://www.instagram.com/khianhyeu_trieutraitimtanvo_/"><i class="fa-brands fa-instagram"></i></a>
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

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script>
        <?php include "./assets/libs/bootstrap/bootstrap-jQ.min.js";
        include "./assets/libs/bootstrap/popper.min.js";
        include "./assets/libs/bootstrap/bootstrap.min.js";


        include "./assets/js/main.js";
        ?>
    </script>
</body>

</html>