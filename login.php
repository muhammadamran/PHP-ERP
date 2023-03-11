<?php
include "include/login/head.php";
?>
<title>Login | <?= $APP_NAME; ?></title>
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
            <a href="assets/index.html"><img src="assets/src/img/brand.svg" alt=""></a>
          </div>
          <h3>Sign In to ThemeKit</h3>
          <p>Happy to see you again!</p>

          <!-- Alert -->
          <div class="alert alert-secondary alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="ik ik-x"></i>
            </button>
          </div>

          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="ik ik-x"></i>
            </button>
          </div>

          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="ik ik-x"></i>
            </button>
          </div>

          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="ik ik-x"></i>
            </button>
          </div>
          <!-- End Alert -->

          <!-- Form Login -->
          <form action="../index.html">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" required="" value="johndoe@admin.com">
              <i class="ik ik-user"></i>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required="" value="123456">
              <i class="ik ik-lock"></i>
            </div>
            <div class="row">
              <div class="col text-left">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
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
                <a href="forgot-password.html">Forgot Password ?</a>
              </div>
            </div>
            <div class="sign-btn text-center">
              <button class="btn btn-block btn-theme">Sign In</button>
            </div>
          </form>
          <!-- End Form Login -->

          <div class="register">
            <p>Don't have an account? <a href="register.html">Create an account</a></p>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "include/login/footer.php";
?>