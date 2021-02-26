<?php
require_once '../../models/Product.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = new Product();
    $product->delete($id);
    header("Location:../../views/dashboard.php");
}
