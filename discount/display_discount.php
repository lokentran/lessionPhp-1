<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $product = $_POST['product'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];

        $productPrice = $price * (1 - $discount);

        echo "Price of $product after discount is $productPrice.";
    }

?>c