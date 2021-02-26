<head>
    <link href="../../../css/styleEditProduct.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<?php

include '../components/header.php';
include_once '../../models/Product.php'
?>
<section></section>
    <div class="container">
        <form action="../../controllers/products/create.php" method="POST">
            <input type="text" name="productName" placeholder="Product name">
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <input type="file" name="image" class="file-input">
            <input type="submit" name="add" value="Submit">
        </form>
    </div>
    
