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
    <title>Login</title>

    <style>
        form {
            margin: 50px auto;
            padding: 20px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        h2 {
            margin-top: 0;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: left;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 200px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <form>
        <h2>Login to your account</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <button type="button" onclick="login()">Login</button>
    </form>

    <script>
        function login() {
            // Lấy thông tin đăng nhập từ người dùng
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Kiểm tra thông tin đăng nhập có hợp lệ không
            if (username === 'admin' && password === 'password') {
                // Chuyển hướng đến trang admin
                window.location.href = 'admin.html';
            } else {
                alert('Invalid username or password');
            }
        }
    </script>
</body>

</html>