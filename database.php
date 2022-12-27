<?php 

    class Database{

        public $connection;

        function __construct(){
            $this->open_database_conn();
        }

        function open_database_conn(){
            $this->connection = mysqli_connect("localhost", "root", "", "shopping");
        }
    }

    $database = new Database;

?>