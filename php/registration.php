<?php
$DB_USER = 'mylivelo_epicintentions';
$DB_PASSWORD = '5nmkQRr3v3WqIerKsJqt';
$DB_HOST = 'mylivelove.com';
$DB_NAME = 'mylivelo_mylivelove';
$dbc = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
//    $phonenumber= $_POST["phonenumber"];
//    $city= $_POST["city"];
//    $state= $_POST["state"];
//    $accounttype= $_POST["accounttype"];

//check if user exists//
$stmt = $dbc->prepare('SELECT * FROM accounts WHERE username = ?');
//s means string
$stmt->bind_param('s', $username);
//$query = "(SELECT * FROM accounts WHERE username= $username)";
$stmt->execute();
$response = $stmt->get_result();

if ($response) {
    echo "Hi! Connected";
} else {
    echo "Not connected.";
    echo mysqli_error($dbc);
}

//check length of response to see if there's a match
// if ($response->num_rows== 0){
//     $accountinsert= "INSERT INTO accounts ($username, $password, $email)";
//     $userinsert= "INSERT INTO users ($username, $firstname, $lastname, 0";
//     $accountresult= mysqli_query($dbc, $accountinsert);
//     $userresult= mysqli_query($dbc, $userinsert);

//     if ($accountresult and $userresult){
//         echo "Registration complete!";
//     }

// }

// else{
//     echo "User already exists!";
// }


?> 