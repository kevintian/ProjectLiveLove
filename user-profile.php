<?php
//Get the relevant data from the database for this company

$stmt = $dbc->prepare('SELECT * FROM accounts INNER JOIN users ON accounts.username = users.username WHERE accounts.username = ?');
//s means string
$stmt->bind_param('s', $query['id']);
$stmt->execute();

$response = $stmt->get_result();

$row = mysqli_fetch_assoc($response); //Gets the first (and only) row as an associative array


?>

<div class="padding" style="padding-top: 50px;">

</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-xs-12" style="padding-bottom: 20px">
            <div class="card">
                <div class="card-block">
                    <div align="center">
                        <img class="img-thumbnail img-fluid" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png"
                             width="300px" height="300px">
                        <div class="profile-info">
                            <h3 class="card-title">
                                <?php echo htmlspecialchars($row['firstName']." ".$row['lastName']); ?>
                            </h3>
                            <h6 class="card-subtitle mb-2 text-muted">Volunteer</h6>
                            <span class="badge badge-danger">
                                <?php echo htmlspecialchars($row['points']); ?>
                            </span>
                            <div style="padding-top: 5px;">
                                <span class="badge badge-pill badge-info">Poverty & Relief</span>
                                <span class="badge badge-pill badge-success">Environmentalism</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-text text-justify">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3>Bio</h3>
                            </div>
                            <div class="col-lg-6 col-md-6 text-right my-auto">
                                <a id="editProfile" href="#">Edit</a>
                            </div>
                        </div>
                        <?php echo htmlspecialchars($row['userBio']); ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-block" style="padding-bottom: 0;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h4 class="card-title">Your Events</h4>
                        </div>
                    </div>
                    <hr>
                    <div id = "result">
                        <!--Handlebars will populate this with events. Template is below-->
                    </div>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Past Events</h4>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <!-- Template for Handlebars -->
    <script id="event-template" type="text/x-handlebars-template">
        {{#each this}}
        <div class="card event-listing">
            <div class="card-block">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img float-left"
                             style="background-image: url('http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg'); margin-right:15px;">
                        </div>
                        <h4 class="card-title">{{Event_Name}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{Organization_Name}}</h6>
                        <p class="card-text">{{Event_description}}</p>
                        <a href="#" class="btn btn-outline-success">Going</a>
                        <a href="#" class="btn btn-outline-primary">Not Interested</a>
                    </div>
                </div>
            </div>
        </div>
        {{/each}}
    </script>
</div>

<br>
<br>
