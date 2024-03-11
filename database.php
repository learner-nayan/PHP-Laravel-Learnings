<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "php_project";

$conn = new mysqli($server_name, $user_name, $password, $database);

if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}else{
    echo "Database connected successfully";
}

$sql = "INSERT INTO users(name, email) VALUES('Nayan','nayan@gmail.com')";
$result = $conn->query($sql);

if ($result){
    echo "Data recorded successfully";
}else{
    echo "Error".$sql.$conn->error;
}