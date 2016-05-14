<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class User{

	private $id=0;
	private $name;
	private $password;



    public function __construct() 
    {

    }

    public function getId(){
        return $this->id;
    }


    public function  setId($id){
        $this->id=$id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function __toString() 
    {
        return $this->username;
    }

    public function affichePassword(){
        return 'toto'.$this->password;
    }
}