<?php
require './connection.php';


$name = "";
$email = "";
$comment ="";


if (!empty($_POST)) {
    $name = $_POST['username'];
    $email = $_POST['password'];
    $comment = $_POST['password'];

    $sql_user_store_data = "INSERT into myuser (name, email ,comment) VALUES ('$name','$email','$comment)";

    if ($con->query($sql_user_store_data)) {
        echo "record entred!";
        header("Location:./index.php");
    }
}
?>