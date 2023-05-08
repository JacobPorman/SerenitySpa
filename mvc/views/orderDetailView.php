<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['username']) {
    header("Location: " . geturl() . "/login/loginView");
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>


    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
        <?php include "./assets/libs/bootstrap/bootstrap.min.css";
        include "./assets/css/admin.css";
        include "./assets/css/quan_ly_don_hang.css";
        ?>
    </style>
</head>

<body>
    <div class="filToDate">
        <span>Từ: </span>
        <input type="date" id="fromDate">
        <span>Đến: </span>
        <input type="date" id="toDate">
        <span onclick="fil()"><i class="fa-solid fa-filter"></i>Lọc</span>
    </div>

    <div class="left-menu">
        <div class="admin-logo">
            <img src="./assets/img/logo-admin.png" alt="">
        </div>

        <ul class="left-nav">
            <li>
                <a href="index.html"><i class="fa-solid fa-house admin-icon"></i></a>
                <a href="index.html">Trang chủ</a>
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

    <table id="billlist"></table>
    <div id="info"></div>

    <script>
        <?php
        include "./assets/js/quan_ly_don_hang.js";

        ?>
    </script>
</body>

</html>