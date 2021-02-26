<?php


class Register
{
    private $username = "";
    private $password = "";
    private $userEmail = "";

    public function __construct($data)
    {
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->userEmail = $data['email'];
    }
    public function validate()
    {
        return !(empty($this->username) || empty($this->password));
    }
    public function register()
    {   
        if(!$this->validate()){
            echo 'Nuk keni shkruar te dhenat!';
            return false;
        }
        $user_model = new UserModel($this->username, $this->password, 25, 0, $this->userEmail);
        $user = new User();
        $user = $user->create($user_model);
        if($user) {
            header("Location:../views/Vincero.php");
        }
    }
}