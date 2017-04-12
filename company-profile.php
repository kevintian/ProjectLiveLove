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
                            <h3 class="card-title">Company Name</h3>
                            <h6 class="card-subtitle mb-2 text-muted">Organization</h6>
                            <span class="badge badge-pill badge-info">2 Current Events</span>
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
                        Google was founded in 1996 by Larry Page and Sergey Brin while they were Ph.D. students at
                        Stanford University, in California. Together, they own about 14 percent of its shares and
                        control 56 percent of the stockholder voting power through supervoting stock. They incorporated
                        Google as a privately held company on September 4, 1998. An initial public offering (IPO) took
                        place on August 19, 2004, and Google moved to its new headquarters in Mountain View, California,
                        nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various
                        interests as a conglomerate called Alphabet Inc. Google, Alphabet's leading subsidiary, will
                        continue to be the umbrella company for Alphabet's Internet interests. Upon completion of the
                        restructure, Sundar Pichai became CEO of Google, replacing Larry Page, who became CEO of
                        Alphabet.
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
                        <div class="col-lg-6 col-md-6 text-right my-auto">
                            <button class="btn btn-info" data-toggle="modal" data-target="#createEventModal">Add new event</button>
                        </div>
                    </div>
                    <hr>
                    <div class="card event-listing">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="img float-left"
                                         style="background-image: url('http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg'); margin-right:15px;">
                                    </div>
                                    <h4 class="card-title">Event 2</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Organization Name</h6>
                                    <p class="card-text">Event description</p>
                                    <a href="#" class="btn btn-outline-success">Going</a>
                                    <a href="#" class="btn btn-outline-primary">Not Interested</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card event-listing">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="img float-left"
                                         style="background-image: url('http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg'); margin-right:15px;">
                                    </div>
                                    <h4 class="card-title">Event 2</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Organization Name</h6>
                                    <p class="card-text">Event description</p>
                                    <a href="#" class="btn btn-outline-success">Going</a>
                                    <a href="#" class="btn btn-outline-primary">Not Interested</a>
                                </div>
                            </div>
                        </div>
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group row">
                            <legend class="col-form-legend col-sm-2">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                               value="option1" checked>
                                        Option one is this and that&mdash;be sure to include why it's great
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                               value="option2">
                                        Option two can be something else and selecting it will deselect option one
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3"
                                               value="option3" disabled>
                                        Option three is disabled
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label class="col-sm-2">Checkbox</label>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> Check me out
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

