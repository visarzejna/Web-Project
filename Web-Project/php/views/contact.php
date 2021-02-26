<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
    <link href="../../css/styleCU.css" rel="stylesheet">
    <script src="https://smtpjs.com/v3/smtp.js"></script> 
</head>
<body>
    <?php include 'components/header.php' ?>
    <?php include 'components/login.php' ?>
    <section></section>
    <div class="content">
        <p class="title">Contact us at:</p>
        <a href="#">
            <div class="logos">
                <img src="../../images/fbLogo.png" alt="fb">
                <div>Facebook</div>
            </div>
        </a>
        <a href="#">
            <div class="logos">
                <img src="../../images/instalogogog.png" alt="fb">
                <div>Instagram</div>
            </div>
        </a>
        
       <a href="#"> 
           <div class="logos">
                <img src="../../images/whatsapplogo.png" alt="fb">
                <div>WhatsApp</div>
            </div>
        </a>
        <div class="switchContainer">
            <div class="message">
                <p>Message us</p>
            </div>
        </div>
        <a href="Vincero.php" class="BackToMain">
            <div><span>Go Back</span></div>
            <div><img src="../../images/vincero%20logo.png" alt="GoBack"></div>
        </a>
    </div>
    <div class="contactForm">
        <form action="../controllers/contact/send.php" method="POST">
            <div class="name-subject">
                <input type="text" name="name" placeholder="Name"  class="form-input">
                <input type="text" name="subject" placeholder="Subject" class="form-input">
            </div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-input"></textarea>
            <input type="submit" name="submit" class="submitBtn" value="SUBMIT">
        </form>
        <div class="switchContainer">
            <div class="socialMedia">
                <p>Our Social Media</p>
            </div>
        </div>
        <a href="Vincero.php" class="BackToMain">
            <div><span>Go Back</span></div>
            <div><img src="../../images/vincero%20logo.png" alt="GoBack"></div>
        </a>
        
    </div>
    <script src='../../js/scriptContact.js'></script>
    <script src='../../js/scriptLogin.js'></script>
</body>
</html>