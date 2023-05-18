<?php
require_once "./mvc/core/basehref.php";
if (!$_SESSION['user']) {
    header("Location: " . geturl() . "/login/loginView");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />


    <link rel="stylesheet" href="./assets/libs/font-awesome/css/all.min.css">

    <style>
        <?php include "./assets/libs/bootstrap/bootstrap.min.css";
        include "./assets/css/admin.css";
        ?>
    </style>
</head>

<body>
    <section class="admin">
        <div class="navbar">
            <div class="navbar-logo">
                <a href="<?php echo getUrl() . "/" ?>"><img src="./assets/image/logo/logo(500x300).png" alt="" /></a>
            </div>

            <div class="navbar-menu">
                <ul class="navbar-nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-profile">
                            <div class="nav-profile-img">
                                <img src="./assets/image/logo/admin.png" alt="" />
                            </div>
                            <div class="nav-profile-text">
                                <p>Nguyen Q Toan</p>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <i class="fa-regular fa-envelope"></i>
                    </li>
                    <li class="nav-item">
                        <i class="fa-regular fa-bell"></i>
                    </li>
                    <li class="nav-item" id="logout">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main">
            <div class="sidebar">
                <ul class="nav">
                    <li class="nav-item active" data-target="products">
                        <a href="" class="nav-link">
                            <i class="fa-regular fa-clipboard"></i>
                            <span class="nav-title"> Products </span>
                        </a>
                    </li>
                    <li class="nav-item" data-target="customers">
                        <a href="" class="nav-link">
                            <i class="fa-regular fa-user"></i>
                            <span class="nav-title"> Customers </span>
                        </a>
                    </li>
                    <li class="nav-item" data-target="orders">
                        <a href="" class="nav-link">
                            <i class="fa-regular fa-credit-card"></i>
                            <span class="nav-title"> Orders </span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="content">
                <div class="container">
                    <div class="products" id="products">
                        <div class="container-fluid">
                            <h2>Danh sách sản phẩm</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá</td>
                                    <td>Remove</td>
                                    <td>Update</td>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- <td><img src="./img/tshirts/3.1.jpg" alt="" /></td>
                                    <td id="name-product">POPULAR</td>
                                    <td id="price-product">310.000</td> -->
                                <?php
                                while ($row = mysqli_fetch_array($data["all-pro"])) {
                                    echo '
                                    <tr product-id="' . $row['id'] . '">
                                        <td id="id-product">' . $row["id"] . '</td>
                                        <td id="name-product">' . $row["title"] . '</td>
                                        <td id="price-product">' . $row["price"] . '</td>
                                        <td>
                                        <a id="remove" href="http://localhost/Spa/admin/deleteProduct/' . $row['id'] . '"><button >
                                        <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                                    </button></a>
                                    </td>
                                    <td>
                                        <a product-id="' . $row['id'] . '"id="update-product"><button >
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button></a>
                                    </td>
                                </tr>

                                ';
                                };
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="customers" style="display: none" id="customers">
                        <div class="container-fluid">
                            <h2>Danh sách khách hàng</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên khách hàng</td>
                                    <td>Gmail</td>
                                    <td>Remove</td>
                                    <td>Update</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($data["all-user"])) {
                                    echo '
                                    <tr>
                                    <td id="id-customer">' . $row['id'] . '</td>
                                    <td id="name-customer">' . $row['name'] . '</td>
                                    <td id="gmail">' . $row['email'] . '</td>
                                    <td>
                                        <a id="remove" href="http://localhost/Spa/admin/deleteUser/' . $row['id'] . '"><button >
                                        <i class="fa-sharp fa-solid fa-circle-xmark"></i>
                                    </button></a>
                                    </td>
                                    <td>
                                        <button id="update-customer">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                </tr>
                                ';
                                };
                                ?>


                            </tbody>
                        </table>
                    </div>

                    <div class="orders" id="orders" style="display: none">
                        <div class="container-fluid">
                            <h2>Danh sách đơn hàng</h2>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Mã hóa đơn</td>
                                    <td>Khách hàng</td>
                                    <td>Tổng tiền</td>
                                    <td>Trạng thái</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>#HD001</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>1.500.000 VNĐ</td>
                                    <td>Đang xử lý</td>
                                    <td><a href="#">Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>#HD002</td>
                                    <td>Trần Thị B</td>
                                    <td>2.000.000 VNĐ</td>
                                    <td>Hoàn thành</td>
                                    <td><a href="#">Xem chi tiết</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#HD003</td>
                                    <td>Phạm Văn C</td>
                                    <td>1.800.000 VNĐ</td>
                                    <td>Đã hủy</td>
                                    <td><a href="#">Xem chi tiết</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal">
                        <div class="modal-content">
                            <h2>Chỉnh sửa sản phẩm</h2>
                            <form id="formId" method="post" action="">

                                <div>
                                    <label for="product-name">Tên sản phẩm:</label>
                                    <input type="text" id="product-name" name="product-name" />
                                </div>
                                <div>
                                    <label for="product-price">Giá:</label>
                                    <input type="text" id="product-price" name="product-price" />
                                </div>

                                <div>
                                    <label for="product-images">Hình ảnh:</label>
                                    <input type="file" id="product-images" name="product-images" accept="image/*" multiple />
                                </div>

                                <div class="button">
                                    <button id="update-btn" type="submit">Cập nhật</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        <?php include "./assets/libs/bootstrap/bootstrap-jQ.min.js";
        include "./assets/libs/bootstrap/popper.min.js";
        include "./assets/libs/bootstrap/bootstrap.min.js";


        include "./assets/js/admin.js";




        ?>
    </script>
</body>

</html>