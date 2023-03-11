<?php
include "db/db.php";
include "include/login/head.php";
?>
<style>
    .btn-apps {
        background: <?= $COLOR ?>;
        color: #fff;
    }
</style>
</style>
<title>Password Reset | <?= $TITLE; ?></title>
<link rel="icon" href="assets/data/favicon.ico" type="image/x-icon" />
<div class="auth-wrapper">
    <div class="container-fluid h-100">
        <div class="row flex-row h-100 bg-white">
            <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                <div class="lavalite-bg" style="background-image: url('<?= $BACKGROUND; ?>')">
                    <div class="lavalite-overlay"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                <div class="authentication-form mx-auto">
                    <h3><b>Password Reset</b></h3>
                    <p>To reset the current password, please identify yourself by providing a e-mail address. We will send an email with instructions to the account owner.</p>

                    <!-- Alert -->
                    <?php if (isset($_GET["reset"])) { ?>
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <div class="djt">
                                <div style="font-size: 40px;">
                                    <i class="ik ik-mail"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <strong>Success!</strong> Check your spam box if you don't receive an email to reset your password in your inbox!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ik ik-x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Alert -->

                    <!-- Password Reset -->
                    <form action="execute.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" id="Email" required="">
                            <i class="ik ik-user"></i>
                        </div>
                        <div class="sign-btn text-center">
                            <button class="btn btn-block btn-secondary">
                                <i class="ik ik-send"></i>
                                Send Email
                            </button>
                            <a href="index.php" class="btn btn-block btn-apps">
                                <i class="ik ik-log-in"></i>
                                Back to Login
                            </a>
                        </div>
                    </form>
                    <!-- End Password Reset -->

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "include/login/footer.php";
?>