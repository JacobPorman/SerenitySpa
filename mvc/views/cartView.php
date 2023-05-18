<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
    <?php include "./assets/libs/bootstrap/bootstrap.min.css";
    include "./assets/css/style.css";
    include "./assets/css/cart.css";
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


    <section class="cart">
        <div class="container">
            <h2 class="title_1">Đặt hàng</h2>
        </div>
        <div class="container checkout">

            <div class="item_1">
                <form action="" id="form_send">
                    <div class="customer_info">
                        <h4 class="title_2">
                            <b>THÔNG TIN KHÁCH HÀNG</b>
                        </h4>

                        <hr class="hr1">
                        <hr>

                        <label for="input-id">Họ và tên: * </label>
                        <input type="text" name="customer_fullname" id="customer_fullname" value class="form-control"
                            required>

                        <label for="input-id">Điện thoại: * </label>
                        <input type="text" name="customer_phone" id="customer_phone" value class="form-control"
                            required>

                        <label for="input-id">Thành phố: * </label>
                        <select id="provinces" name="provinces" class="form-control" autocomplete="off">
                            <option value="">--Thành phố--</option>
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="An Giang">An Giang</option>
                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                            <option value="Bình Dương">Bình Dương</option>
                            <option value="Bình Phước">Bình Phước</option>
                            <option value="Bình Thuận">Bình Thuận</option>
                            <option value="Bình Định">Bình Định</option>
                            <option value="Bạc Liêu">Bạc Liêu</option>
                            <option value="Bắc Giang">Bắc Giang</option>
                            <option value="Bắc Kạn">Bắc Kạn</option>
                            <option value="Bắc Ninh">Bắc Ninh</option>
                            <option value="Bến Tre">Bến Tre</option>
                            <option value="Cao Bằng">Cao Bằng</option>
                            <option value="Cà Mau">Cà Mau</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Điện Biên">Điện Biên</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Đắk Lắk">Đắk Lắk</option>
                            <option value="Đắk Nông">Đắk Nông</option>
                            <option value="Đồng Nai">Đồng Nai</option>
                            <option value="Đồng Tháp">Đồng Tháp</option>
                            <option value="Gia Lai">Gia Lai</option>
                            <option value="Hoà Bình">Hoà Bình</option>
                            <option value="Hà Giang">Hà Giang</option>
                            <option value="Hà Nam">Hà Nam</option>
                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Hậu Giang">Hậu Giang</option>
                            <option value="Khánh Hòa">Khánh Hòa</option>
                            <option value="Kiên Giang">Kiên Giang</option>
                            <option value="Kon Tum">Kon Tum</option>
                            <option value="Lai Châu">Lai Châu</option>
                            <option value="Long An">Long An</option>
                            <option value="Lào Cai">Lào Cai</option>
                            <option value="Lâm Đồng">Lâm Đồng</option>
                            <option value="Lạng Sơn">Lạng Sơn</option>
                            <option value="Nam Định">Nam Định</option>
                            <option value="Nghệ An">Nghệ An</option>
                            <option value="Ninh Bình">Ninh Bình</option>
                            <option value="Ninh Thuận">Ninh Thuận</option>
                            <option value="Phú Thọ">Phú Thọ</option>
                            <option value="Phú Yên">Phú Yên</option>
                            <option value="Quảng Bình">Quảng Bình</option>
                            <option value="Quảng Nam">Quảng Nam</option>
                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                            <option value="Quảng Ninh">Quảng Ninh</option>
                            <option value="Quảng Trị">Quảng Trị</option>
                            <option value="Sóc Trăng">Sóc Trăng</option>
                            <option value="Sơn La">Sơn La</option>
                            <option value="Thanh Hóa">Thanh Hóa</option>
                            <option value="Thái Bình">Thái Bình</option>
                            <option value="Thái Nguyên">Thái Nguyên</option>
                            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                            <option value="Tiền Giang">Tiền Giang</option>
                            <option value="Trà Vinh">Trà Vinh</option>
                            <option value="Tuyên Quang">Tuyên Quang</option>
                            <option value="Tây Ninh">Tây Ninh</option>
                            <option value="Vĩnh Long">Vĩnh Long</option>
                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                            <option value="Yên Bái">Yên Bái</option>
                        </select>

                        <label for="input-id">Địa chỉ: * </label>
                        <textarea name="address" id="input" class="form-control" rows="3"
                            required="required"></textarea>
                    </div>

                    <div class="payment">
                        <h4 class="title_2">
                            <b>PHƯƠNG THỨC THANH TOÁN</b>
                        </h4>

                        <hr class="hr1">
                        <hr>

                        <ul>
                            <li>
                                <input type="radio" id="cast" name="momo" value="">
                                <label for="cast">
                                    <div class="check"></div>
                                    Thanh toán khi nhận hàng
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="momo" name="momo" value="MOMO">
                                <label for="momo">
                                    <div class="check" style="top: 24px;"></div>
                                    Ví MOMO
                                    <img src="https://imagevietnam.vn/template/maihan/image/momo.png"
                                        style="height: 50px;margin-left: 10px;">
                                </label>
                            </li>
                            <li>
                            <li class="vnpay_payment">
                                <input type="radio" id="vnpayqr" name="momo" value="VNPAYQR">
                                <label for="vnpayqr">
                                    <div class="check" style="top: 24px;"></div>
                                    <p class="t_1">VNPayQR</p>
                                    <img src="https://imagevietnam.vn/template/maihan/image/CTT-VNPAY-QR.png"
                                        style="height: 40px;margin-left: 10px;">
                                </label>
                            </li>
                            </li>
                            <li>
                            <li class="vnpay_payment">
                                <input type="radio" id="vnbank" name="momo" value="VNBANK">
                                <label for="vnbank">
                                    <div class="check" style="top: 24px;"></div>
                                    <p class="t_1">ATM nội địa</p>
                                    <img src="https://imagevietnam.vn/template/maihan/image/vnpay_bank.svg"
                                        style="height: 40px;margin-left: 10px;">
                                </label>
                            </li>
                            </li>
                            <li>
                            <li class="vnpay_payment">
                                <input type="radio" id="intcard" name="momo" value="INTCARD">

                                <label for="intcard">
                                    <div class="check" style="top: 24px;"></div>
                                    <p class="t_1">VISA - MasterCard</p>
                                    <img src="https://imagevietnam.vn/template/maihan/image/vnpay_intcard.svg"
                                        style="height: 40px;margin-left: 10px;">
                                </label>
                            </li>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="item_2">
                <div class="order_checkout">
                    <h4>
                        <b>CHI TIẾT GIỎ HÀNG</b>
                    </h4>
                    <hr class="hr1">
                    <hr>
                    <div class="product_details">
                        <div class="product_img">
                            <a
                                href="https://imagevietnam.vn/san-pham/gel-cham-mun-image-clear-cell-clarifying-salicylic-blemish-gel.html">
                                <img src="https://imagevietnam.vn/images/files/Thi/clear-cell/clear-cell-blemish-gel.jpg"
                                    alt="" class="img-responsive"
                                    title="Gel chấm mụn Image Clear Cell Clarifying Salicylic Blemish Gel ">
                            </a>
                            <div class="delete">
                                <a href="https://imagevietnam.vn/gio-hang/delete/29027/">
                                    <img src="https://imagevietnam.vn/template/maihan/image/xoa.png" alt=""
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="product_detail">

                            <a
                                href="https://imagevietnam.vn/san-pham/gel-cham-mun-image-clear-cell-clarifying-salicylic-blemish-gel.html">
                                <p class="product_name">Gel chấm mụn Image Clear Cell Clarifying Salicylic Blemish Gel
                                </p>
                            </a>

                            <p class="product_price">
                                <b>751.500</b>
                            </p>

                            <div class="product_quantity">

                                <span class="change_quantity-btn">
                                    <button onclick="changeQuantity(this, -1)">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </span>

                                <input type="text" value="1" class="quantity">

                                <span class="change_quantity-btn">
                                    <button onclick="changeQuantity(this, 1)">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <hr>
                    </div>

                    <div class="product_details">
                        <div class="product_img">
                            <a
                                href="https://imagevietnam.vn/san-pham/gel-cham-mun-image-clear-cell-clarifying-salicylic-blemish-gel.html">
                                <img src="https://imagevietnam.vn/images/files/Thi/clear-cell/clear-cell-blemish-gel.jpg"
                                    alt="" class="img-responsive"
                                    title="Gel chấm mụn Image Clear Cell Clarifying Salicylic Blemish Gel ">
                            </a>
                            <div class="delete">
                                <a href="https://imagevietnam.vn/gio-hang/delete/29027/">
                                    <img src="https://imagevietnam.vn/template/maihan/image/xoa.png" alt=""
                                        class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="product_detail">

                            <a
                                href="https://imagevietnam.vn/san-pham/gel-cham-mun-image-clear-cell-clarifying-salicylic-blemish-gel.html">
                                <p class="product_name">Gel chấm mụn Image Clear Cell Clarifying Salicylic Blemish Gel
                                </p>
                            </a>

                            <p class="product_price">
                                <b>751.500</b>
                            </p>

                            <div class="product_quantity">
                                <span class="change_quantity-btn">
                                    <button onclick="changeQuantity(this, -1)">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </span>

                                <input type="text" value="1" class="quantity">

                                <span class="change_quantity-btn">
                                    <button onclick="changeQuantity(this, 1)">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="total_price">
                        <div class="total1">
                            <span><b>Tổng cộng: </b></span>
                        </div>
                        <div class="total2">
                            <span><b id="total_price"></b></span>
                        </div>
                    </div>

                </div>

                <div class="order_confirm">
                    <button type="submit" value="">
                        <b>Xác nhận đơn hàng</b>
                    </button>
                </div>
            </div>

        </div>
    </section>

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


    <script>
    <?php include "./assets/libs/bootstrap/bootstrap-jQ.min.js";
        include "./assets/libs/bootstrap/popper.min.js";
        include "./assets/libs/bootstrap/bootstrap.min.js";


        include "./assets/js/main.js";
        include "./assets/js/cart.js";



        ?>
    </script>
</body>

</html>