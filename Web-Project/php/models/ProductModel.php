<?php


class ProductModel
{
    private $productname;
    private $productImage;
    private $description;

    public function __construct( $productname,  $productImage, $description){
        $this->productname = $productname;
        $this->productImage = $productImage;
        $this->description = $description;
    }

    public function getProductName(){
        return $this->productname;
    }

    public function getProductImage(){
        return $this->productImage;
    }

    public function getDescription(){
        return $this->description;
    }
}