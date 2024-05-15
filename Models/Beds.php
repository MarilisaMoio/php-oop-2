<?php 
    class Beds extends Products {
        public $productType = "bed";
        public $size;
        public $material;
        public $washable;

        public function __construct($_name, $_price, Categories $_category, $_size, $_material, $_washable = false, $_discount = 0, $_image = 'https://www.webbox.co.uk/wp-content/uploads/2019/04/shutterstock_1095001973.jpg'){
            parent::__construct($_name, $_price, $_category, $_discount, $_image);

            $this->size = $_size;
            $this->material = $_material;
            $this->washable = $_washable;
        }
    }
?>
