<?php
require_once("database.php");

    class Extend{
        function __construct(){
            global $database;
            $this->conn = $database->connection;            
        }
    }

    class Users extends Extend{
        public $conn;
       
        function add_user($name,$email,$pwd){

            $sql = "insert into users (name, email, password) values('$name', '$email', '$pwd')";
           
            $query = mysqli_query($this->conn,$sql);
            if($query){
                echo "User successfully registered";
            }else{
                echo "User couldnt be registered";
            }
        }

    }

    class Cat_upload extends Extend{
        public $conn;
        function create_cat($cat_name, $cat_image, $type){
            $sql = "insert into $type (cat_name, cat_image) values('$cat_name', '$cat_image')";
            $query = mysqli_query($this->conn,$sql);
            if($query){
                $this->upload_image($cat_image);
                
            }else{
                echo "Query was not successful";
            }
        }
        function upload_image($cat_image){
            $file_tmp = $_FILES['$cat_image'];
            $file_name = $_FILES['$cat_image']['name'];
            $file_type = $_FILES['$cat_image']['type'];
            $file_path = "photo/".$file_name;
            move_uploaded_file($file_tmp, $file_path);
        }
    }

$user = new Users;
$cat_upload = new Cat_upload;
?>