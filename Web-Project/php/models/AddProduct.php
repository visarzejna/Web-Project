<?php 

    class AddProduct{
        private $productName ="";
        private $image = "";
        private $description = "";
        
        public function __construct($data){
            $this->productName = $data['productName'];
            $this->image = $data['image'];
            $this->description = $data['description'];
        }
        public function validate()
    {
        return !(empty($this->productName) || empty($this->image) || empty($this->description));
    }
        public function add(){
            if(!$this->validate()){
                echo 'Nuk keni shtuar te gjitha te dhenat!';
                return false;
            }
            $product_model = new ProductModel( $this->productName, $this->image, $this->description);
            $product = new Product();
            $product = $product->create($product_model);
            
            if($product){
                header ("Location: ../../views/dashboard.php");
            }
        }
    }
?>