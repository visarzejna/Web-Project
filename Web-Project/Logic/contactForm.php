<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];


    $mailTo = "visarzejna@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have recieved an e-mail from " .$name ."\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactUs.php");
    exit();
}

