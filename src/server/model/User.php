<?php

class User{
    public $id;
    public $user_name;
    public $user_mobile;
    public $user_role;
    public $user_password;

    function __construct($user_name, $user_mobile, $user_role, $user_password){
        $this->user_name = $user_name;
        $this->user_mobile = $user_mobile;
        $this->user_role=$user_role;
        $this->user_password = $user_password;
    }
    function setId($id){
        $this->id= $id;
    }

    function getId(){
        return $this->id;
    }
    function getUserName(){
        return $this->user_name;
    }
    function getUserMobile(){
        return $this->user_mobile;
    }
    function getUserRole(){
        return $this->user_role;
    }
    function getUserPassword(){
        return $this->user_password;
    }
    
}