<head>
    <link href="../../css/styleNews.css" rel="stylesheet">
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1146/1146562.svg" type="image/x-icon">
</head>
<body>
    <?php include 'components/header.php'; 
         include 'components/login.php' ;
         include_once '../models/News.php';
         $news = new News();
         $news = $news->all();
         ?> 
         <section></section>
        <div class="container">
            <?php foreach ($news as $new) { ?>
                <div class="newsList">
                    <div class="textFormat"><h1><?php echo $new['title'];?></h1></div>
                    <div class="textFormat"><p><?php echo $new['permbajtja'];?></p></div>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 1 ){ ?>
                        <div class="deleteAndUpdate">
                            <a href=<?php echo "../controllers/news/delete.php?id=" .$new['newsId']; ?> >Fshij</a>
                            <a href=<?php echo "../views/news/edit.php?id=" .$new['newsId']; ?>>Perditeso</a>
                        </div>
                        <?php } ?>
                </div>
                <?php } ?>
        </div>
        <script src='../../js/scriptLogin.js'></script>
</body>