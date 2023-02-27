<!-- Script -->
<?php
session_start();
include 'db/db.php';

function login($data)
{
  if ($data['password_hash'] == $data['password']) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['role'] = $data['role'];
    return 2;
  } else return 1;
}

if (isset($_POST["username"])) {
  $username_ = $db->real_escape_string($_POST["username"]);
} else {
  $username_ = "";
}
if (isset($_POST["password"])) {
  $password_ = $db->real_escape_string($_POST["password"]);
} else {
  $password_ = "";
}

$user = $db->query("SELECT id, password, nama, email, role FROM user WHERE username='" . $username_ . "' AND password='" . md5($password_) . "'", 0);
$result = $user->fetch_assoc();
$id = $result['id'];
$password = $result['password'];
$nama = $result['nama'];
$email = $result['email'];
$role = $result['role'];

if ($role == 'admin') {
  $data = [
    'id' => $id,
    'password' => $password,
    'password_hash' => md5($password_),
    'nama' => $nama,
    'email' => $email,
    'role' => $role,
  ];

  $loginArea = login($data);

  if ($loginArea == 2) {
    echo '<script>alert("Hai, ' . $nama . '. kamu berhasil login");location.href = "index.php"</script>';
  } else if ($loginArea == 1) {
    echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
  }
} else {
  echo '<script>alert("Gagal Login, Anda tidak memiliki akses");window.history.go(-1);</script>';
}
?>
<!-- End Script -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo/favicon.png">
  <link rel="icon" type="image/png" href="assets/img/logo/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login | Rantau Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta property="image" content="assets/img/logo/favicon.png">
  <meta name="twitter:image" property="og.image" content="assets/img/logo/favicon.png">
  <link rel="shortcut icon" type="image/png" href="assets/img/logo/favicon.png">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <section class="login_content">
      <form action="logedin.php" method="POST">
        <div class="text-center">
          <img src="assets/img/logo/logo-big.png" alt="Logo ValleryATV" width="200px" style="margin:30px 0;">
        </div>
        <div class="form-group">
          <input type="text" name="username" class="form-control" placeholder="Username" required="" />
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password" required="" />
        </div>
        <div class="form-group">
          <center>
            <input type="submit" class="btn btn-default submit" value="Log in">
          </center>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <div class="clearfix"></div>

          <div class="text-center">
            <p>©<?= date('Y') ?> All Rights Reserved. Privacy and Terms</p>
          </div>
        </div>
      </form>
    </section>
  </div>
  <style>
    body {
      background-color: #f0f0f0;
    }

    .login_content {
      background-color: #fff;
      border-radius: 10px;
      position: absolute;
      top: 100px;
      left: 0;
      right: 0;
      margin: 0 auto;
      width: 400px;
      padding: 10px 30px;
      -webkit-box-shadow: 0px 6px 13px -1px rgba(221, 221, 221, 1);
      -moz-box-shadow: 0px 6px 13px -1px rgba(221, 221, 221, 1);
      box-shadow: 0px 6px 13px -1px rgba(221, 221, 221, 1);
    }
  </style>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
</body>

</html>