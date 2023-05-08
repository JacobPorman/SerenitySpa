<?php
class Product extends Controller
{
    function defaultView()
    {
        $productDB = $this->model("ProductsModel");
        $this->view("ProductView", [
            "all-pro" => $productDB->getAllProducts(),
            "all-type" => $productDB->getAllCategories(),
            "pro-db" => $productDB,
        ]);
    }
}
