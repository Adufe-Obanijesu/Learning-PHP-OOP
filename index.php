<?php
require_once('database.php');
global $database;
$conn = $database->connection;
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $sql = "select * from users where name='$name'";
    $query = mysqli_query($conn, $sql);
    if($query){
        if(mysqli_num_rows($query) > 0){
            $res = mysqli_fetch_array($query);
            $res_pwd = $res['password'];
            if($pwd == $res_pwd){
                echo "Hello ".$name;
                ?>
        
                <?php
            }else{
                echo "Incorrect password";
            }
        }else{
            echo "User does not exist";
        }
    }else{
        echo "Query not successful";
    }
?>