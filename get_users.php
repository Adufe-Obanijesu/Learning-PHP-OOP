<?php
require_once("database.php");

    class Users{
        public $conn;
        function get_users($num){
            global $database;
            $this->conn = $database->connection;
            $sql = "select * from test where id=$num";
            $query = mysqli_query($this->conn,$sql);
            $get = mysqli_fetch_array($query);
            echo "Your name is ".$get['name'];
            echo "<br>";
            echo "Your age is ".$get['age'];
        }

    }
$user = new Users;
$user->get_users(1);
?>