<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="libs/img/RR2.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home | Pick Up</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="assets/fa/css/font-awesome.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<aside>
    <!-- Mini Modal -->
    <div class="modal fade modal-pick" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="modal-profile">
                        <i class="now-ui-icons users_circle-08" style ="font-size: 2em"></i>
                    </div>
                </div>
                <div class="modal-body">
                    <p class="text-center">You need to login to continue</p>
                    <div class="container">
                        <div class="col-md-12 content-center">
                            <div class="card card-login card-plain">
                                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="content">
                                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                            <input type="text" class="form-control" name="username" placeholder="First Name...">
                                        </div>
                                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                            <input type="password" name="password" placeholder="Password..." class="form-control" />
                                        </div>
                                    </div>
                                    <?php echo $msg; ?>
                                    <div class="footer text-center">
                                        <button type="submit" name="login-sub" class="btn btn-primary btn-round btn-lg btn-block login-btn">
                                            <i class="now-ui-icons ui-1_send"></i> LOGIN</button>
                                    </div>
                                    <div class="pull-left">
                                        <h6>
                                            <a href="signup.php" class="link">Create Account</a>
                                        </h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6>
                                            <a href="contactus.php" class="link">Need Help?</a>
                                        </h6>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->
</aside>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/tether.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/js/now-ui-kit.js" type="text/javascript"></script>
<script src="assets/js/p-main.js" type="text/javascript"></script>

<script>

    <?php if (isset($_POST['login-sub'])) {?>

    $(function() {
        $('#login').modal('show');
    });

    <?php } ?>

</script>