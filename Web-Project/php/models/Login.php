<?php


class Login
{
    private $username = "";
    private $password = "";

    public function __construct($data)
    {
        $this->username = $data['login_username'];
        $this->password = $data['login_password'];
    }

    public function validate()
    {
        return !(empty($this->username) || empty($this->password));
    }

    public function authenticate()
    {
        $user = new User();
        $user = $user->findByUsername($this->username);

        if(!$user) {
            return "User does not exist!";
        }

        if(!password_verify($this->password, $user["password"])) {
            return "Password incorrect!";
        }

        if($user["role"] == "1") {
            $user_model = new AdminModel($user['userId'], $user['username'], $user['password'], $user['role'], $user['email']);
            $user_model->setSession();
        } else {
            $user_model = new UserModel($user['userId'], $user['username'], $user['password'], $user['role'], $user['email']);
            $user_model->setSession();
        }

        return true;
    }

    public function login()
    {
        if(!$this->validate()) {
            return false;
        }

        $authenticated = $this->authenticate();
        if($authenticated !== true) {
            var_dump($authenticated);
            return false;
        }
        // user logged in successfully
        header("Location:../views/Vincero.php");
        return true;
    }

}