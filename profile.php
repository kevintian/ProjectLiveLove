<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/company-profile.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

<?php
//Add in the navbar based on whether the user is logged in or not
require 'navbar.php';

//Check if it is a company or a user page we are trying to load

//Parse the url
parse_str($_SERVER['QUERY_STRING'], $query);

//Check that the id exists and is a valid id in the database
if (array_key_exists('id', $query)) {
    require 'php/dbConnection.php';

    //check if user exists//
    $stmt = $dbc->prepare('SELECT * FROM accounts WHERE username = ?');
    //s means string
    $stmt->bind_param('s', $query['id']);
    $stmt->execute();
    $response = $stmt->get_result();

    if ($response->num_rows != 0) {
        //If user exists
        $row = mysqli_fetch_assoc($response); //Gets the first (and only) row as an associative array
        $user_type = $row["accountType"];

        if (strcmp($user_type, "USER") == 0) {
            require 'user-profile.php';
        } else {
            require 'company-profile.php';
        }

    } else {
        //Not a valid user
        echo '404 User Not Found';
    }

} else {
    echo 'Error - No Profile specified';
}
?>


<!-- Bootstrap core JavaScript -->
<!--We load jQuery before Boostrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/logout.js"></script>

<!-- Placed at the end of the document so the pages load faster -->
</body>
</body>
</html>
