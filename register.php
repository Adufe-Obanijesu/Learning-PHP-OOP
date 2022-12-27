<?php
require_once("classes.php");
global $users;
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pwd = $_POST['pwd'];

    $user->add_user($name,$mail,$pwd);

    header("Location: sign_in.php");
?>