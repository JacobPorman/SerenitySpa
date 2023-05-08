<?php
require_once "./mvc/core/basehref.php";
class Login extends Controller
{
    public function defaultView()
    {
        $this->view("loginView");
    }
    public function auth()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $demoData = $this->model('authModel')->authLogin($email, $password);

        if (!$demoData) echo "<script>
            alert('Thông tin đăng nhập sai. Mời nhập lại');
            location.href = '" . geturl() . "/login/loginView';
        </script>";
        else {
            $_SESSION['username'] = $demoData[0]['id'];
            header("Location: " . geturl() . "/home");
        }
    }
    public function registerView()
    {
        $this->view("registerView");
    }
    public function register()
    {
        $member_name = $_POST['name'];
        $member_password = $_POST['password'];
        $member_email = $_POST['email'];
        $member_phone = $_POST['phone'];
        $demoData = $this->model('authModel')->authRegister($member_name, $member_password, $member_email, $member_phone);
        if ($demoData != "") echo $demoData;
        else header("Location: " . geturl() . "/login/loginView");
    }
    public function logout()
    {
        unset($_SESSION['username']);
        header("Location: " . geturl() . "/login/loginView");
    }
}
