<?php
//Get the relevant data from the database for this company

$stmt = $dbc->prepare('SELECT * FROM accounts INNER JOIN companies ON accounts.username = companies.username WHERE accounts.username = ?');
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
                                <?php echo htmlspecialchars($row['companyName']); ?>
                            </h3>
                            <h6 class="card-subtitle mb-2 text-muted">Organization</h6>
                            <span class="badge badge-pill badge-info">3 Current Events</span>
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
                        <?php
                            echo htmlspecialchars($row['companyDescription'])
                        ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-block" style="padding-bottom: 0;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h4 class="card-title">Upcoming Events</h4>
                        </div>
                        <?php if (isset($_SESSION['username']) && ($_SESSION['username'] == $query["id"])) : //we get query["id"] from profile.php ?>
<!--                            Only show this if the user is viewing their own page-->
                        <div class="col-lg-6 col-md-6 text-right my-auto">
                            <button class="btn btn-info" data-toggle="modal" data-target="#createEventModal">Add a new event</button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <hr>
                    <div id = "result">
<!--                        Handlebars will populate this with events. Template is below-->
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


    <!-- Create Event Modal -->
    <div class="modal fade" id="createEventModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create an event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label for="eventName" class="col-sm-3 col-form-label">Event Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="eventName" placeholder="Event Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="eventAddress" class="col-sm-3 col-form-label">Address:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="eventName" placeholder="Event Address">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea">Event Description</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Please enter a short description of your event"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Create Event</button>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

