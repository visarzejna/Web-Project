<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/style.css?<?=filemtime("style.css")?>" rel="stylesheet" type="text/css" />
    
    <title>Watch Store</title>
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<body>
    <?php  include '../Components/header.php' ?>
    <div class="popup">
    
         <div class="popupcontent">
             <img src="../Images/CloseButton.png" alt="x" id="close">
             <span>Be the first to get notified about new drops.</span>
             <img src="../Images/userIMG.png" class="userPhoto">
             <div class="hideLogin">
                <input type="text" placeholder="Username" id="username">
                <input type="password" placeholder="Password" id="userpass">
                <a href="#" class="button" onclick="myFunction()">Login</a>
                <p>Don't have an account? <a href="#" id="SignUp">Sign up</a></p>
             </div>
             <div>
                
                    <div id="RegisterInput">
                        <input type="email" placeholder="Email" id="rEmail">
                        <input type="text" placeholder="Username" id="rUName">
                        <input type="password" placeholder="Password" id="rPass">
                        <a href="#"  id="RegisterButton" onclick="rFunction()">Register</a>
                    </div>
                
                
                </div> 
            </div> 
              
        </div>
    </div>
    <article>
        <div class="BrandLogo">
            <img src="../Images/vincero logo.png">
        </div>
        <div class="mainContainer">
            <div class="mainArticle">
                <div class="Article1">
                    <p>Nothing about the Chrono S is subtle.<Br> 
                        From the sharp design of the case to the croc Italian leather band, 
                        the Chrono S was designed to catch people’s eye.
                         The hard angles make this timepiece cool enough to wear everyday, 
                         and edgy enough to get you noticed anywhere you go.
                    </p>
                </div>
               <div class="Article2">
                   <img src="../Images/MensWatch.jpg" class="MainImage">
               </div> 
            </div>
           <div class="OtherWatches">
               <a href="#">
                   <div class="WatchList">
                          <p id="Center">ROSE GOLD</p>
                         <img  id="Center"src="../Images/Photo3rdDIV1.png">
                         <p id="Center">LEATHER STRAPS</p>
                    </div>
                </a>
                <a href="#">
                    <div class="WatchList">
                        <p id="Center">BLACK ON BLACK</p>
                        <img id="Center" src="../Images/Photo3rdDIV2.png">
                        <p id="Center">STEEL STRAPS</p>
                    </div>
                </a>
                <a href="#">  
                    <div class="WatchList">
                        <p id="Center">GOLD&BLACK</p>
                        <img id="Center" src="../Images/Photo3rdDIV3.png">
                        <p id="Center">TACHYMETER ON</p>
                    </div>
                 </a>
                 <a href="#">  
                    <div class="WatchList">
                        <p id="Center">ALL BLACK</p>
                        <img  id="Center"src="../Images/Photo3rdDIV4.png">
                        <p id="Center">100 METERS RESISTANCE</p>
                    </div>
                 </a>
           </div>
        </div>
    </article>
    <footer> <?php include '../Components/footer.php'?>  </footer>
       
    
    <script src='../Script/script.js'></script>
                
    
    
</body>
</html>