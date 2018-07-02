<!DOCTYPE html>
<html lang="en">
<?php require 'include/controller.php'; ?>
<?php require 'include/nav.php'; ?>
<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-toggleable-md fixed-top navbar-transparent navbar-white" color-on-scroll="50">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <p>
                              <i class="now-ui-icons transportation_bus-front-12"></i>  Driver
                        </p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="driver-login.php"><i class="now-ui-icons users_single-02"></i> Login Here</a>
                        <a class="dropdown-item" href="driver-signup.php"><i class="now-ui-icons shopping_delivery-fast"></i> Become a Driver</a>
                        <a class="dropdown-item" href="#"><i class="now-ui-icons travel_info"></i> Information</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-target="#login" data-toggle="modal">
                        <i class="now-ui-icons tech_mobile"></i>
                        Take a Ride
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper">
    <div class="page-header clear-filter" filter-color="purple">
        <div class="page-filter page-overlay container">
            <div class="page-heading heading-text">
                <div class="heading-text-container">
                    <h2>Get There as fast as possible</h2>
                    <p class="slog">Join us we need partners like you</p>
                </div>
                <div class="heading-buttons">
                    <a href="#" data-target="#login" data-toggle="modal" class="btn btn-round btn-pick btn-pick-primary"><i class="fa fa-cab"></i> Rider's Sign In</a>
                    <a href="signup.php" class="btn btn-round btn-pick btn-default"><i class="now-ui-icons shopping_delivery-fast"></i> Driver's Sign Up</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <section class="services">
            <div class="container">
                <div class="row pick-tutorial">
                    <h2>How it works</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>
    </div>
</div>
<footer class="footer" data-background-color="black">
    <div class="container">
        <nav>
           <ul>
               <li><a style="font-size: 1.3em"><i class="now-ui-icons transportation_bus-front-12"></i> Pick Up</a></li>
           </ul>
        </nav>
        <div class="copyright">
            Copyright &copy; 2017.
        </div>
    </div>
</footer>

</body>
</html>