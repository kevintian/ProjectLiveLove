<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {
    header("location: profile.php?id=" . $_SESSION['username']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Log In | My Live Love</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/forms.css"/>

</head>

<body>
<?php
require 'navbar.php';
?>
<!--Navbar end-->

<div class="container">
    <h2 style="text-align:center">Login</h2>

    <form id="loginForm" class="form-signin" role="form">
        <h4 class="form-signin-heading"></h4>
        <input type="text" class="form-control"
               id="username" placeholder="username "
               required autofocus>
        <input type="password" class="form-control"
               id="password" placeholder="password " required>
        <button class="button" type="submit"
                id="login">Login
        </button>
    </form>

    <div style="text-align:center">
        <a>Forgot password?</a>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/login.js"></script>


</body>
</html>
