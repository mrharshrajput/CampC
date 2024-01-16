<?php
// Check if the request method is GET or POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the data from the query string
    $name = $_GET["name"];
    $email = $_GET["email"];
    // Display the data
    echo "You submitted the following data using GET method:<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the request body
    $name = $_POST["name"];
    $email = $_POST["email"];
    // Display the data
    echo "You submitted the following data using POST method:<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
}
?>
