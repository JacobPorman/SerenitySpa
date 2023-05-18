<?php
class Cart extends Controller
{
    function defaultView()
    {
        $productDB = $this->model("ProductsModel");

        $this->view('cartView', [
            "all-pro" => $productDB->getAllProducts(),
        ]);
    }

    function productRelate($product_id)
    {
        $productDB = $this->model("ProductsModel");

        $product = mysqli_fetch_array($productDB->getProduct($product_id));

        $related_product = $productDB->getRelatedProducts($product["id"]);
        $this->view("cartView", ["pro" => $productDB->getProduct($product_id), "related-pro" => $related_product]);
    }
}
