<?php
$dbhost     = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname     = "erpdb";
$dbport     = "3306";
$db         = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

date_default_timezone_set("Asia/jakarta");

$Qapps = $db->query("SELECT * FROM application ORDER BY ID ASC LIMIT 1");
$Rapps = mysqli_fetch_array($Qapps);

if ($Rapps == NULL) {
  $ID = '1';
  $ICON = 'assets/apps/icon/icon.png';
  $LOGO = 'assets/apps/logo-company/logo.png';
  $LOAD = 'assets/apps/icon-loader/loader.png';
  $BACKGROUND = 'assets/apps/background-login/erpbg.svg';
  $TITLE = 'ERP System Website';
  $APP_NAME = 'assets/apps/logo-app/app.png';
  $COMPANY = $Rapps['COMPANY'];
  $SLOGAN = $Rapps['SLOGAN'];
  $EMAIL = $Rapps['EMAIL'];
  $TELP = $Rapps['TELP'];
  $FAX = $Rapps['FAX'];
  $ADDRESS = $Rapps['ADDRESS'];
  $TYPE_APP = $Rapps['TYPE_APP'];
  $VERSION = $Rapps['VERSION'];
  $PROVINCE = $Rapps['PROVINCE'];
  $CITY = $Rapps['CITY'];
  $DISTRICTS = $Rapps['DISTRICTS'];
  $RT = $Rapps['RT'];
  $RW = $Rapps['RW'];
  $OWNER = $Rapps['OWNER'];
  $NIK = $Rapps['NIK'];
  $NPWP = $Rapps['NPWP'];
  $TYPE_COMPANY = $Rapps['TYPE_COMPANY'];
  $COLOR = '#673AB7';
} else {
  $ID = $Rapps['ID'];
  $ICON = $Rapps['ICON'];
  $LOGO = $Rapps['LOGO'];
  $LOAD = $Rapps['LOAD'];
  $BACKGROUND = $Rapps['BACKGROUND'];
  $TITLE = $Rapps['TITLE'];
  $APP_NAME = $Rapps['APP_NAME'];
  $COMPANY = $Rapps['COMPANY'];
  $SLOGAN = $Rapps['SLOGAN'];
  $EMAIL = $Rapps['EMAIL'];
  $TELP = $Rapps['TELP'];
  $FAX = $Rapps['FAX'];
  $ADDRESS = $Rapps['ADDRESS'];
  $TYPE_APP = $Rapps['TYPE_APP'];
  $VERSION = $Rapps['VERSION'];
  $PROVINCE = $Rapps['PROVINCE'];
  $CITY = $Rapps['CITY'];
  $DISTRICTS = $Rapps['DISTRICTS'];
  $RT = $Rapps['RT'];
  $RW = $Rapps['RW'];
  $OWNER = $Rapps['OWNER'];
  $NIK = $Rapps['NIK'];
  $NPWP = $Rapps['NPWP'];
  $TYPE_COMPANY = $Rapps['TYPE_COMPANY'];
  $COLOR = $Rapps['COLOR'];
}


class helpers
{
  function dateIndonesia($date)
  {
    $result = '';
    if (!empty($date) && $date !== '0000-00-00') {
      $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
      $tahun = substr($date, 0, 4);
      $bulan = substr($date, 5, 2);
      $tgl   = substr($date, 8, 2);

      $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun;
    }
    return $result;
  }

  function dateTimeIndonesia($date)
  {
    $result = '';
    if (!empty($date) && $date !== '0000-00-00 00:00:00') {
      $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
      $tahun = substr($date, 0, 4);
      $bulan = substr($date, 5, 2);
      $tgl   = substr($date, 8, 2);

      $result = $tgl . " " . $BulanIndo[(int)$bulan - 1] . " " . $tahun . ' - ' . substr($date, 11, 19);
    }
    return $result;
  }

  function berita($content)
  {
    $isi = strip_tags($content);
    if (strlen($isi) > 80) {
      $berita = substr($isi, 0, 80) . ' ...';
    } else {
      $berita = $content;
    }

    return $berita;
  }

  function hargaRupiah($harga)
  {
    return "Rp. " . number_format($harga, 0, ',', '.');
  }
}

// DATE SPLIT
function date_indo_s($date, $print_day = false)
{
  $day = array(
    1 =>
    'Sen',
    'Sel',
    'Rab',
    'Kam',
    'Jum',
    'Sab',
    'Min'
  );
  $month = array(
    1 =>
    'Jan',
    'Feb',
    'Mar',
    'Apr',
    'Mei',
    'Jun',
    'Jul',
    'Agu',
    'Sep',
    'Okt',
    'Nov',
    'Des'
  );
  $split    = explode('-', $date);
  $tgl_indo = $split[2] . ' ' . $month[(int)$split[1]] . ' ' . $split[0];

  if ($print_day) {
    $num = date('N', strtotime($date));
    return $day[$num] . ', ' . $tgl_indo;
  }
  return $tgl_indo;
}

// RUPIAH
function Rupiah($angka)
{
  $hasil = "Rp. " . number_format($angka, 2, ',', '.');
  return $hasil;
}

// DECIMAL
function decimal($number)
{
  $hasil = number_format($number, 0, ",", ",");
  return $hasil;
}

// NPWP
function NPWP($value)
{
  // 12.345.678.9-012.345
  $hasil = number_format($value, 0, ',', '.');
  return $hasil;
}

$helpers = new helpers();
