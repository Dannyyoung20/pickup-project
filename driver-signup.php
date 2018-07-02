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
    <div class="signup-wrapper">
        <div class="signup-heading">
            <div class="p-signup-head">
                <p class="flow-text flow-head">Be your own boss.</p>
                <p class="flow-text-2">Sign up today and make money just by owning a car.</p>
            </div>
        </div>
        <div class="p-form-wrapper">
            <div class="p-form-container container">
                <div class="col-md-12 content-center">
                    <div class="card card-plain">
                        <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <?php echo $msg; ?>
                            <h4 style="margin-top: 0px;">Account Details</h4>
                            <div class="content row">
                                <div class="col-md-6">
                                    <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                        <span class="required">*</span>
                                        <input type="text" class="form-control" name="fname" placeholder="First Name...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                        <span class="required">*</span>
                                        <input type="text" class="form-control" name="text" placeholder="Last Name...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                        <span class="required">*</span>
                                        <input type="text" class="form-control" name="username" placeholder="Username...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                        <span class="required">*</span>
                                        <input type="password" class="form-control" name="password" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                        <span class="required">*</span>
                                        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                                <span class="required">*</span>
                                <input type="email" class="form-control" name="email" placeholder="Email...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons tech_mobile"></i>
                                </span>
                                <span class="required">*</span>
                                <input type="text" class="form-control" name="phone" placeholder="Phone...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons location_pin"></i>
                                </span>
                                <input type="text" class="form-control" name="resident" placeholder="Address e.g Nsukka, Lagos">
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-round btn-info btn-lg" style="margin-top: 20px" name="driver-reg-btn">CREATE ACCOUNT</button>
                            </div>
                            <div class="terms text-center" style="margin-top: 20px">By clicking “Create Account” , you agree to <a href="#"> Our Terms and Conditions</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
