<?php

class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insert($desc, $price)
    {
        $desc = mysqli_escape_string($this->conn, $desc);
        $price = mysqli_escape_string($this->conn, $price);

        $qry = "INSERT INTO PRODUCT (description,price) values ('$desc',$price);";

        $res = mysqli_query($this->conn, $qry);

        if ($res) {
            echo "Product Inserted";
        } else {
            echo "Error in Product";
        }
    }

    public function getData()
    {
        $qry = "SELECT * from PRODUCT";

        $result = mysqli_query($this->conn, $qry);

        return $result;
    }
}

?>