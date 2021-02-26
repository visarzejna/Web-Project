<?php

require_once '../../models/News.php';
require_once '../../models/NewsModel.php';
if (isset($_POST['titulli']) && isset($_POST['permbajtja'])) {
    $id = $_POST['id'];
    $titulli = $_POST['titulli'];
    $permbajtja = $_POST['permbajtja'];
    if((empty($titulli) || empty($permbajtja))){
        echo "Jepi te gjitha te dhenat!";
    } else{
        $news_model = new NewsModel($titulli , $permbajtja);
        $news = new News();
        $news = $news->update($news_model, $id);
        header("Location:../../views/news.php");
    }
    
}