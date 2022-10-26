<?php


function db() {
    //set your configs here
    $host = "localhost";
    $user = "dev";
    $db = "zuriphp";
    $password = "Devthings123_@";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;

}