<?php 
    class Products{
        public $name;
        protected $price;
        public $category;
        protected $isVisible;
        protected $discount;
        public $image;
        
        public function __construct($_name, $_price, Categories $_category, $_isVisible = false, $_discount = 0, $_image = 'https://picsum.photos/id/237/200/300'){
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
            $this->isVisible = $_isVisible;
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

        public function toggleVisibility(){
            $this->isVisible = !$this->isVisible;
        }

        //getters
        public function getPrice(){
            echo $this->price / 100 * (100 - $this->discount);
        }
        
        public function getDiscount(){
            echo $this->discount;
        }
    }
?>