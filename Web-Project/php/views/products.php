<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincero products</title>
    <link href="../../css/stylePR.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
    <?php 
        require_once '../models/Product.php';
        $products = new Product();
        $products = $products->all();
    ?>
</head>
<body>
    <?php include 'components/header.php' ?>
    <?php include 'components/login.php' ?>
    <div class="container">
        <?php foreach ($products as $product){ ?>
            <a href="#/">
            <div class="productList">
                <p id="Center"><?php echo $product['productName'];?></p>
                <img id="Center" src="<?php echo "../../images/" , $product['image'];?>">
                <p id="Center"><?php echo $product['description']; ?></p>

            </div>
        </a> 
        <?php } ?>
    </div>
    <div>
        <a href="Vincero.php" class="BackToMain">
                <div><span>Go Back</span></div>
                <div><img src="../../images/vincero%20logo.png" alt="GoBack"></div>
        </a>
    </div>
    <script src='../../js/scriptLogin.js'></script>
</body>
</html>