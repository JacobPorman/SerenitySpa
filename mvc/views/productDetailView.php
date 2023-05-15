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
    <title>Chi tiết sản phẩm</title>


    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">


    <style>
    <?php include "./assets/libs/bootstrap/bootstrap.min.css";

    include "./assets/css/style.css";
    include "./assets/css/product.css";
    include "./assets/css/cart.css";
    include "./assets/css/productdetail.css";
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
        <div class="container product-detail-view">
            <div class="nav-product">
                <ol style="font-size: 14px">
                    <li class="breadcumb-item">
                        <a href="<?php echo getURL() . "/home" ?>">Trang chủ&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    &frasl;
                    <li class="breadcumb-item" style="color: rgba(0, 0, 0, 0.515)">
                        Vital C&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                    &frasl;

                    <li class="breadcumb-item" style="font-weight: bold">
                        Kem trị nám
                    </li>
                </ol>
            </div>

            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($data["pro"])) {
                    echo '<div class="product-image col-5">
                        <img src="' . $row["image"] . '" alt="" />
                    </div>';
                };
                ?>


                <div class="product-detail col-7">
                    <h3 style="font-size: 20px; font-weight: bold">
                        KEM TRỊ THÂM QUẦNG MẮT IMAGE VITAL C HYDRATING EYE RECOVERY GEL
                    </h3>

                    <?php
                    while ($row = mysqli_fetch_array($data["pro"])) {
                        echo '<span class="product-price" style="font-size: 18px; color: rgb(228, 57, 57); font-weight: 600">' . $row["price"] . '</span>';
                    };
                    ?>


                    <div class="block-info">
                        <p class="product-info" style="font-size: 14px">
                            Kem trị thâm quầng mắt Image Vital C Hydrating Eye Recovery Gel
                            bán chạy Top 3 tại Mỹ. Giúp làm mờ quầng thâm, giảm sưng bọng
                            mắt, nếp nhăn, vết chân chim.
                        </p>

                        <div class="product_quantity">
                            <span class="change_quantity-btn">
                                <button onclick="changeQuantity(this, -1)">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </span>

                            <input type="text" value="1" class="quantity" style="font-size: 14px" />

                            <span class="change_quantity-btn">
                                <button onclick="changeQuantity(this, 1)">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </span>
                        </div>

                        <div class="add-to-cart">
                            <input type="button" value="Thêm vào giỏ hàng" class="btn" />
                        </div>
                    </div>

                    <div class="classify" style="font-size: 14px">
                        <p><b>Danh mục: </b>Illuma, mọi loại da, da xỉn màu</p>
                        <p><b>Tình trạng: </b>Còn hàng</p>
                        <p><b>Quy cách: </b>30 ml</p>
                        <p>
                            Tổng đài tư vấn miễn phí:
                            <b style="font-size: 24px; color: rgb(238, 93, 93)">070&nbsp;766&nbsp;1696</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-product">
                <div class="cover">
                    <div class="title-content">Nội dung chính</div>
                    <div class="text-content">
                        <p>
                            Nám sạm, đốm nâu, tàn nhang… luôn là nỗi lo của hầu hết phái đẹp
                            vì nó ảnh hưởng trực tiếp đến thẩm mỹ. Do đó, tiêu diệt nám tận
                            gốc là việc làm cần thiết và vô cùng quan trọng của phái đẹp.
                            Nhưng phương pháp trị nám hiện tại chưa mang lại hiệu quả tận
                            gốc, cứ tái đi tái lại. Hãy sử dụng ngay serum trị nám trắng da
                            Image Iluma Intense Facial Illuminator với công nghệ trị nám mới
                            nhất hiện nay từ Tranexamic, Vitamin C, Niacinamide và Glycolic
                            Acid (AHA).
                        </p>

                        <p>
                            Image Iluma Intense Facial Illuminator với sự kết hợp của 4
                            thành phần đã tác động toàn diện từ bên trong ra bên ngoài ngăn
                            ngừa nám tái phát. Hoạt động bên trong là ức chế sản sinh
                            melanin và tiêu diệt các gốc tự do với thành phần vàng
                            Tranexamic, Vitamin C giúp làn da tươi trẻ, sáng ngời. Tác động
                            bên ngoài là thành phần AHA và Niacinamide làm mềm lớp sừng, tạo
                            lớp ceramide giúp tăng cường hàng rào bảo vệ da và kích thích
                            sản sinh tế bào mới.
                        </p>

                        <h4 style="
                  text-align: center;
                  font-weight: bold;
                  padding: 30px 0 15px 0;
                ">
                            Công dụng ưu việt
                        </h4>

                        <div class="text-1" style="padding-top: 8px; padding-left: 30px">
                            <p>
                                &bull;&nbsp; Giúp điều chỉnh và ức chế sự xuất hiện của các
                                đốm đen và màu da không đồng đều.
                            </p>
                            <p>
                                &bull;&nbsp;&nbsp;Mang lại làn da tươi mới, trẻ trung hơn mỗi
                                ngày.
                            </p>
                            <p>
                                &bull;&nbsp; Tăng độ sáng và cải thiện độ đàn hồi cho làn da
                                luôn tươi trẻ.
                            </p>
                            <p>
                                &bull;&nbsp; Bổ sung độ ẩm tạo hàng rào bảo vệ da khỏi tác hại
                                của tia UV và các yếu tố môi trường bên ngoài khác.
                            </p>
                        </div>

                        <p style="
                  font-style: italic;
                  font-size: 15px;
                  font-weight: 600;
                  padding-top: 20px;
                ">
                            Hiệu quả của sản phẩm Image Iluma Intense Facial Illuminator đã
                            được kiểm nghiệm lâm sàng với hiệu quả:
                        </p>

                        <div class="text-1" style="padding-top: 8px; padding-left: 30px">
                            <p>
                                &bull;&nbsp; 97% người tham gia báo cáo sản phẩm làm tăng độ
                                sáng ở những vùng da không đều màu.
                            </p>
                            <p>
                                &bull;&nbsp;&nbsp;94% người tham gia đồng ý sản phẩm làm sáng
                                màu da và kết cấu.
                            </p>
                            <p>
                                &bull;&nbsp; 93% người tham gia đồng ý rằng da trông sáng và
                                rạng rỡ hơn.
                            </p>
                        </div>

                        <p style="
                  font-style: italic;
                  font-size: 15px;
                  font-weight: 600;
                  padding-top: 20px;
                ">
                            Hiệu quả thực tế của khách hàng sử dụng Image Iluma Intense
                            Facial Illuminator:
                        </p>

                        <div class="text-1" style="padding-top: 8px; padding-left: 30px">
                            <p>
                                &bull;&nbsp; Cải thiện màu da và sắc tố da không đồng đều lên
                                17%.
                            </p>
                            <p>
                                &bull;&nbsp;&nbsp;100% người tham gia báo cáo rằng sản phẩm
                                làm tăng độ sáng ở vùng da không đều màu.
                            </p>
                            <p>
                                &bull;&nbsp; 93% người tham gia đồng ý sản phẩm giúp giảm sự
                                xuất hiện của sắc tố.
                            </p>
                        </div>

                        <h4 style="
                  text-align: center;
                  font-weight: bold;
                  padding: 30px 0 15px 0;
                ">
                            Thành phần tinh túy
                        </h4>

                        <p>
                            Serum trị nám trắng da Image Iluma Intense Facial Illuminator
                            hội tụ đầy đủ các thành phần ưu tú với công nghệ trị nám hiện
                            đại bậc nhất hiện nay. Trong đó, nổi bật nhất phải kể đến một số
                            tên đáng chú ý và được coi là thành phần “vàng mười” trong điều
                            trị nám như Acid tranexamic, Acid glycolic, Niacinamide, Vitamin
                            C… Hoàn toàn không chứa paraben, phthalates, dầu khoáng, nước
                            hoa nhân tạo, thuốc nhuộm tổng hợp hoặc thử nghiệm trên động
                            vật. Hiệu quả và độ an toàn của từng thành phần đã được tổ chức
                            uy tín FDA chứng nhận.
                        </p>

                        <div class="text-2" style="padding-top: 8px; padding-left: 30px">
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic; padding-bottom: 16px">Acid tranexamic: </b>Ức chế sự
                                tổng hợp melanin làm giảm sự xuất hiện của sắc tố,
                                đốm nâu cho làn da tươi sáng đều màu.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Acid glycolic: </b>Cắt liên kết
                                giữa các tế bào giúp làn da tươi sáng đều màu.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Vitamin C: </b>Ngăn chặn sự phát
                                triển của các gốc oxy hóa giúp da tươi trẻ và trắng sáng hơn
                                rõ rệt.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Niacinamide: </b>Tăng cường sản
                                sinh ceramide giúp tăng sức đề kháng cho làn da chống lại các
                                tác hại từ bên ngoài và kích thích sản sinh tế bào mới.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Acetyl tetrapeptide: </b>Gồm 4
                                loại peptide nuôi dưỡng tế bào phát triển ở trạng thái ổn định
                                nhất.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Chiết xuất rễ cam thảo: </b>Làm
                                dịu và bổ sung độ ẩm cho làn da căng mướt, tươi sáng.
                            </p>
                            <p>
                                &bull;&nbsp;
                                <b style="font-style: italic">Chiết xuất rễ nhân sâm: </b>Làm
                                mờ nám sạm, đốm nâu và ngăn ngừa các dấu hiệu lão hóa cho làn
                                da tươi sáng rạng ngời.
                            </p>
                        </div>

                        <p>
                            <b>Bảng thành phần chi tiết:</b> Aqua/water/eau, oryza sativa
                            bran water, pentylene glycol, tranexamic acid, glycerin,
                            3-o-ethyl ascorbic acid, niacinamide, glycolic acid,
                            phennoxyethanacra, citaris, vi sinh vật, citrus aurantium
                            dulcis, graveolens (Geranium), limonene, citronellol, geraniol,
                            epilobium, angustifolium flower, linalool, sodium hyaluronate,
                            camellia sinensis…
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
        include "./assets/js/cart.js";
        ?>
    </script>
</body>

</html>