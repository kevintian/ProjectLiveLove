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

    <title>MyLiveLove</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!--Our CSS-->
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
require 'navbar.php';
?>
<!--Navbar end-->

<!--Template for handlebars-->
<script id="event-template" type="text/x-handlebars-template">
    {{#each this}}
    <div class="card-block">
        <div class="row">
            <div class="col-lg-12">
                <div class="img float-left"
                     style="background-image: url('http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg'); margin-right:15px;">
                </div>
                <h4 class="card-title">{{Event_Name}}</h4>
                <h6 class="card-subtitle mb-2 text-muted"> {{Organization_Name}} </h6>
                <p class="card-text">{{Event_description}}</p>
                <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
        </div>
    </div>
    {{/each}}
</script>

<div class="padding" style="padding-top: 50px;">
</div>

<div class="container">
    <h2>Search Results</h2>
    <div id = "result" class="card">

    </div>
</div>


<!--Javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/handlebars-v4.0.5.js"></script>
<script src="js/result.js"></script>

</body>


</html>