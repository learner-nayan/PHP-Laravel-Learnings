<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<body>

<h3>Create User</h3>

<div>
    <form action="/users/create.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your name.." requied>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email.." reqired>

        <input type="submit" value="Submit">
    </form>
</div>

</body>

</html>


<?php
global$connection;

include "database.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];


    $sql = "INSERT INTO users(name, email) VALUES('$name', '$email')";
//    echo "Connection: ".$connection;
    echo $sql;

    $result = $connection->query($sql);

    if($result){
        echo "Record created successfully";
        header("Location: create.php");
        exit();
    }else{
        echo "Error: ".$connection->error;
    }

}