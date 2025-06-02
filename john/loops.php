<?php

// Loops in PHP 
// Loops are used to execute a block of code repeatedly until a specified condition is met. PHP supports several types of loops, including `for`, `while`, and `foreach`.

$people = ["John", "Jane", "Doe", "Lumanze"];


// Using a for loop
for ($i = 0; $i < count($people); $i++) {
    echo "Hello, how are you doing, how is your family, hope everthing is going fine " . $people[$i] . "<br>";
}


$states = ["Kampala", "Mbarara", "Gulu", "Jinja", "Masaka"];

// // Using a while loop

// $i = 0;
// while ($i < count($people)) {
//     echo "Hi, how are you " . $people[$i] . "<br>";
//     $i++;
// }
// // Using a foreach loop
// foreach ($people as $person) {
//     echo "Greetings, " . $person . "<br>";
// }

// foreach ($states as $state) {
//     echo "Welcome to " . $state . "<br>";
// }

// // Using a do-while loop

// $i = 0;

// do {
//     echo "Welcome, " . $people[$i] . "<br>";
//     $i++;
// } while ($i < count($people));




?>