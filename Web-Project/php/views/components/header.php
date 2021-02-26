<?php session_start(); ?>
<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
    <link href="/Web-Project/css/styleHeader.css" rel="stylesheet">
    <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script>  Per 3 vijat-->

    <input type="checkbox" id="check">
    <label for="check" class="ThreeLines">
        <i class="fa fa-bars"></i>
    </label>

    <div class="headerList">
        <div class="leftSideHeader">
            <ul class="ul">
                <li><a href="/Web-Project/php/views/about.php">ABOUT US</a></li>
                <li><a href="/Web-Project/php/views/contact.php">CONTACT US</a></li>
                <li><a href="/Web-Project/php/views/products.php">PRODUCTS</a></li>
                <li><a href="/Web-Project/php/views/news.php">NEWS</a></li>
            </ul>
        </div>
        <div class="rightSideHeader">
            <div> 
                <?php if(isset($_SESSION['role'])) { ?>
                <a href="../controllers/logout.php" class="LoginButton"> LOGOUT</a>
                    <?php if($_SESSION['role'] ===1){ ?>
                        <a href="/Web-Project/php/views/dashboard.php" class="dashboardBtn">
                            <i class="fa fa-cog"></i>
                        </a>
                        <?php }?>
                <?php } else{?>
                <a href="#/" id="loginButton" class="LoginButton"> LOGIN</a>
                
                <?php } ?>

            </div>
        </div>
    </div>
</header>