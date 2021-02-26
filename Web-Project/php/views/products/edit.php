<head>
    <link href="../../../css/styleEditProduct.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<?php
include '../components/header.php';
?>
<section></section>
    <div class="container">
        <form action="../../controllers/products/update.php" method="POST">
            <input type="text" name="title" placeholder="Product name">
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
            <input type="file" name="image" class="file-input">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <input type="submit" value="Submit">
        </form>
    </div>
    

