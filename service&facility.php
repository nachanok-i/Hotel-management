<?php
require_once "config.php";
?>
<?php session_start();
if (isset($_SESSION['email']) != NULL) {
	$userEmail = $_SESSION['email'];
}
else {
	echo '<script>
    alert("Please Login first");
    window.location.href="index.php";
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Calina Hotel</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" /> 
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#facility">Facilities</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Calina</div>
                <div class="masthead-heading text-uppercase">Your Elegance Stay</div>
                <a class="btn btn-primary btn-xl text-uppercase " href="service.php">Order Servuce</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">
                        Immerse yourself in sophisticated spaces, thoughtfully redesigned around your needs</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-bed fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Guest Room</h4>
                        <p class="text-muted">We’ve redesigned the Calina Hotels guest room to be a space to work, relax, reflect and be your best self</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-battery-full fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Calina Club</h4>
                        <p class="text-muted">You deserve an exclusive space to retreat, recharge and refocus. Anytime, any day, with 24 hours access</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-car fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Limousine</h4>
                        <p class="text-muted">Calina Hotel’s Limousine includes a variety of private transfer with our drivers who are well groomed in their suits and ties for you</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- facility Grid-->
        <section class="page-section bg-light" id="facility">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Facilities and Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal1"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/lobby2.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Lobby</div>
                                <div class="facility-caption-subheading text-muted">Inspired Greatrooms</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal2"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/98665395.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Food and Beverages</div>
                                <div class="facility-caption-subheading text-muted">Food for though</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal3"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/fitness3.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Fitness Center</div>
                                <div class="facility-caption-subheading text-muted">Stay fit while you stay with us</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal4"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/spa.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Calina Spa</div>
                                <div class="facility-caption-subheading text-muted">Stay calm and relax</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal5"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/meet4.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Meeting & Events</div>
                                <div class="facility-caption-subheading text-muted">We’re ready for your meeting of the minds</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <a class="facility-link" data-toggle="modal" href="#facilityModal6"
                                ><div class="facility-hover">
                                    <div class="facility-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/facility/swim2.jpg" alt=""
                            /></a>
                            <div class="facility-caption">
                                <div class="facility-caption-heading">Swimming Pool</div>
                                <div class="facility-caption-subheading text-muted">Enjoy your time with love one</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- facility Modals--><!-- Modal 1-->
        <div class="facility-modal modal fade" id="facilityModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Calina Lobby</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/lo2.jpg" alt="" />
                                    <p><b>Check-in:</b> At Calina Hotel we guarantee check-in from 3pm, but if the room is ready upon your arrival, you are welcome to check-in before. If the room is not ready when you arrive, you can store your luggage with us at no charge until the room is available
                                    <br><b>Check-out:</b> At Calina Hotel you can check out from the room is at 12PM at the latest, but if you need a late check-out, then contact our reception upon arrival, or during your stay, and we will do our best to accommodate your request
                                    <br><b>Express Check-out:</b> At Calina Hotel if you're busy and can pay with a credit card, or your accommodation is already pre-paid, you can make use of our Express Check-out and avoid the waiting time. Our Express Check-out stands can be found in the lobby next to the main entrance. The receipt for your stay will then be sent via e-mail on the same day
                                    </p>
                                    <ul class="list-inline">
                                        <li><b>Check-in from:</b> 3PM</li>
                                        <li><b>Check-out until:</b> 12PM</li>
                                        <li><b>Express Check-out:</b> Anytime</li>
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="facility-modal modal fade" id="facilityModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Calina Menu</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/r1.jpeg" alt="" />
                                    <p>The Calina restaurant's menu is adorned with outstanding western and asian specialities. The well-prepared dishes are made with the basis in traditional cuisine as well as the season's best raw ingredients and served with quality wines</p>
                                    <ul class="list-inline">
                                        <li><b>Breakfast:</b> Served daily from 6.30AM - 11.30AM</li>
                                        <li><b>Others Restaurant:</b> Served daily from 12:00AM - 10:30PM</li>
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="facility-modal modal fade" id="facilityModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Calina Fitness</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/fitness.jpg" alt="" />
                                    <p>We welcome you to our brand-new fitness which is located on the 10th floor. The room is about 200 square meters with your personal trainer and all available for you</p>
                                    <ul class="list-inline">
                                        <li><b>Open hours:</b> 6:00AM - 9:30PM </li>
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="facility-modal modal fade" id="facilityModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Calina Spa</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/spa2.jpg" alt="" />
                                    <p>Discover the world of absolute indulgence, pampering and well-being while luxuriating in the peace and tranquility of the surroundings. Embracing the natural beauty and inspired by Thai traditional healing, be pampered with our holistic journeys and enliven your senses with our rituals, music and healing touch.
                                    Our spa menu features the very best of locally harvested ingredients, aromatic oils and therapeutic herbs to ensure you experience total bliss in a tranquil environment.</p>
                                    <ul class="list-inline">                                 
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="facility-modal modal fade" id="facilityModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Meeting & Events</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/grmeet.png" alt="" />
                                    <p> <p><b>Business Meeting:</b> Put innovative, flexible solutions to work for you 
                                        <br><b>Weddings:</b> Make beautiful memories to have and to hold
                                        <br><b>Social Events:</b> Celebrate special moments, keeping teams, students and families together</p>
                                    <ul class="list-inline">
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="facility-modal modal fade" id="facilityModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Facility Details -->
                                    <h2 class="text-uppercase">Swimming Pool</h2>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/facility/swim.jpg" alt="" />
                                    <p>Take a healthy dip in the impressive swimming pool, where you’ll find yourself when you take a dip in our swimming pool and its Salt Chlorinated system helping prevent skin, hair and respiratory problems which can occur with chlorinated swimming pool</p>
                                    <ul class="list-inline">
                                        <li><b>Open hours:</b> 8:00AM - 9:00PM</li>
                                    </ul>
                                    <button onclick="window.location.href = 'service.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Explore More</button>
                                    <button onclick="window.location.href = 'roomSelectPage.php';" class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Booking Your Stay</button><!--Edit here na tap for button address-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
