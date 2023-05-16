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

    function category($category)
    {
        $productDB = $this->model("ProductsModel");
        $this->view("ProductView", [
            "all-pro" => $productDB->getAllProductsOfCategory($category),
            "all-type" => $productDB->getAllCategories(),
            "type" => $category,
        ]);
    }

    function productdetail($product_id)
    {
        $productDB = $this->model("ProductsModel");


        $product = mysqli_fetch_array($productDB->getProduct($product_id));

        $related_product = $productDB->getRelatedProducts($product["id"]);
        $this->view("productDetailView", ["pro" => $productDB->getProduct($product_id), "related-pro" => $related_product]);
    }
}
