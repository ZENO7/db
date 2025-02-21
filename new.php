<?php
// Database connection
include 'index.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form input
$name = $_POST['name'] ?? '';
$roll = $_POST['roll'] ?? '';

// Query to search student
$sql = "SELECT * FROM student WHERE name='$name' AND roll='$roll'";
$result = $conn->query($sql);

// Display result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Name: " . $row['name'] . "<br>";
    echo "Class: " . $row['class'] . "<br>";
    echo "Roll No: " . $row['roll'] . "<br>";
    echo "Physics: " . $row['Physics'] . "<br>";
    echo "Chemistry: " . $row['Chemistry'] . "<br>";
    echo "Maths: " . $row['Maths'] . "<br>";
    echo "English: " . $row['English'] . "<br>";
    echo "Nepali: " . $row['Nepali'] . "<br>";
    echo "Computer: " . $row['Computer'] . "<br>";
} else {
    echo "No record found!";
}

$conn->close();
?>
