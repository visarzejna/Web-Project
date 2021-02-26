<?php
require_once "Database.php";

class Product
{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connection();
    }

    public function findById($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("SELECT * FROM products WHERE productId = ?");
        $query->bind_param('i', $id);
        $query->execute();
        return $query;
    }

    public function update(ProductModel $products, $id)
    {
        $connection = $this->connection;
        $productname = $products->getProductName();
        $description = $products->getDescription();
        $image = $products->getProductImage();
        $query = $connection->prepare("UPDATE products SET productName=?, image=?, description=? WHERE productId=?");
        $query->bind_param('sssi', $productname, $image, $description, $id);
        $query->execute();
        return $query;
    }

    public function FindByProductName($productname)
    {
        $connection = $this->connection;
        $query = $connection->prepare("SELECT * FROM products WHERE username = ? LIMIT 1");
        $query->bind_param('s', $productname);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function all()
    {
        $connection = $this->connection;
        $connection = $connection->query("SELECT * FROM products");

        $products = [];
        while ($row = $connection->fetch_assoc()) {
            array_push($products, $row);
        }

        return $products;

    }

    public function create(ProductModel $product)
    {
        $connection = $this->connection;
        $productName = $product->getProductName();
        $productImage = $product->getProductImage();
        $description = $product->getDescription();
        $query = $connection->prepare("INSERT INTO products (productName, image, description) VALUES (?, ?, ?)");
        $query->bind_param('sss', $productName, $productImage, $description);
        $query->execute();
        return true;
    }

    public function delete($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("DELETE FROM products WHERE productId=?");
        $query->bind_param('i', $id);
        $query->execute();
        return 204;
    }
}