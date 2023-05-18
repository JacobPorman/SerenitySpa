<?php
class Admin extends Controller
{
    function defaultView()
    {

        if ($_SESSION['user']['user_role'] == 'admin') {
            $productDB = $this->model("ProductsModel");

            $this->view("adminView", [
                "all-pro" => $productDB->getAllProducts(),
                "all-user" => $productDB->getAllUsers(),
                "pro-db" => $productDB,
            ]);
        }
    }



    function deleteProduct($id)
    {
        $productDB = $this->model("manageModel");
        $productDB->deleteProductManage($id);

        header("Location: http://localhost/Spa/admin");
    }

    function deleteUser($id)
    {
        $productDB = $this->model("manageModel");
        $productDB->deleteUserManage($id);

        header("Location: http://localhost/Spa/admin");
    }

    function updateProduct($id = -1)
    {
        $name = $_POST['product-name'];
        $price = $_POST['product-price'];

        $productDB = $this->model("manageModel");
        $image = "";


        $productDB->editProductManage($id, $name, $image, $price);
        header("Location: http://localhost/Spa/admin");
    }
}
