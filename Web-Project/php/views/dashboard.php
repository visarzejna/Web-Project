<head>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/styleDashboard.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<?php
include 'components/header.php';
include 'components/login.php';
include_once '../models/User.php';
include_once '../models/Product.php'; 
include_once '../models/Contact.php';
include_once '../models/News.php';
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if (!isset($_SESSION["role"]) || $_SESSION['role'] != '1') {
    header("Location:../views/Vincero.php");
}

$users = new User();
$users = $users->all();
$products = new Product();
$products = $products->all();

$messages = new Contact();
$messages = $messages->all();
?>
    <section></section>
    <div class="container">
        <div class="tableContainer">
            <div class="users">
                <h1>User List:</h1>
                <table>
                    <thead>
                    <tr>
                        <td>Emri</td>
                        <td>Email</td>
                        <td>Roli</td>
                        <td>Modifiko</td>
                        <td>Fshij</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php 
                                if($user['role']==="1")  {
                                    echo "Admin";
                                }else {
                                    echo "User";
                                }
                            ?></td>
                            <td>
                                <a href=<?php echo "../views/user/edit.php?id=" . $user['userID'] ?>>Modifiko</a>
                            </td>
                            <td>
                                <a href=<?php echo "../controllers/users/delete.php?id=" . $user['userID'] ?>>Fshij</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div>
                <h1>Product List:</h1>
                <div class="products">
                    <?php foreach ($products as $product){ ?>
                    <div class="productsContainer">
                        <a href="#/">
                        <div class="productList">
                            <p id="Center"><?php echo $product['productName'];?></p>
                            <img id="Center" src="<?php echo "../../images/" , $product['image'];?>">
                            <p id="Center"><?php echo $product['description']; ?></p>
                        </div>
                        </a> 
                        <div class="deleteAndUpdate">
                            <a href=<?php echo "../controllers/products/delete.php?id=" .$product['productId'] ?> >Fshij</a>
                            <a href=<?php echo "../views/products/edit.php?id=" .$product['productId'] ?>>Perditeso</a>
                        </div>
                        
                    </div>
                    
                    <?php } ?>
                </div>
                <div class="addBtn">
                        <a href=<?php echo "products/create.php?id=" .$product['productId'] ?>>SHTO PRODUKTE</a>   
                        <a href=<?php echo "news/create.php?id=" .$product['productId'] ?>>SHTO LAJME</a>   
                </div>             
            </div>
            <div class="emails">
                <h1>Email List:</h1>
                <table>
                    <thead>
                        <tr>
                            <td>Emri</td>
                            <td>Subjekti</td>
                            <td>Mesazhi</td>
                            <td>Fshij</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($messages as $message){ ?>
                            <tr>
                                <td><?php echo $message['name']; ?></td>
                                <td><?php echo $message['subject']; ?></td>
                                <td><?php echo $message['message']; ?></td>
                                <td>
                                    <a href=<?php echo "../controllers/contact/delete.php?id=" .$message['contactId']?>>Fshij</a>
                                </td>
                            <?php }?>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<footer>
<script src='../../js/scriptLogin.js'></script>
<?php
include 'components/footer.php'
?>
</footer>