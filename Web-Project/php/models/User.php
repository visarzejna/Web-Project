<?php
require_once "Database.php";

class User
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
        $query = $connection->prepare("SELECT * FROM user WHERE userId = ?");
        $query->bind_param('i', $id);
        $query->execute();
        return $query;
    }

    public function update(UserModel $user, $id)
    {
        $connection = $this->connection;
        $username = $user->getUsername();
        $email = $user->getEmail();
        $role = $user->getRole();
        $query = $connection->prepare("UPDATE user SET username=?, email=?, role=? WHERE userId=?");
        $query->bind_param('sssi', $username, $email, $role, $id);
        $query->execute();
        return $query;
    }

    public function findByUsername($username)
    {
        $connection = $this->connection;
        $query = $connection->prepare("SELECT * FROM user WHERE username = ? LIMIT 1");
        $query->bind_param('s', $username);
        $query->execute();
        return $query->get_result()->fetch_assoc();
    }

    public function all()
    {
        $connection = $this->connection;
        $connection = $connection->query("SELECT * FROM user");

        $users = [];
        while ($row = $connection->fetch_assoc()) {
            array_push($users, $row);
        }

        return $users;

    }

    public function create(UserModel $user)
    {
        $connection = $this->connection;
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);

        $query = $connection->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $query->bind_param('sss', $username, $email, $password);
        $query->execute();
        return true;
    }

    public function delete($id)
    {
        $connection = $this->connection;
        $query = $connection->prepare("DELETE FROM user WHERE userId=?");
        $query->bind_param('i', $id);
        $query->execute();
        return 204;
    }
}
