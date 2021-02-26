<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
    <title>Vincero</title>
    
</head>
<body>
<?php include 'components/header.php' ?>
<?php include 'components/login.php' ?>
<article>
    <div class="brandLogo">
        <img src="../../images/vincero%20logo.png" alt="BrandLogo">
    </div>
    <div class="mainContainer">
        <div class="mainArticle">
            <div class="Article1">
                <p>
                    Nothing about the Chrono S is subtle.
                    From the sharp design of the case to the croc Italian leather band,
                    the Chrono S was designed to catch people’s eye.<br>
                    The hard angles make this timepiece cool enough to wear everyday,
                    and edgy enough to get you noticed anywhere you go.
                </p>
            </div>
            <div class="Article2">
                <img src="../../images/MensWatch.jpg" class="" alt="">
            </div>
        </div>
        <div class="otherWatches">
            <i class="fa fa-chevron-left" id="prevBtn"></i>
            <i class="fa fa-chevron-right" id="nextBtn"></i>
            <a href="../views/products.php" class="active">
                <div class="watchList">
                    <p id="Center">ROSE GOLD</p>
                    <img id="Center" src="../../images/Photo3rdDIV1.png">
                    <p id="Center">LEATHER STRAPS</p>
                </div>
            </a>
            <a href="../views/products.php" class="active">
                <div class="watchList">
                    <p id="Center">BLACK ON BLACK</p>
                    <img id="Center" src="../../images/Photo3rdDIV2.png">
                    <p id="Center">STEEL STRAPS</p>
                </div>
            </a>
            <a href="../views/products.php" class="active">
                <div class="watchList">
                    <p id="Center">GOLD&BLACK</p>
                    <img id="Center" src="../../images/Photo3rdDIV3.png">
                    <p id="Center">TACHYMETER ON</p>
                </div>
            </a>
            <a href="../views/products.php" class="not-active">
                <div class="watchList">
                    <p id="Center">ALL BLACK</p>
                    <img id="Center" src="../../images/Photo3rdDIV4.png">
                    <p id="Center">100 METERS RESISTANCE</p>
                </div>
            </a>
            <a href="../views/products.php" class="not-active">
                <div class="watchList">
                    <p id="Center">THE OUTRIDER</p>
                    <img id="Center" src="../../images/Photo3rdDIV6.png">
                    <p id="Center">BRUSHED GOLD/ARMY</p>
                </div>
            </a>
            <a href="../views/products.php" class="not-active">
                <div class="watchList">
                    <p id="Center">MARBLE-AUTOMATIC</p>
                    <img id="Center" src="../../images/Photo3rdDIV5.png">
                    <p id="Center">BLACK VERDE</p>
                </div>
            </a>


        </div>
        <div class="shopBtn">
            <a href="products.php">SHOP NOW</a>
        </div>
    </div>
</article>


<footer>
    <?php include 'components/footer.php' ?>
</footer>
<script src='../../js/script.js'></script>
<script src='../../js/scriptLogin.js'></script>
</body>
</html>