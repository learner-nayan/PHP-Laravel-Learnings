<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
<!-- create button -->
<h2><a href="create.php">Create User</a></h2>

<h1>Users Table</h1>

<table id="customers">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php
    echo "Hello";
    // global$connection;

    // include "database.php";
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

    // echo "Hello from database file";

    $sql = "SELECT id,name,email FROM users";
    $result = $connection->query($sql);

    if($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            print_r($row);
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo  "<td><a href='#'>Edit</a><td>";
            echo "</tr>";
        }
    }

    ?>

    <!-- dynamically users list -->
</table>

</body>
</html>