<?php
include_once '../../models/User.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = new User();
    $user->delete($id);
    header("Location:../../views/dashboard.php");
}
