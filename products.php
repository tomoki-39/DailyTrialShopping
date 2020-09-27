<?php
    require_once 'classes/product.php';
    $products = [
        new Product("avocado", "アボカド", "220", "./img/image_1.jpg"),
        new Product("orange", "オレンジ", "100", "./img/image_2.jpg"),
        new Product("lemon", "レモン", "200", "./img/image_3.jpg"),
        new Product("pineapple", "パイナップル", "400", "./img/image_4.jpg")
    ]; 
?>