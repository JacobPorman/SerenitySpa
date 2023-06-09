<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['user']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Liên hệ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Style CSS -->


    <link rel="stylesheet" href="http://localhost/Spa/assets/libs/font-awesome/css/all.min.css">


    <style>
        <?php include "./assets/libs/bootstrap/bootstrap.min.css";
        include "./assets/css/style.css";
        include "./assets/css/lienhe.css";
        ?>
    </style>
</head>

<body>
    <!-- HEADER -->
    <header class="sticky-top" id="header">
        <div class="container-fluid m-0 p-0">
            <div class="logo text-center p-0 m-0">
                <a href="<?php echo getURL() . "/home" ?>"><img src="<?php echo getURL() . "/assets/image/logo/logo(500x300).png" ?>" alt="SpaLogo" /></a>
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
    <main>
        <div class="container">
            <div class="map" id="map" style="width:100%;height:500px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.105804878304!2d106.71803137490824!3d10.803207889347203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a6df63ab19%3A0x777eface27865ce8!2zMTY4IE5ndXnhu4VuIFbEg24gVGjGsMahbmcsIFBoxrDhu51uZyAyNSwgQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oIDcwMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1680249276952!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="content">
                <div class="content-address">
                    <h3>ĐỊA CHỈ</h3>
                    <p>
                        <b>
                            CÔNG TY TNHH SERENITY SKINCARE VIỆT NAM
                            <br>
                        </b>
                        <b>Showroom</b>
                        : 166 Đường Nguyễn Văn Thương (D1 cũ), P.25, Q.Bình Thạnh,TP HCM.
                        <br>
                    </p>
                    <div class="phone">
                        <b>
                            <p>
                                Hotline - 0934003822
                            </p>
                        </b>
                    </div>
                </div>
                <div class="form-information">
                    <h3>NHẬN THÔNG TIN</h3>
                    <div class="form">
                        <div class="input-text">
                            <label for="name">Nhập họ Tên:</label>
                            <input type="text" value="" id="name_tv" required>
                        </div>
                        <div class="input-text">
                            <label for="email">Nhập Email:</label>
                            <input type="text" value="" id="email" required>
                        </div>
                        <div class="input-text">
                            <label for="phone">Nhập SĐT:</label>
                            <input type="text" value="" id="phone" required>
                        </div>
                    </div>
                    <textarea name="note" id="note" required></textarea>
                    <input type="button" value="Hủy" id="clear">
                    <input type="submit" id="submitLienhe" value="Gửi">
                </div>
            </div>
            <div class="support">
                <div class="support-services">
                    <h3>DỊCH VỤ HỖ TRỢ</h3>
                    <p>Với dịch vụ hổ trợ trực tuyến, Quý khách hàng sẽ chủ động thao tác khá đơn giản để hỗ trợ việc sử
                        dụng Internet theo mong muốn của mình.
                        Vì thế, các dịch vụ này sẽ giúp quý khách tương tác trực tiếp với imagevietnam.vn nhằm tiết kiệm
                        tối đa chi phí, thời gian. Chỉ cần một
                        cú nhấp chuột là bạn đã thực hiện giao dịch thành công và imagevietnam.vn sẽ giao hàng tận nơi.
                        Xin chân thành cảm ơn.</p>
                </div>
                <div class="counsel">
                    <div class="cashier">
                        <div>
                            <img src="./assets/image/lien-he/e652983af541071f5e50.jpg">
                            <span style="font-size: 13px;">MS. Thủy</span>
                            <br>
                            <span style="font-size: 13px;font-style: italic;">Tư vấn - Bán hàng</span>
                        </div>
                        <div>
                            <img src="./assets/image/lien-he/556a0a54672f9571cc3e.jpg">
                            <span style="font-size: 13px;">MS. Thúy</span>
                            <br>
                            <span style="font-size: 13px;font-style: italic;">Tư vấn - Bán hàng</span>
                        </div>
                        <div>
                            <img src="./assets/image/lien-he/d7a98d71e10a13544a1b.jpg">
                            <span style="font-size: 13px;">MS. Anh</span>

                            <br>
                            <span style="font-size: 13px;font-style: italic;">Chăm sóc khách hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="cover-footer">
            <div class="content-footer">
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
                <div class="col-footer">
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
        ?>
    </script>
</body>

</html>