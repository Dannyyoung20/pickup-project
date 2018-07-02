<?php require 'include/controller.php'; ?>
<?php require 'include/nav.php'; ?>

<body class="index-page">
    <nav class="navbar navbar-toggleable-md fixed-top navbar-white">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <i class="now-ui-icons transportation_bus-front-12"></i>
                    Pick Up
                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-target="#login" data-toggle="modal">
                            <i class="now-ui-icons tech_mobile"></i>
                            Take a Ride
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <p>
                                <i class="now-ui-icons transportation_bus-front-12"></i>  Driver
                            </p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="driver-signup.php"><i class="now-ui-icons users_single-02"></i> Login Here</a>
                            <a class="dropdown-item" href="driver-signup.php"><i class="now-ui-icons shopping_delivery-fast"></i> Become a Driver</a>
                            <a class="dropdown-item" href="#"><i class="now-ui-icons travel_info"></i> Information</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
    	<div class="login-wrapper">
    		<div class="login-container">
    			<div class="bg-image">
    				<div class="driver-login pick-card">
    				<div class="heading"><h2 class="login-heading">Driver Login</h2></div><hr>
    					<div class="driver-container container">
    						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    							<div class="row">
    								<label for="d_uname"><i class="fa fa-user"></i>Username:</label>
    								<input type="text" class="form-control" placeholder="Username" name="d_uname" id="d_uname">
    							</div>
    							<div class="row">
    								<label for="d_pass"><i class="fa fa-lock"></i> Password:</label>
    								<input type="password" class="form-control" placeholder="Password" name="d_pass" id="d_pass">
    							</div>
    							<?php echo $msg; ?>
    							<div class="row">
    								<button class="btn btn-simple pick-btn d_login-btn btn-block" type="submit" name="d_submit"><i class="fa fa-send"></i> Login</button>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

</body>