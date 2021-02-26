<?php 

require_once '../../models/Contact.php';
require_once '../../models/ContactModel.php';
require_once '../../models/SendMessage.php';

if(isset($_POST['submit'])){
    $message = new SendMessage($_POST);
    $message->send();
}

?>