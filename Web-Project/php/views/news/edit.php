<head>
    <link href="../../../css/styleEditProduct.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<?php
include '../components/header.php';
?>
<section></section>
    <div class="container">
        <form action="../../controllers/news/update.php" method="POST">
            <input type="text" name="titulli" placeholder="Titulli">
            <textarea name="permbajtja" id="" cols="30" rows="10" placeholder="Permbajtja"></textarea>
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <input type="submit" value="Submit">
        </form>
    </div>
    

