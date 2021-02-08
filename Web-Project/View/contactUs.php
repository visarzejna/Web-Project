<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
    <link  href="../CSS/styleCU.css" rel="stylesheet">
    <script src="https://smtpjs.com/v3/smtp.js"></script> 
    <script src="index.js"></script>
</head>
<body>
    <?php include '../Components/header.php'?>
    <?php include '../Components/login.php'?>
    <section></section>
    <div class="content">
        <p class="title">Contact us at:</p>
        <a href="#">
            <div class="logos">
                <img src="../Images/fbLogo.png" alt="fb">
                <div>Facebook</div>
            </div>
        </a>
        <a href="#">
            <div class="logos">
                <img src="../Images/instalogogog.png" alt="fb">
                <div>Instagram</div>
            </div>
        </a>
       <a href="#"> 
           <div class="logos">
                <img src="../Images/whatsapplogo.png" alt="fb">
                <div>WhatsApp</div>
            </div>
        </a>
        <a href="Vincero.php" class="BackToMain">
            <div><span>Go Back</span></div>
            <div><img src="../Images/vincero logo.png" alt="GoBack"></div>
        </a>
    </div>
    <script src='../Script/script.js'></script>
    <script>
      document.getElementById("loginButton").addEventListener("click", function(){
      document.querySelector(".content").style.display = "none";
    })
    document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".content").style.display = "flex";
})
    </script>
</body>
</html>