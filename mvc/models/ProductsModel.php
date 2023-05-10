<?php
class ProductsModel extends db
{
    public function getAllProducts()
    {
        $qr = "SELECT * FROM product";
        return mysqli_query($this->connect, $qr);
    }

    // public function getAllCategories(){
    //     $qr = "SELECT DISTINCT product_type FROM PRODUCTS ORDER BY product_type";
    //     return mysqli_query($this->connect, $qr);
    // }

    public function getAllCategories()
    {
        $qr = "SELECT * FROM categories";
        return mysqli_query($this->connect, $qr);
    }

    public function getAllProductsOfCategory($category)
    {
        $qr = "SELECT * FROM product WHERE cate_id='" . $category . "'";
        return mysqli_query($this->connect, $qr);
    }

    public function getRelatedProducts($category)
    {
        $qr = "SELECT id, title, image, price FROM product WHERE cate_id='" . $category . "'";
        return mysqli_query($this->connect, $qr);
    }

    public function getProduct($product_id)
    {
        $qr = "SELECT * FROM product WHERE id = $product_id";
        return mysqli_query($this->connect, $qr);
    }

    public function getAllProductsWithPrice($p1, $p2)
    {
        $qr = "SELECT * FROM PRODUCTS WHERE product_price >=" . $p1 . " AND product_price <" . $p2 . "";
        return mysqli_query($this->connect, $qr);
    }

    public function searchProduct($value)
    {
        $qr = "SELECT * FROM products WHERE product_name LIKE '%" . $value . "%' OR product_type LIKE '%" . $value . "%' OR product_brand LIKE '%" . $value . "%' OR product_detail LIKE '%" . $value . "%'";
        return mysqli_query($this->connect, $qr);
    }
}
