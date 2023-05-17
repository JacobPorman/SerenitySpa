<?php
class manageModel extends db
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function deleteProductManage($id)
    {
        $typesql = "DELETE FROM product WHERE id=" . $id . ";";
        $query1 = $this->_query($typesql);
        return $query1;
    }
    public function editProductManage($id, $title, $image, $price)
    {
        if ($id != -1) {
            $typesql1 = "UPDATE product
                        SET title='" . $title . "',price='" . $price . "', image='" . $image . "'
                        WHERE id=" . $id . ";";
            echo $typesql1;
            $query1 = $this->_query($typesql1);
        } else {
            $typesql1 = "insert into product (title, price, image, cate_id)
            values ('" . $title . "', '" . $price . "', '" . $image . "', 1);";
            $query1 = $this->_query($typesql1);
        }
        return $id;
    }
    // public function getProductManagePaging($page)
    // {
    //     $skip = (intval($page) - 1) * 5;
    //     if (intval($page) - 1 == 0) {
    //         $skip = 0;
    //     }

    //     $typesql = "SELECT * FROM products LIMIT " . $skip . ", 5;";
    //     $query1 = $this->_query($typesql);
    //     if (!$query1) return [];
    //     $types = [];
    //     while ($row = mysqli_fetch_assoc($query1)) {
    //         array_push($types, $row);
    //     }
    //     return $types;
    // }
    // public function getProductUserPaging($page)
    // {
    //     $skip = (intval($page) - 1) * 5;
    //     if (intval($page) - 1 == 0) {
    //         $skip = 0;
    //     }

    //     $typesql = "SELECT * FROM member LIMIT " . $skip . ", 5;";
    //     $query1 = $this->_query($typesql);
    //     if (!$query1) return [];
    //     $types = [];
    //     while ($row = mysqli_fetch_assoc($query1)) {
    //         array_push($types, $row);
    //     }
    //     return $types;
    // }
    public function deleteUserManage($id)
    {
        $typesql = "DELETE users WHERE id=" . $id . ";";
        $query1 = $this->_query($typesql);
        return $query1;
    }
    public function editUserManage($id, $Name, $Password, $Email, $Phone)
    {
        if ($id != -1) {
            $typesql1 = "UPDATE member
                        SET name='" . $Name . "', password='" . $Password . "', email='" . $Email . "', phone=" . $Phone . "'
                        WHERE id=" . $id . ";";
            $query1 = $this->_query($typesql1);
        } else {
            $Password = password_hash($Password, PASSWORD_DEFAULT);
            $typesql1 = "insert into member (member_name, member_password, member_email, member_phone, member_role)
            values ('" . $Name . "', '" . $Password . "', '" . $Email . "', " . $Phone . ");";
            $query1 = $this->_query($typesql1);
        }
        return $id;
    }
    // public function getOrderPaging($page)
    // {
    //     $skip = (intval($page) - 1) * 5;
    //     $skipnext = $skip + 5;
    //     if (intval($page) - 1 == 0) {
    //         $skip = 0;
    //         $skipnext = 5;
    //     }

    //     $typesql = "SELECT * FROM order_product LIMIT " . $skip . ", " . $skipnext . ";";
    //     $query1 = $this->_query($typesql);
    //     if (!$query1) return [];
    //     $types = [];
    //     while ($row = mysqli_fetch_assoc($query1)) {
    //         array_push($types, $row);
    //     }
    //     return $types;
    // }
    public function deleteOrderManage($id)
    {
        $typesql = "DELETE FROM order_product WHERE order_id=" . $id . ";";
        $query1 = $this->_query($typesql);
        return $query1;
    }
}
