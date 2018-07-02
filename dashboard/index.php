<?php

include '../include/controller2.php';
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
                            <a href="#" class="btn btn-x btn-default" id="begin-btn">Begin pickup</a>
                        </div>
                    </div>
                    <ul>
                        <li class="list-groups"><span class="name"><?php echo $fname; ?><br><?php echo $lname; ?></span></li>
                        <li class="list-groups active"><a href="#"><i class="now-ui-icons location_world"></i> Available Jobs </a></li>
                        <li class="list-groups"><a href="#"><i class="now-ui-icons shopping_delivery-fast"></i> Active trips </a></li>
                        <li class="list-groups"><a href="#"><i class="now-ui-icons ui-1_calendar-60"></i> History</a></li>
                        <li class="list-groups"><a href="#"><i class="now-ui-icons shopping_credit-card"></i> payments</a></li>
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
                            <li class="di-elements"><a href="#">Dashboard</a> </li>
                            <li class="di-elements"><span class="floater"></span></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-content-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div id="map" style="height: 500px;width: 100%;margin-top: 200px"></div>
                        </div>
                        <div class="col-md-3 update-container">
                            <div class="update-column">
                                <div class="update-head">
                                    <div class="head-container">
                                        <h2>Latest Jobs</h2>
                                    </div>
                                </div>
                                <div class="update-body">
                                    <div class="job-container">
                                        <div class="job-desc">
                                        <?php echo $driver->getjobs();?>
                                        </div>
                                </div>
                                <div class="update-footer">
                                    <a href="#" class="btn btn-white btn-simple btn-z">View All</a>
                                </div>
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
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="../assets/js/p-main.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPcdPs8TVM-TRX0MLl3x2yYtKVerB6MP0&callback=initMap"
    async defer></script>
</html>
