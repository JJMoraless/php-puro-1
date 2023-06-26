<?php

class User
{
    public function __construct(private $username, private $password, private $email)
    {
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setUsername(string $username){
        $this->username = $username;
    }
}


$cliente = new User(username:"personita",password:"password",email:"as");

var_dump($cliente);

