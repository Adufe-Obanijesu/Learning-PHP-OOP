<?php

namespace Bookstore\Domain;

abstract class Customer extends Person{
    private static $lastId = 0;
    private $id;
    // private $firstname;
    // private $surname;
    private $email;
    
    public function __construct($id, $firstname, $surname, $email){
        //$this->id = $id;
        parent::__construct($firstname, $surname);
        if($id == null){
            $this->id = ++self::$lastId;
        }else{
            $this->id = $id;
            if($id > self::$lastId){
                self::$lastId = $id;
            }
        }

        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    public static function getLastId(){
        return self::$lastId;
    }

    public function getFirstName(){
        return $this->firstname;
    }

    public function getSurName(){
        return $this->surname;
    }

    public function getFullName(){
        return strtoupper($this->surname." ".$this->firstname);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function sayHi(){
        return 'Howdy '.$this->firstname. ' '.parent::sayHi();
    }
}
?>