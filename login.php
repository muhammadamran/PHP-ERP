<?php
include "include/login/head.php";
?>
<style>
  .btn-apps {
    background: <?= $COLOR ?>;
    color: #fff;
  }

  .login-divider {
    background: <?= $COLOR ?>;
    height: 4px;
    width: calc(100%);
    margin: 0px;
    box-sizing: border-box;
    margin-bottom: 40px;
  }
</style>
<title>Login | <?= $TITLE; ?></title>
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
          <div class="logo-centered">
            <a href="index.php">
              <img src="<?= $APP_NAME; ?>" alt="Logo" style="width: 255px;">
            </a>
          </div>
          <div class="login-divider"></div>
          <h3>Login to <b><?= $TITLE; ?></b></h3>
          <p>Happy to see you again!</p>

          <!-- Alert -->
          <?php if (isset($_GET["signout"])) { ?>
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
              <div class="djt">
                <div style="font-size: 40px;">
                  <i class="ik ik-info"></i>
                </div>
                <div style="margin-left: 10px;">
                  <strong>Sign Out!</strong> You have successfully exited the system page!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                  </button>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if (isset($_GET["failed"])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <div class="djt">
                <div style="font-size: 40px;">
                  <i class="ik ik-shield-off"></i>
                </div>
                <div style="margin-left: 10px;">
                  <strong>Failed!</strong> Your email or password is wrong, please check again!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                  </button>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if (isset($_GET["info"])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <div class="djt">
                <div style="font-size: 40px;">
                  <i class="ik ik-user-x"></i>
                </div>
                <div style="margin-left: 10px;">
                  <strong>Users Account!</strong> Your account is not found in the system, please contact the Administrator!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="ik ik-x"></i>
                  </button>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- End Alert -->

          <!-- Form Login -->
          <form action="execute.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" id="Email" required="">
              <i class="ik ik-user"></i>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" id="Password" required="">
              <i class="ik ik-lock"></i>
            </div>
            <div class="row">
              <div class="col text-left">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="item_checkbox_password" name="item_checkbox_password" value="option1" onclick="myFunction()">
                  <span class="custom-control-label">&nbsp;Show Password</span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col text-left">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                  <span class="custom-control-label">&nbsp;Remember Me</span>
                </label>
              </div>
              <div class="col text-right">
                <a href="forgot-password.php">Forgot Password?</a>
              </div>
            </div>
            <div class="sign-btn text-center">
              <button class="btn btn-block btn-apps">
                <i class="ik ik-log-in"></i>
                Login
              </button>
            </div>
          </form>
          <!-- End Form Login -->

          <div class="register">
            <!-- <p>Don't have an account? <a href="register.html">Create an account</a></p> -->
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Show Password -->
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
<!-- End Show Password -->
<?php
include "include/login/footer.php";
?>