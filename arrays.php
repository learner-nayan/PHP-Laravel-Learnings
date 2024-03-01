<?php
// one dimentional array
$countries = ["Nepal", "India", "China", "USA"];
print_r($countries)."<br>";
print($countries[3])."<br>";

//associative array
$person = [
    "name" => "Nayan",
    "surname" => "Khanal",
    "Semester" => "Third",
];

print_r($person)."<br>";
print_r($person["name"])."<br>";


//multi-dimentional array
$employee = [
    ["name"=>"Ram", "salary"=>25000],
    ["name"=>"Shyam", "salary"=>30000],
    ["name"=>"Hari", "salary"=>50000]
];

print_r($employee)."<br>";
print_r($employee[1]["salary"])."<br>"; // to print shyam's salary
