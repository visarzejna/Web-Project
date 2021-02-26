<?php

abstract class PersonModel
{
    protected $username;
    protected $password;
    protected $age;
    protected $role;

    function __construct($username, $password, $age, $role)
    {
        $this->username = $username;
        $this->password = $password;
        $this->age = $age;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
