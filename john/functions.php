<?php

// Function in PHP 
// Functions are reusable blocks of code that perform a specific task. They can take parameters and return values. PHP supports both built-in functions and user-defined functions.




// trim($name); // Removes whitespace from the beginning and end of the string


function greet($name, $food) {
    echo "Hello, " . $name . "!". " How are you doing? I hope you are enjoying your " . $food . ".<br>";
}



greet("David", "Pounded yam");
greet("Lumanze", "Rice and beans");
greet("John", "Ugali");
greet("Peter", "Matoke");
greet("Jane", "Chapati");
greet("Doe", "Samosa");


?>