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
        <form action="../../controllers/news/create.php" method="POST">
            <input type="text" name="titulli" placeholder="Titulli">
            <textarea name="permbajtja" id="" cols="30" rows="10" placeholder="Permbajtja"></textarea>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>