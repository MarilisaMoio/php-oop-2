<?php 
    class Products{
        public $name;
        protected $price;
        public $category;
        protected $discount;
        public $image;
        
        public function __construct($_name, $_price, Categories $_category, $_discount = 0, $_image = 'https://www.webbox.co.uk/wp-content/uploads/2019/04/shutterstock_1095001973.jpg'){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
            $this->discount = $_discount;
            $this->image = $_image;
        }

        //setters
        public function changePrice($num){
            $this->price = $num;
        }

        public function changeDiscount($num){
            $this->discount = $num;
        }

        //getters
        public function getPrice(){
            return $this->price;
        }
        
        public function getDiscount(){
            return $this->discount;
        }

        public function getDiscountedPrice(){
            return $this->price / 100 * (100 - $this->discount);
        }
    }
?>