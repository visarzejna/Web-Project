<?php 

require_once 'Database.php';

class News {
    private $connection;

    public function __construct(){
        $database = new Database();
        $this->connection = $database->connection();
    }

    public function update(NewsModel $news, $id)
    {
        $connection = $this->connection;
        $titulli = $news->getTitulli();
        $permbajtja = $news->getPermbajtja();
        $query = $connection->prepare("UPDATE news SET title=?, permbajtja=? WHERE newsId=?");
        $query->bind_param('ssi', $titulli, $permbajtja, $id);
        $query->execute();
        return $query;
    }
    public function all()
    {
        $connection = $this->connection;
        $connection = $connection->query("SELECT * FROM news");

        $news = [];
        while ($row = $connection->fetch_assoc()) {
            array_push($news, $row);
        }

        return $news;

    }
    public function findById($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("SELECT * FROM news WHERE newsId = ?");
        $query->bind_param('i', $id);
        $query->execute();
        return $query;
    }
    public function create(NewsModel $news)
    {
        $connection = $this->connection;
        $titulli = $news->getTitulli();
        $permbajtja = $news->getPermbajtja();

        $query = $connection->prepare("INSERT INTO news (title, permbajtja) VALUES (?, ?)");
        $query->bind_param('ss', $titulli, $permbajtja);
        $query->execute();
        return true;
        
    }

    public function delete($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("DELETE FROM news WHERE newsId=?");
        $query->bind_param('i', $id);
        $query->execute();
        return 204;
    }
}