
<?php
// echo "Hello from database file";

$server_name = "localhost";
$user = "root";
$password = "";
$database = "php_project";

$connection = new mysqli($server_name,$user,$password,$database);
print_r($connection); 

if($connection->connect_error){
    die("Connection failed". $connection->connect_error);
}else{
    echo "Database connected successfully!!";
}
