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
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    <!--Our CSS-->
    <link rel="stylesheet" type="text/css" href="css/default_grid.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/home.css">


</head>

<body>
<?php
require 'navbar.php';
?>
<!--Navbar end-->


<!--Video Section-->
<section class="content-section video-section">
    <div class="pattern-overlay">
        <div class="imageOverlay"></div>
        <a id="bgndVideo" class="player"
           data-property="{videoURL:'https://www.youtube.com/watch?v=9sUu1LUC5cM',containment:'.video-section', quality:'hd1080', autoPlay:true, mute:true, opacity:1}">bg</a>
    </div>
</section>

<div class = "content">
    <div class="strip">
        <div class="text-center" style="margin-top: 30px">
            <h1 class="font-bold">Find Your Organization</h1>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class=col-md-3>
                    <img class="img-fluid" src="http://www.duetsblog.com/uploads/image/intel_rgb_1700.png">
                </div>
                <div class=col-md-3>
                    <img class="img-fluid" src="http://www.abannervision.com/img/logos/disney.png">
                </div>
                <div class=col-md-3>
                    <img class="img-fluid"
                         src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2000px-Google_2015_logo.svg.png">
                </div>
                <div class=col-md-3>
                    <img class="img-fluid"
                         src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/Boeing-Logo.svg/1280px-Boeing-Logo.svg.png">
                </div>
            </div>
        </div>

        <div class="text-center">
            <h3 class="font-bold">Don't see your organization? Search for more here!</h3>

            <div style="margin: 30px">
                <input id="search" class="typeahead" type="search" placeholder="What organization are you looking for?"
                       autocomplete="off">
            </div>
        </div>
    </div>

    <div class="text-center" style="padding: 30px;">
        <h1 class="font-bold">Find Nonprofits By Cause</h1>
    </div>

    <div class="container-fluid">

        <ul class="cbp-ig-grid">
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-shoe"></span>
                    <h3 class="cbp-ig-title">poverty & relief</h3>
                    <span class="cbp-ig-category">homeless, hungry, poor, disaster relief</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-ribbon"></span>
                    <h3 class="cbp-ig-title">health services</h3>
                    <span class="cbp-ig-category">clinics, cancer, addiction, crisis, pregnancy, suicide, mental health, diabetes, disability</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-milk"></span>
                    <h3 class="cbp-ig-title">community building</h3>
                    <span class="cbp-ig-category">arts, parenting, ged, trade training, renovation, construction, education</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-whippy"></span>
                    <h3 class="cbp-ig-title">social justice</h3>
                    <span class="cbp-ig-category">child abuse, inequality, violence, voting, sex trafficking</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-spectacles"></span>
                    <h3 class="cbp-ig-title">environmentalism</h3>
                    <span class="cbp-ig-category">energy conservation, recycling, pollution</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="cbp-ig-icon cbp-ig-icon-doumbek"></span>
                    <h3 class="cbp-ig-title">other opportunities</h3>
                    <span class="cbp-ig-category">other opportunities</span>
                </a>
            </li>
        </ul>
    </div>
</div>




<!-- Bootstrap core JavaScript -->
<!--We load jQuery before Boostrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/bootstrap3-typeahead.min.js"></script>
<script src="js/home.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/logout.js"></script>


<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>