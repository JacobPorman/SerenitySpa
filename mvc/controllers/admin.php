<?php
class Admin extends Controller
{
    function defaultView()
    {
        // echo "<pre>";
        // echo print_r($_SESSION['username']['user_role']);
        // echo "</pre>";
        if ($_SESSION['username']['user_role'] == 'admin') {
            $this->view("adminView");
        }
    }
}
