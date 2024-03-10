<form action="process.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email"><br>
    <input type="submit">
</form>

<?php

// if(isset(($_GET['name'])) && isset($_GET['email'])){
//     echo 'Hello '.$_GET['name'].'<br>';
//     echo $_GET['email'];
// }
print_r($_POST);

if(($_POST['name']) !== null && isset($_POST['email'])){
    echo 'Hello '.$_POST['name'].'<br>';
    echo $_POST['email'];
}