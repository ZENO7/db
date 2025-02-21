<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "marksheet";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $Physics = $_POST['Physics'];
    $Chemistry = $_POST['Chemistry'];
    $Maths = $_POST['Maths'];
    $English = $_POST['English'];
    $Nepali = $_POST['Nepali'];
    $Computer = $_POST['Computer'];
    
    // Correct the SQL statement to match the proper order of values
    $sql = "INSERT INTO `student` (name, class, roll,Physics,Chemistry,Maths,English,Nepali,Computer) VALUES ('$name', '$class', '$roll','$Physics',' $Chemistry',' $Maths' ,' $English' ,'$Nepali' ,' $Computer' )";
    
    // Execute the query and check the result
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>
