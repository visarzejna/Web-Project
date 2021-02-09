<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincero products</title>
    <link href="../CSS/stylePR.css" rel="stylesheet">
    <link href="../CSS/style.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<body>
    <?php  include '../Components/header.php'?>
    <?php include '../Components/login.php'?>

    <div class="title">What are you looking for?</div>

    <div class="container">
        <div class="left">
            <a href="mensCollection.php">
                <img src="../Images/leftSideWatch.jpg" class="photo" alt=""> 
                <p class="underImg">Mens Collection</p>
            </a>
        </div>
        <div class="right">
            <a href="womensCollection.php">
                <img src="../Images/rightSideWatch.jpg" class="photo" alt="">
                <p class="underImg">Womens Collection</p>
            </a>
        </div>
    </div>

    <div class="footer">
        <a href="Vincero.php" class="backToMain">
            <div><span>Go Back</span></div>
            <div><img src="../Images/vincero logo.png" alt="GoBack"></div>
        </a>
    </div>
    <script src='../Script/script.js'></script>
</body>
</html>