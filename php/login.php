<?php
/**
 * Created by IntelliJ IDEA.
 * User: yixinsun
 * Date: 4/2/17
 * Time: 3:59 PM
 */
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

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form



    $sql = "SELECT * FROM accounts WHERE username = '$username' and passcode = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $username;

        header("location: user-profile.html");
    }else {
        $error = "Password is invalid";
    }
}
