<?php 
    class Foods extends Products {
        public $productType = "food";
        public $type;
        public $age;
        public $size;
        public $weight;

        public function __construct($_name, $_price, Categories $_category, $_type, $_age, $_size, $_weight, $_discount = 0, $_image = 'https://www.webbox.co.uk/wp-content/uploads/2019/04/shutterstock_1095001973.jpg'){
            parent::__construct($_name, $_price, $_category, $_discount, $_image);

            $this->type = $_type;
            $this->age = $_age;
            $this->size = $_size;
            $this->weight = $_weight;
        }
    }
?>
