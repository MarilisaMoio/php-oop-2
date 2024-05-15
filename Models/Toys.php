<?php 
    class Toys extends Products {
        public $productType = "toy";
        public $material;
        public function __construct($_name, $_price, Categories $_category, $_material, $_discount = 0, $_image = 'https://www.webbox.co.uk/wp-content/uploads/2019/04/shutterstock_1095001973.jpg'){
            parent::__construct($_name, $_price, $_category, $_discount, $_image);

            $this->material = $_material;
        }
    }
?>
