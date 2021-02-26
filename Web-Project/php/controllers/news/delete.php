<?php
require_once '../../models/News.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $news = new News();
    $news->delete($id);
    header("Location:../../views/news.php");
}