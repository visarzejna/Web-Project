<?php 

require_once '../../models/Product.php';
require_once '../../models/ProductModel.php';
require_once '../../models/AddProduct.php';

if(isset($_POST['add'])){
    $product = new AddProduct($_POST);
    $product->add();
}

?>