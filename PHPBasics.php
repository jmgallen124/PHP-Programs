<?php
// Function to demonstrate various PHP concepts.

// Global function variable
$grade = 95;

// Function to show grade
function grades() {
    static $grade = 96;
    $grade++;
    echo "Jeremy's grade in scope of function is " .$grade.".<br/>";
}

// Function to demonstrate echo
function welcome() {
    echo "Hello, Jeremy. Welcome to the PHP language.<br/>";
}

// Function to demonstrate print
function printDemo() {
    print "Hello, Jeremy, this is a demonstration of the print function.<br/>";
}

// Function to demonstrate basics of variables
function vars() {
    // Declare numerical variables, string, and boolean
    $num1 = 42;
    $num2 = 38;
    $num3 = 3.14;
    $age1 = 25;
    $age2 = 16;
    $greeting = "Salutations.";
    $tf = true;

    // Output variables and sums.
    echo $num1."<br/>";
    echo $num2."<br/>";
    echo $num1 + $num2."<br/>";
    echo $num1 + $num3."<br/>";
    echo $greeting."<br/>";

    // Get variable data types
    echo var_dump($num1)."<br/>";
    echo var_dump($num2)."<br/>";
    echo var_dump($num3)."<br/>";
    echo var_dump($greeting)."<br/>";
    echo var_dump($tf);
}

// Function to demonstrate switch
function switchDemo () {
    // Declare grade
    $grade = 97;

    // Demonstrate switch statement
    switch($grade) {
        case($grade < 60):
            echo "Student failed.<br/>";
            break;
        case($grade < 70):
            echo "Student barely passed.<br/>";
            break;
        case($grade < 80):
            echo "Student did average.<br/>";
            break;
        case($grade < 90):
            echo "Student did above average.<br/>";
            break;
        case($grade < 100):
            echo "Student did very well.<br/>";
            break;
        case($grade == 100):
            echo "Student did perfectly.<br/>";
            break;
        default:
            echo "There was something wrong with the grade variable.<br/>";
    }
}

// Function to demonstrate conditions
function conditions() {
    // Declare age
    $age = 15;

    // Demonstrate if/else
    if($age >= 150)
        echo "Person is likely deceased.<br/>";
    else if($age >= 18) 
        echo "Person is eligible for vaccination.<br/>";
    else
        echo "Person is not eligible for vaccination.<br/>";
}

// Function to demonstrate loops
function loops() {
    // Demonstrate for loop
    for($it = 0; $it < 10; $it++)
    echo $it." ";
    echo "<br/>";

    // Demonstrate while loop
    $w = 10;
    while($w > 0)
    echo $w--.", ";

    echo "blast off!<br/>";
}

// Function to demonstrate strings
function strings() {
    $name = "Jeremy Gallen";
    echo strlen($name)."<br/>";
    echo str_word_count($name)."<br/>";
    echo strrev($name)."<br/>";
}

// Function to demonstrate arguments
function arguments($name) {
    echo "Hello, ".$name.". This is a demonstration of function arguments.<br/>";
}

// Function to demonstrate changing values by reference
function reference(&$myName) {
    $myName = "Jeremy Gallen";
}

// Function to demonstrate arrays
function arrays() {

    // Demonstrate one-dimensional array
    $siblings = array("Nat", "Nate", "Remy", "Chris");
    foreach($siblings as $sibling)
        echo $sibling."<br/>";
    echo count($siblings)."<br/>";

    // Demonstrate two-dimensional array
    $matrix = array(
        array(9, 2, 4),
        array(3, 5, 7),
        array(6, 1, 8)
    );

    // Demonstrate matrix math
    echo $matrix[0][0] * $matrix[1][1] + $matrix[0][1]."<br/>";
}

// Demonstrate global scope
echo "Grade in global scope is ".$grade.".<br/>";

// Call welcome function
welcome();

// Call variables function
vars();

// Run grade function to demonstrate static scope
grades();
grades();
grades();

// Demonstrate print function
printDemo();

// Demonstration conditions
conditions();

// Call loops function
loops();

// Call strings function
strings();

// Call arguments function
arguments("Jeremy");

// Call reference demo function
$initials = "JG";
echo $initials."<br/>";
reference($initials);
echo $initials."<br/>";

// Call arrays function
arrays();

// End program
?>