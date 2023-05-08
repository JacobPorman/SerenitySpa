<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Thongtin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Style CSS -->


    <style>
    <?php include "./assets/libs/font-awesome/css/fontawesome.min.css";
    include "./assets/libs/bootstrap/bootstrap.min.css";
    include "./assets/css/admin.css";
    include "./assets/css/index.css";
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

        <div class="container content">
            <div class="title-cont">
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                    </div>
                    <div class="col-lg-6">
                        <h3>
                            <b>
                                Happy Vietnamese’s Women Day 20/10: Trao quà tặng thêm gắn kết

                            </b>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4">
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            TOP 3+ Serum Trị Nám Image Skincare Được Ưa Chuộng Nhất Hiện Nay
                        </h4>
                        <p class="text-2">
                            Nám là quá trình tăng sắc tố hoặc rối loạn sắc tố melanin gây ra. Nhẹ thì chúng khiến màu da
                            của chúng ta
                            trở nên xỉn màu, nặng thì trở thành nám từ nám đốm, nám mảng nặng thì loang ra khắp mặt.
                        </p>
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            Salicylic Acid (BHA) và Benzoyl Peroxide| có hiệu quả cho da mụn không? </h4>
                        <p class="text-2">
                            Cách sử dụng Salicylic Acid và Benzoyl Peroxide trong điều trị mụn bọc, mụn sưng viêm, sợi
                            bã nhờn hay mụn
                            ẩn một cách dễ dàng, thuận tiện nhất mà bạn có thể áp dụng. Cùng liệu trình kết hợp với các
                            sản phẩm phù
                            hợp, giúp bạn tối giản các bước skincare nhưng vẫn giúp mụn được giảm đi trông thấy.
                        </p>
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            Review Hush & Hush trị rụng tóc có tốt không? Top 4 sản phẩm được yêu thích nhất
                        </h4>
                        <p class="text-2">
                            Là thương hiệu thực phẩm chức năng hàng đầu tại Mỹ, Hush and Hush luôn tập trung mang tới
                            các sản phẩm
                            giúp hỗ trợ cải thiện sức khỏe và chăm sóc làn da, mái tóc. Trong đó, các sản phẩm thuộc
                            dòng chăm sóc tóc
                            Deeply Rooted của thương hiệu này đang cực kỳ được yêu thích và review tích cực. Nhiều chị
                            em muốn sử dụng
                            nhưng băn khoăn, liệu thực sự sản phẩm Hush and Hush trị rụng tóc có tốt không hay chỉ là
                            quảng cáo? Hãy
                            cùng xem review chi tiết dưới đây để có câu trả lời nhé!
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            Bật Mí Cách Trị Nám, Tàn Nhang Lâu Năm Cho Cả Làn Da Mỏng Yếu
                        </h4>
                        <p class="text-2">
                            Laser, lăn kim có thể giúp các đốm nâu, tàn nhang hết nhanh chóng tuy nhiên cũng để lại
                            những hậu quả hay
                            tác dụng phụ khó tránh khỏi. Tuy nám da không ảnh hưởng nhiều đến sức khỏe của bạn nhưng
                            chúng đem lại
                            không ít sự tự ti về vẻ ngoài cho phái đẹp. Vậy đâu là giải pháp dành cho làn da nám của
                            bạn?
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            Review các loại kem chống nắng Image Prevention+ dành cho mọi loại da
                        </h4>
                        <p class="text-2">
                            Image Prevention+ là dòng kem chống nắng được ưa chuộng nhất, đặc biệt đối với da đang
                            treatment, bong
                            tróc. Da bạn sẽ được bảo vệ tối đa khỏi tia UVA, UVB, thỏa sức vui chơi ngày nắng nóng.
                        </p>
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            HUSH & HUSH| RA MẮT DÒNG SẢN PHẨM MỚI DEEPLYROOTED - CHĂM SÓC
                        </h4>
                        <p class="text-2">
                            Ngày 12.06 vừa qua, Hush & Hush đã cho ra mắt 3 dòng sản phẩm DeeplyRooted chăm sóc tóc từ
                            gốc đến ngọn.
                            Với sự góp mặt của Nhà sáng lập Hush & Hush và IMAGE Skincare cùng hơn 300 khách mời là các
                            chuyên gia,
                            bác sĩ và đối tác của Hush & Hush.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            TOP 3+ Serum Trị Nám Image Skincare Được Ưa Chuộng Nhất Hiện Nay
                        </h4>
                        <p class="text-2">
                            Bên cạnh việc ứng dụng máy móc và công nghệ cao vào quá trình điều trị nám như: laser, lăn
                            kim để điều trị
                            nám thì các phương pháp điều trị nám dân gian, thiên nhiên cũng được các chị em ưa chuộng.
                            Tìm hiểu sâu
                            hơn về cách trị nám, tàn nhang tại nhà chúng ta có thể dễ dàng tìm thấy các loại vitamin có
                            khả năng làm
                            sáng, ức chế hình thành melanin giảm nám.
                        </p>
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            Mụn ẩn là gì? Cách nhận diện mụn ẩn và điều trị mụn ẩn với Salicylic Acid - BHA
                        </h4>
                        <p class="text-2">
                            Thời tiết nắng nóng ngày hè là lúc bã nhờn tiết ra nhiều hơn gây nên mụn, đặc biệt là mụn
                            ẩn. Mụn ẩn tuy
                            khó trị, nhưng biết cách chọn và làm sạch đúng cách sẽ giúp bạn nhẹ nhàng loại bỏ đi nguyên
                            nhân và diệt
                            trừ các dầu mụn hiệu quả hơn.
                        </p>
                    </div>
                    <div class="list-cont">
                        <img src="./assets/image/product/ageless.jpg" alt="123">
                        <h4>
                            TOP 4 KEM CHỐNG NẮNG IMAGE SKINCARE PHIÊN BẢN MỚI NHẤT HIỆN NAY
                        </h4>
                        <p class="text-2">
                            Kem chống nắng dòng Prevention+ và MD là 2 phiên bản mới nhất, đã cải tiến không ngừng và
                            được đón nhận
                            trong những tháng gần đây. Cùng theo dõi bài viết dưới đây để phân biệt và biết được những
                            update mới nhất
                            về thành phần, chất kem nhé!
                        </p>
                    </div>
                </div>
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
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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