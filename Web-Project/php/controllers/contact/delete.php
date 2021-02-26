<?php
include_once '../../models/Contact.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $contact = new Contact();
    $contact->delete($id);
    header("Location:../../views/dashboard.php");
}
