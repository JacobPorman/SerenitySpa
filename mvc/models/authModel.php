<?php
require_once "./mvc/core/basehref.php";
class authModel extends db
{
    public function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function authLogin($email, $password)
    {
        $typesql = "SELECT * FROM users WHERE email='" . $email . "';";
        $query1 = $this->_query($typesql);
        if (!$query1) return [];
        $types = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($types, $row);
        }
        $pwDB = $types[0]['password'];
        if (password_verify($password, $pwDB)) {
            return $types;
        } else {
            return [];
        }
    }
    public function authRegister($user_name, $user_password, $user_email, $user_phone)
    {
        $password = password_hash($user_password, PASSWORD_DEFAULT);
        if (!($user_name && $password && $user_email && $user_phone)) return "<script>
            alert('Thông tin nhập thiếu. Mời nhập lại');
            location.href = '" . geturl() . "/login/registerView';
        </script>";

        $typesql1 = "insert into users (name, password, email, phone)
        values ('" . $user_name . "', '" . $password . "', '" . $user_email . "', '" . $user_phone . "');";

        if (!$this->_query($typesql1)) {
            echo "fail";
            return "<script>
                alert('Thông tin nhập thiếu. Mời nhập lại');
                location.href = '" . geturl() . "/login/registerView';
            </script>";
        }
        return "";
    }
}
