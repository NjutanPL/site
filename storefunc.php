<?php
session_start();

require_once ('connect.php');
require_once ('comp.php');

        $database = new CreateDb("Productdb", "Producttb");

        $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }