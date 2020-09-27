<?php
    require_once 'products.php';

    class Cart {
        private static $items = [];

        // cart は product みたいに複数個必要としないので
        // インスタンスを生成しないでもメソッドを呼び出せる static を記入
        public static function add($product, $count) {
            // thisではなくself::を使用（staticの特徴）
            self::$items[] = ["product" => $product, "count" => $count];
        }
        public static function calTotalPrice() {
            $sum = 0;
            foreach(self::$items as $item) {
                $price = $item["product"]->getPriceIncludedTax() * $item["count"];
                $sum = $sum + $price;
            }
            return $sum;
        }
    }
?>