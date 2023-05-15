<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Giới thiệu</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
    <?php include "./assets/libs/bootstrap/bootstrap.min.css";
    include "./assets/css/style.css";
    include "./assets/css/gioi-thieu.css";
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
                            <?php if ($_SESSION['username']['user_role'] == 'admin') echo "<li><a href=" . getURL() . "/admin" . ">Admin</a>
                            </li>
                            <li><a href=" . getURL() . "/login/logout" . ">Logout</a></li>";
                            else echo "<li><a href=" . getURL() . "/login/logout" . ">Logout</a></li>"; ?>
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
        <div class="header-main">
            <div class="left-head">
                <img class="logo" src="./assets/image/logo/logo(500x300).png" alt="" />
                <h1>TỪ ĐIỂM BẮT ĐẦU TỚI ĐÍCH ĐẾN LÀ LÀN DA KHỎE MẠNH!</h1>
                <p>
                    IMAGE Skincare là một thương hiệu dược mỹ phẩm được tạo ra – ngay từ
                    những bước đầu tiên – với mục tiêu trở thành một thương hiệu chăm
                    sóc da chuyên nghiệp. Điểm khác biệt của chúng tôi là quan trọng
                    tính khoa học hơn là đuổi theo mốt, hiệu quả hơn là xu hướng. Và sau
                    nhiều năm trên thị trường, chúng tôi tự hào rằng: các sản phẩm chứng
                    nhận lâm sàng và liệu pháp điều trị của chúng tôi đã nhận được hàng
                    ngàn khách hàng trải nghiệm và phản hồi, đạt được các giải thưởng
                    danh giá, và được tin dùng của hơn 20,000 chuyên viên chăm sóc da
                    xuyên hơn 60 nước và các châu lục.
                </p>
            </div>
            <div class="right-head">
                <img src="./assets/image/gioi-thieu/mau-nu-2-420x500.png" alt="" />
            </div>
        </div>
        <div class="mid-main">
            <div class="top-mid-main">
                <div class="left-mid">
                    <img src="./assets/image/gioi-thieu/mau-nu-768x1157.png" alt="" />
                </div>
                <div class="right-mid">
                    <p>
                        Chúng tôi hiểu rõ hơn bất kì ai rằng: làn da của bạn luôn thay đổi
                        và luôn thích ứng với cuộc sống muôn màu-muôn vẻ. Vậy nên chúng
                        tôi chọn dùng các thành phần hoạt tính, thực vật thông minh và
                        công nghệ tân tiến nhất để tạo ra các liệu trình điều trị hiệu quả
                        cho tất cả loại da, tình trạng và vấn đề. Nâng tầm và đem đến các
                        công thức dược mỹ phẩm an toàn, không chỉ giới hạn trong các nhu
                        cầu cơ bản. Đem đến cho bạn một trải nghiệm chăm sóc da dành cho
                        bạn, hiểu bạn – và đồng hành với bạn qua từng thay đổi, dù là nhỏ
                        nhất trong cuộc sống.
                    </p>
                    <div class="list-radiusimg">
                        <div>
                            <img src="./assets/image/gioi-thieu/icon-tron-1-150x150.png" alt="" />
                        </div>
                        <div>
                            <img src="./assets/image/gioi-thieu/icon-tron-2-150x150.png" alt="" />
                        </div>
                        <div>
                            <img src="./assets/image/gioi-thieu/icon-tron-3-150x150.png" alt="" />
                        </div>
                        <div>
                            <img src="./assets/image/gioi-thieu/icon-tron-4-150x150.png" alt="" />
                        </div>
                    </div>
                    <p>
                        Tổn thương da do nắng, mụn, lão hóa, nám – bất kì vấn đề nào với
                        làn da của bạn, giải pháp của chúng tôi được chúng minh đạt được
                        hiệu quả. Có lý do vì sao chúng tôi được các chuyên viên ngành
                        dược mỹ phẩm chọn lựa, và tin tưởng vào các giải pháp chúng tôi
                        mang lại sẽ phù hợp cho từng bước, từng giai đoạn chăm sóc da của
                        bạn. Hãy khám phá IMAGE Skincare của riêng bạn – bắt đầu hành
                        trình chào đón làn da rạng ngời nhất, khỏe nhất của mình.
                    </p>
                </div>
            </div>
            <div class="bottom-mid-main">
                <h1>SERENITY TẠI VIỆT NAM!</h1>
                <p>
                    Công ty Image Skincare Việt Nam là nhà phân phối mỹ phẩm Image
                    Skincare chính hãng hàng đầu hiện nay. Không chỉ cam kết cung cấp
                    sản phẩm chất lượng mà còn nhiều chính sách ưu đãi dành cho khách
                    hàng:
                </p>
                <ul>
                    <li>Giao hàng toàn quốc. Nội thành giao trong ngày.</li>
                    <li>Miễn phí giao hàng cho đơn hàng 500K.</li>
                    <li>Cam kết sản phẩm chính hãng 100%</li>
                    <li>
                        Đổi trả trong vòng 7 ngày - Nếu sản phẩm lỗi hoặc kích ứng khi sử
                        dụng.
                    </li>
                    <li>
                        Chuyên viên da liễu tư vấn chăm sóc da và sử dụng sản phẩm 24/24.
                    </li>
                </ul>
            </div>
        </div>
        <div class="img-main">
            <img src="./assets/image/gioi-thieu/ghmxfj3523ttir.png" alt="" />
        </div>
        <div class="bot-main">
            <div class="content-left">
                <h1 style="font-weight: 600">Sứ mệnh của chúng tôi</h1>
                <p>
                    Hơn ai hết, chúng tôi hiểu rằng để duy trì làn da khỏe mạnh là một
                    hành trình kéo dài cả cuộc đời – một quá trình đòi hỏi sự quan tâm,
                    chuyên môn và chăm sóc. Vì vậy chúng tôi đã tiến xa hơn các sản phẩm
                    làm đẹp ‘tạm thời’ và bề mặt với các công thức và giải pháp được
                    nghiên cứu kỹ lưỡng, chứng nhận lâm sàng dành cho mọi nhu cầu, tình
                    trạng và loại da.
                </p>
                <p>
                    Đối với chúng tôi, không đơn giản là chỉ làm đẹp. Sứ mệnh của chúng
                    tôi là đem lại một làn da khỏe mạnh, rạng ngời từ bên trong – để bạn
                    có thể tiến bước tự tin trên mọi hành trình trong cuộc sống muôn màu
                    của bạn.
                </p>
                <h1 style="font-weight: 600">Lối sống mới với Dược mỹ phẩm:</h1>
                <p>
                    Chăm sóc làn da với phương thức dược mỹ phẩm không hề khó khăn!
                    Ngược lại – việc sử dụng các sản phẩm chăm sóc da được chứng nhận
                    lâm sàng giúp hành trình đạt được làn da khỏe mạnh vững chắc hơn,
                    đạt được hiệu quả và kết quả rõ rệt. Đó là vì sao chúng tôi đã tạo
                    ra một dấu ấn của riêng chúng tôi bằng các sản phẩm Sáng tạo, Đơn
                    giản, Tiết kiệm và Hiệu quả. Tạo ra một lối sống dễ dàng với Dược Mỹ
                    Phẩm
                </p>
            </div>
            <div class="img-right">
                <img src="./assets/image/gioi-thieu/banner-su-menh.jpg" alt="" />
            </div>
        </div>
        <div class="last-text">
            <h6>
                HIỆU QUẢ – KIỂM CHỨNG LÂM SÀNG – CÔNG THỨC HÓA BỞI CÁC CHUYÊN GIA
            </h6>
            <h6>
                PHÁT TRIỂN BỀN VỮNG – TẦM CỠ QUỐC TẾ – KHÔNG THỬ NGHIỆM TRÊN ĐỘNG VẬT
                – ĐÃ ĐƯỢC THỬ, SỬ DỤNG BỞI CÁC CHUYÊN VIÊN DA LIỄU
            </h6>
        </div>
        <div class="finally">
            <div class="img-finally">
                <img src="./assets/image/gioi-thieu/janna.jpg" alt="" />
            </div>
            <div class="content-finally">
                <h3>CÂU CHUYỆN CỦA NHÀ SÁNG LẬP JANA</h3>
                <p>
                    13 bộ sản phẩm của IMAGE Skincare đã có mặt trên các cơ sở điều trị,
                    spa và tại nhà của các chị em trên khắp thế giới. Nhưng tất cả đều
                    bắt đầu với một lọ serum dưỡng ẩm, được nghiên cứu và làm từ Dược sĩ
                    tại chính góc bếp nhỏ của cô ấy.
                </p>
                <p>
                    Hành trình của Nhà sáng lập Janna Robert từ việc tạo ra một giải
                    pháp hoàn hảo cho làn da. Giải pháp đó đạt giải thưởng và trở thành
                    một trong những sản phẩm bán chạy nhất, dẫn tới việc khởi nghiệp
                    thành công thương hiệu và giờ đây được yêu quý bởi các chuyên gia
                    trên toàn cầu. Đều bắt đầu từ việc Janna đã phải chiến đấu với các
                    vấn đề trên chính da của mình, cô quyết tâm trở thành một dược sĩ và
                    chuyên viên da chuyên nghiệp. Và sau khi thành công, cô lựa chọn
                    chia sẻ niềm vui và sự tự tin đến từ một làn da khỏe mạnh, rạng ngời
                    đến cho mọi người.
                </p>
                <p>
                    Janna dành ra nhiều năm để chữa trị, dạy và lắng nghe các khách hàng
                    đã tin tưởng để chia sẻ các nhu cầu chăm sóc da của họ. Qua những
                    trải nghiệm như vậy, cô đã nhận ra khách hàng của mình đang phải đối
                    mặt với một thị trường skincare bị áp đảo bởi các sản phẩm không rõ
                    thành phần, chạy theo xu những mốt ‘hot’ và chưa đạt hiệu quả cam
                    kết. Vậy nên với đội ngũ các nhà khoa học, dược sĩ và các chuyên
                    viên chăm sóc da – Janna đã bắt đầu hành trình tạo ra những giải
                    pháp thực sự hiệu quả cho mọi loại da và tình trạng – và sáng lập ra
                    một thương hiệu có khả năng mang sự uy tín và niềm đam mê trở lại
                    vào ngành làm đẹp.
                </p>
                <p>
                    Hiện nay, Janna là Nhà sáng lập của IMAGE Skincare và Chủ tịch của
                    Hội đồng, và đạt giải Ernst & Young’s Doanh Nhân của Năm. Hành trình
                    từ góc bếp nhỏ cho đến bây giờ không phải là một con đường ngắn ngủi
                    – nhưng dù có đạt bao nhiêu thành tựu hay giải thưởng, Janna vẫn
                    quyết tâm theo đuổi mục đích đầu tiên của mình: đem lại sự tự tin
                    cho mọi người bằng một làn da xinh đẹp, khỏe mạnh. Sứ mệnh này rõ
                    trong mọi bước đi của chúng tôi – từ các thành viên đầy nhiệt huyết
                    của IMAGE cho tới những tập thể chúng tôi đã giúp đỡ trong quỹ ‘Care
                    for Skin Foundation’.
                </p>
            </div>
        </div>
    </main>
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