<?php

require_once '../../models/Product.php';
require_once '../../models/ProductModel.php';
require_once '../../models/UserModel.php';
if (isset($_POST['title']) && isset($_POST['image']) && isset($_POST['description'])) {


    $id = $_POST['id'];
    $productName = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    if((empty($productName) || empty($image) || empty($description))){
        echo "Jepi te gjitha te dhenat!";
    } else{
        $product_model = new ProductModel($productName , $image, $description);
        $product = new Product();
        $product = $product->update($product_model, $id);
        header("Location:../../views/dashboard.php");
    }
    
}