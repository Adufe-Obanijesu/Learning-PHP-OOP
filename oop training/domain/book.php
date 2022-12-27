<?php

namespace Bookstore\Domain;

    class Book{
        public $isbn;
        public $author;
        public $title;
        public $available;
        

        function __construct($isbn, $author, $title, $available = 0){
            $this->isbn = $isbn;
            $this->author = $author;
            $this->title = $title;
            $this->available = $available;
        }


        function __toString(){
            $result = $this->title." by ". $this->author;
            if(!$this->available){
                $result .= "Not available";
            }
            return $result;
        }

        function getCopy(){
            if($this->available > 0){
                echo "You have just purchased ".$this->title." By ".$this->author."<br>";
                $this->available -= 1;
            }else{
                echo "Sorry, we are out of this book<br>";
            }
        }

    }

   ?>