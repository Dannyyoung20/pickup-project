<?php 
	include '../include/userController.php';
	if(!$user->trip_auth()) {
		$user->redirect('index.php');
	} 
?>
<!DOCTYPE html>
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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/now-ui-kit.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<nav class="navbar navbar-toggleable-md fixed-top navbar-white" color-on-scroll="50">
    <div class="container">
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <i class="fa fa-cab"></i>
                 Pick Up
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php if(!isset($_GET['driver'])){
?>
	<div class="wrapper">
		<div class="container">
			<div class="modal-response animated fadeInDown">
				<div class="modal-heading"><h3 class="center">Please wait while we process your request <span class="fa fa-spinner spin"></span></h3></div>
				<div class="status">
					<div class="driver-img"></div>
					<div class="driver-details">
						<ul>
							<li>Hey</li>
							<li>Hey</li>
							<li>Hey</li>
						</ul>
					</div>
					<div class="locate_driver"><a href="#" class="btn btn-block-p btn-simple btn-danger btn-round">Finish</a></div>
				</div>
			</div>
		</div>	
	</div>

<?php }else{ ?>

<?php } ?>

<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="../assets/js/p-main.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPcdPs8TVM-TRX0MLl3x2yYtKVerB6MP0&callback=initMap"
    async defer></script>
</body>
</html>