<?php

class Creation
{

    public function migration($conn)
    {
        $qry = "create table user(
            id int primary key auto_increment,
            email varchar(40) unique not null,
            access enum('customer','admin')
        );";

        $result = mysqli_query($conn, $qry);

        if ($result) {
            echo "User Table Created";
        } else {
            echo "Error in User Table Creation";
        }

        $qry2 = "create table product(
            id int primary key auto_increment,
            description varchar(80) ,
            price int
        );";

        $result2 = mysqli_query($conn, $qry2);

        if ($result2) {
            echo "Product Table Created";
        } else {
            echo "Error in Product Table Creation";
        }
    }
}

?>