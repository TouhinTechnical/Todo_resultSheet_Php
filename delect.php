<?php
    $id = $_GET['id'];
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "result_db";
    $connection = new mysqli($server_name,$user_name,$password,$database_name);
    $read_query = "DELETE FROM result WHERE id = '$id'";
    $result = $connection->query($read_query);
    header("Location:read.php");
?>