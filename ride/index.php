<?php

 include '../include/userController.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../libs/img/RR2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home | Pick Up</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="../assets/fa/css/font-awesome.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="main.css" rel="stylesheet" />
</head>
<body>
<input type="hidden" id="id" value="<?php echo $_SESSION['id'];?>"">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-nav">
                <div class="nav-container">
                    <div class="logo-container">
                        <a href="index.php"><i class="now-ui-icons transportation_bus-front-12"></i> PICK UP</a>
                    </div>
                    <div class="shadow-container">
                    <div class="profile-img-container">
                        <div class="profile-img">
                            <a href="#" class="btn btn-x btn-default">Welcome Back</a>
                        </div>
                    </div>
                    <ul>
                        <li class="list-groups"><span class="name">Jarace<br> Grenon</span></li>
                        <li class="list-groups active"><a href="#"><i class="now-ui-icons shopping_delivery-fast"></i> Book a Ride</a></li>
                        <li class="list-groups"><a href="#"><i class="now-ui-icons ui-1_calendar-60"></i> History</a></li>
                        <li class="list-groups"><a href="#"><i class="now-ui-icons ui-1_settings-gear-63"></i> Settings</a></li>

                    </ul>
                    <div class="log-out">
                        <a href="index.php?logout=true" class="btn btn-y btn-danger"><i class="now-ui-icons media-1_button-power"></i> Log Out</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <nav class="navbar navbar-purple navbar-absolute">
                <div class="navbar-container">
                    <div class="search-bar"></div>
                    <div class="di-element right">
                        <ul class="di-element-list">
                            <li class="di-elements"><a href="#">Home</a> </li>
                            <li class="di-elements"><a href="#">Take a Ride</a> </li>
                            <li class="di-elements"><span class="floater"></span></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-content-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wrap">
                                <div class="heading"><h2>Book-a-Ride</div>
                                <hr>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="book-form">
                                    <div class="long"></div>                            
                                    <div class="lat"></div>                            
                                    <div class="row">
                                        <div class="col-md-6">
                                        <label for="location">Location Address</label>
                                            <input type="text" class="form-control" placeholder="Enter your location address" name="location" id="location" />
                                        </div>
                                        <div class="col-md-6">
                                        <label for="destination">Destination Address</label>
                                            <input type="text" class="form-control" placeholder="Enter your destiation address" name="destination" id="destination" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <label for="date">Date of Pickup</label>
                                            <input class="form-control date-picker" placeholder="Select date of pickup" type="text" name="date" id="date" />
                                        </div>
                                        <div class="col-md-4">
                                        <label for="time">Time of Pickup (24-hours)</label>
                                            <input class="form-control" placeholder="e.g 23:00" type="text" name="time" id="time" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="heading"><h3>Payment Details</h3></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="card-number">Card Number</label>
                                                <input class="form-control" placeholder="XXX-XXX-XXX" type="text" id="card-number" name="card-no" />
                                            </div>
                                            <div class="col-md-4">
                                                <label for="cvv">CVV</label>
                                                <input type="text" class="form-control"  placeholder="cvv" name="cvv" id="cvv" />
                                            </div>
                                            <div class="col-md-3">
                                                <label for="expire">Expiration Date</label>
                                                <input type="text" class="form-control" placeholder="Expiration" id="expire" name="expire" />
                                            </div>
                                        </div>
                                    </div> 
                                    <?php echo $msg; ?>
                                    <div class="floating-btn">
                                        <button type="submit" class="btn-float btn-round btn-primary" id="ride" name="ride"><i class="fa fa-cab"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="../assets/js/p-main.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPcdPs8TVM-TRX0MLl3x2yYtKVerB6MP0&libraries=places&callback=dynamicSearch"></script>-->
</html>
