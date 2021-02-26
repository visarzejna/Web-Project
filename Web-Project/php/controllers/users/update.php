<?php

include_once '../../models/User.php';
include_once '../../models/UserModel.php';

if (isset($_POST['username']) && isset($_POST['email'])) {


    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $error = "Shkruaj te gjitha te dhenat";
    if((empty($username) || empty($email))){
        echo $error;
    }else {
        $user_model = new UserModel($username, "", "", $role, $email);
        $user = new User();
        $user = $user->update($user_model, $id);
        header("Location:../../views/dashboard.php");
    }
    
}
