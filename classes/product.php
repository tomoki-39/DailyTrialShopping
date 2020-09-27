<?php 
    class Product {
        // public：インスタンスから値を書き換え可能
        // private：インスタンスから値を書き換え不可 インスタンスから取得することも不可
        private $id;
        private $name;
        private $price;
        private $image;

        // product インスタンスを生成
        public function __construct($id, $name, $price, $image) {
            // インスタンスのプロパティを取得
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->priceIncludedTax = $this->getPriceIncludedTax();
        }

        // private に指定されている変数でも
        // インスタンスからプロパティを取得できるようにする
        public function getID() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getImage() {
            return $this->image;
        }
        public function getPriceIncludedTax() {
            return $priceIncludedTax = $this->calPriceIncludedTax();
        }

        // インスタンスから直接呼ばれるわけではないのでprivateで定義
        public function calPriceIncludedTax() {
            $taxRate = 0.1;
            return $this->price + $this->price * $taxRate;
        }

        public function displayPrice() {
            $price = $this->calPriceIncludedTax();
            return $price."円";
        }
    }
?>