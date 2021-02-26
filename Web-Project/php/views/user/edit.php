<head>
    <link href="../../../css/styleEditUser.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<?php
    include '../components/header.php';
    include_once '../../models/User.php';
    
    // session_start();
    if (!isset($_SESSION["role"]) || $_SESSION['role'] != '1') {
        header("Location:../views/Vincero.php");
    }
    
    $users = new User();
    $users = $users->all();
?>
    <section></section>
    <div class="container">
        <h1>User edit</h1>
        <form action="../../controllers/users/update.php" method="POST">

            <input type="text" name="username" id="username" placeholder="Username">
            <input type="text" name="email" id="email" placeholder="Email">
            <select name="role" id="role" class="dropdown">
            <datalist id="role">
                <option value="">Roli</option>
                <option value="0">User</option>
                <option value="1">Admin</option>
            </datalist>
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">

            <input type="submit" value="Submit">

        </form>
    </div>
    



