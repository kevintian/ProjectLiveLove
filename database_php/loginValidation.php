<?php
session_start();

//Connects to database and initializes variable $dbc
require 'dbConnection.php';

$username = $_POST["username"];
$password = $_POST["password"];

//check if user exists//
$stmt = $dbc->prepare('SELECT * FROM accounts WHERE username = ?');
//s means string
$stmt->bind_param('s', $username);
//$query = "(SELECT * FROM accounts WHERE username= $username)";
$stmt->execute();
$response = $stmt->get_result();

//If the user exists
if ($response->num_rows != 0) {
    //Get the users hashed password
    $stmt = $dbc->prepare('SELECT password, accountType FROM accounts WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();

    $response = $stmt->get_result();
    $row = mysqli_fetch_assoc($response); //Gets the first (and only) row as an associative array

    $hashedPass = $row["password"];
    if (password_verify($password, $hashedPass)) {
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = $row["accountType"];
        echo $_SESSION['user_type'];

    } else {
        echo "Incorrect Password";
    }
} else {
    echo "User does not exist!";
}

//Close prepared statement and result set
$stmt->close();
$response->close();

//Close connection
$dbc->close();

?>
