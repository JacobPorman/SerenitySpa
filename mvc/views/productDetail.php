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
    <title>Quan Ly San Pham</title>


    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
        <?php include "./assets/libs/bootstrap/bootstrap.min.css";
        include "./assets/css/admin.css";
        include "./assets/css/style_content.css";
        ?>
    </style>
</head>

<body>
    <div class="left-menu">
        <div class="admin-logo">
            <img src="./assets/img/logo-admin.png  " alt="">
        </div>
        <ul class="left-nav">
            <li>
                <a href="<?php echo getUrl() . "/home" ?>"><i class="fa-solid fa-house admin-icon"></i></a>
                <a href="<?php echo getUrl() . "/home" ?>">Trang chủ</a>
            </li>
            <li>
                <a href="quan_ly_san_pham.html"><i class="fa-solid fa-shirt admin-icon"></i></a>
                <a href="quan_ly_san_pham.html">Sản phẩm</a>
            </li>
            <li>
                <a href="quan_ly_don_hang.html"><i class="fa-solid fa-truck admin-icon"></i></a>
                <a href="quan_ly_don_hang.html">Đơn hàng</a>
            </li>
            <li>
                <a href="quanlyuser.html"><i class="fa-solid fa-users admin-icon"></i></a>
                <a href="quanlyuser.html">Khách hàng</a>
            </li>
            <li>
                <a href="chart.html"><i class="fa-solid fa-map-location admin-icon"></i></a>
                <a href="chart.html">Thông Tin</a>
            </li>
        </ul>
    </div>
    <div style="width: 94%; float: right;">
        <div class="update">
            <div id="titleProduct">
                <h2>Thêm Sản Phẩm</h2>
            </div>
            <table>
                <tr>
                    <td>Tên sản phẩm</td>
                    <td><input required type="text" placeholder="nhập tên sản phẩm" id="name"></td>
                </tr>
                <tr>
                    <td>Link ảnh</td>
                    <td>
                        <input id="img" type="file" value="upload" onchange="sub(this)" />

                    </td>
                </tr>
                <tr>
                    <td>Giá tiền</td>
                    <td><input type="number" placeholder="nhập giá tiền" id="price" pattern="[0-9]{10}"></td>
                </tr>
                <tr>
                    <td>Thương hiệu</td>
                    <td><input type="text" placeholder="nhập thương hiệu" id="brand"></td>
                </tr>
                <tr>
                    <td>Loại</td>
                    <td><input type="text" placeholder="nhập thể loại" id="type"></td>
                </tr>
                <tr>
                    <td>
                        <div id="tmphinh" style="width: 100%;"></div>
                    </td>
                    <td>
                        <div class="button" id="add" onclick="createnewproduct();">Thêm Sản Phẩm</div>
                        <div class="button" id="update" onclick="changeProduct();" style="display: none;">Lưu
                        </div><input type="hidden" id="index">
                    </td>
                    </td>
                </tr>
            </table>
        </div>

        <div class="render">
            <table id="show_product" width="100%"></table>
        </div>

        <div class="content">
            <ul id="numb" class="wrapper"></ul>
        </div>

    </div>
    <script src="./manage.js"></script>
    <script src="/assets/js/manage.js"></script>


    <script>
        window.onload = function() {
            renderAll();
        }
    </script>
</body>

</html>