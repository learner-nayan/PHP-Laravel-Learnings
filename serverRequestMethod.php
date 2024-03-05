<form action="serverRequestMethod.php" method="post">
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

// print_r($_SERVER);
// print_r($_POST);
$_SESSION['name'] = "nothing";
print_r($_SESSION);

if(isset(($_POST['name'])) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['college'])){
    echo 'Hello '.$_POST['name'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['address'].'<br>';
    echo $_POST['college'].'<br>';
}