<?php
class OrderModel extends db
{

    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    function addOrder()
    {

        $typesql1 = "insert into orders (user_id)
            values (" . $_SESSION['user']['id'] . ");";

        $query1 = $this->_query($typesql1);

        $id = mysqli_insert_id($this->connect);

        return $id;
    }

    function addOrderDetail($id)
    {
        $typesql1 = "insert into orderdetail (product_id, quantity, order_id) VALUES";
        foreach ($_SESSION['cart'] as $key => $value) {
            $typesql1 = $typesql1 . "('" . $key . "', '" . $value['quantity'] . "', '" . $id . "'),";
        }
        $typesql1 = substr($typesql1, 0, -1);

        $query1 = $this->_query($typesql1);
    }
}
