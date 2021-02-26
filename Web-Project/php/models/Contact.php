<?php
require_once "Database.php";

class Contact {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connection();
    }
    public function findById($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("SELECT * FROM contact WHERE contactId = ?");
        $query->bind_param('i', $id);
        $query->execute();
        return $query;
    }
    public function all()
    {
        $connection = $this->connection;
        $connection = $connection->query("SELECT * FROM contact");

        $users = [];
        while ($row = $connection->fetch_assoc()) {
            array_push($users, $row);
        }

        return $users;

    }
    public function create(ContactModel $contact)
    {
        $connection = $this->connection;
        $name = $contact->getName();
        $subject = $contact->getSubject();
        $message = $contact->getMessage();

        $query = $connection->prepare("INSERT INTO contact (name, subject, message) VALUES (?, ?, ?)");
        $query->bind_param('sss', $name, $subject, $message);
        $query->execute();
        return true;
    }
    public function delete($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("DELETE FROM contact WHERE contactId=?");
        $query->bind_param('i', $id);
        $query->execute();
        return 204;
    }
}