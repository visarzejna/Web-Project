<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once '../models/AdminModel.php';
require_once '../models/UserModel.php';
require_once '../models/User.php';
require_once "../models/Register.php";
require_once "../models/Login.php";



if (isset($_POST['loginBtn'])) {
    $login = new Login($_POST);
    $login->login();
} else if (isset($_POST['registerBtn'])) {
    $register = new Register($_POST);
    $register->register();
}
else {
    header("Location:../views/Vincero.php");
}