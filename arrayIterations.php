<?php

//one dimensional array
$countriesArray = ["Nepal", "USA", "England", "Russia"];

foreach($countriesArray as $country){
    echo $country."&emsp;";
}

echo "<br><br>";

// multi dimensional array (2 dimension)
$studentsArray = [
    ["Ram", 1],
    ["Shyam", 2],
    ["Hari", 3],
    ["Sita", 4]
];

foreach($studentsArray as $studentDetails){
    foreach($studentDetails as $allDetails){
        echo $allDetails."&emsp;";
    }
    echo "<br>";
}

echo "<br>";

//Assosiative array (also multi-dimensional)
$employesArray = [
    ["Id:"=>301, "Post:"=>"Software Engineer", "Salary:"=>100000],
    ["Id:"=>302, "Post:"=>"System Engineer", "Salary:"=>80000],
    ["Id:"=>303, "Post:"=>"Network Engineer", "Salary:"=>90000],
    ["Id:"=>304, "Post:"=>"Data Engineer", "Salary:"=>120000]
];

foreach($employesArray as $employeeDetails){
    foreach($employeeDetails as $key=>$value){
        echo $key." ".$value."&emsp;&emsp;";
    }
    echo "<br>";
}