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


    function addProductToCart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];


        $productDB = $this->model("ProductsModel");
        $product = mysqli_fetch_array($productDB->getProduct($id));

        if (isset($_SESSION['cart'][$id]) && !empty($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        } else {
            $product['quantity'] = $quantity;
            $_SESSION['cart'][$id] = $product;
        }

        header("Location: http://localhost/SerenitySpa/");
    }
    function deleteProductToCart($id)
    {
        unset($_SESSION['cart'][$id]);


        header("Location: http://localhost/SerenitySpa/cart");
    }

    function changeAmoutProductToCart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        // echo $id . $quantity;

        $_SESSION['cart'][$id]['quantity'] += $quantity;
        if ($_SESSION['cart'][$id]['quantity'] < 1) $_SESSION['cart'][$id]['quantity'] = 1;
    }


    function payCart()
    {
        $orderDB = $this->model("orderModel");
        $id = $orderDB->addOrder();

        $orderDB->addOrderDetail($id);
        header("Location: http://localhost/SerenitySpa/cart");
    }
}
