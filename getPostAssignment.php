<!-- <form action="getPostAssignment.php" method="get">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address"><br>
    <label for="college">College Name:</label>
    <input type="text" name="college" id="college"><br>
    <input type="submit">
</form> -->

<form action="getPostAssignment.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address"><br>
    <label for="college">College Name:</label>
    <input type="text" name="college" id="college"><br>
    <input type="submit">
</form>

<?php

// if(isset(($_GET['name'])) && isset($_GET['email'])){
//     echo 'Hello '.$_GET['name'].'<br>';
//     echo $_GET['email'];
// }

if(isset(($_POST['name'])) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['college'])){
    echo 'Hello '.$_POST['name'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['address'].'<br>';
    echo $_POST['college'].'<br>';
}