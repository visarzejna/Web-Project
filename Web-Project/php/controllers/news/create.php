<?php 
    require_once '../../models/News.php';
    require_once '../../models/NewsModel.php';
    require_once '../../models/AddNews.php';
    
    if(isset($_POST['submit'])){
        $news = new AddNews($_POST);
        $news->add();
        
    }
?>