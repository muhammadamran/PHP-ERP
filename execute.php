<!-- Script -->
<?php
session_start();
include 'db/db.php';

function login($data)
{
    if ($data['PASSWORD_HASH'] == $data['PASSWORD']) {
        $_SESSION['ID_USERS'] = $data['ID_USERS'];
        $_SESSION['BARCODE_U'] = $data['BARCODE_U'];
        $_SESSION['USERNAME'] = $data['USERNAME'];
        $_SESSION['ROLE'] = $data['ROLE'];
        $_SESSION['STATUS'] = $data['STATUS'];
        $_SESSION['CREATED_DATE'] = $data['CREATED_DATE'];
        $_SESSION['BY'] = $data['BY'];
        $_SESSION['ID_ROLE'] = $data['ID_ROLE'];
        $_SESSION['ACCESS'] = $data['ACCESS'];
        $_SESSION['DESC_ACCESS'] = $data['DESC_ACCESS'];
        $_SESSION['MODULES'] = $data['MODULES'];
        $_SESSION['ID_EMPLOYEE'] = $data['ID_EMPLOYEE'];
        $_SESSION['BARCODE_E'] = $data['BARCODE_E'];
        $_SESSION['NIK'] = $data['NIK'];
        $_SESSION['NPWP'] = $data['NPWP'];
        $_SESSION['FIRST_NAME'] = $data['FIRST_NAME'];
        $_SESSION['MIDDLE_NAME'] = $data['MIDDLE_NAME'];
        $_SESSION['LAST_NAME'] = $data['LAST_NAME'];
        $_SESSION['EMAIL'] = $data['EMAIL'];
        $_SESSION['HANDPHONE'] = $data['HANDPHONE'];
        $_SESSION['PROVINCE_E_D'] = $data['PROVINCE_E_D'];
        $_SESSION['CITY_E_D'] = $data['CITY_E_D'];
        $_SESSION['DISTRICS_E_D'] = $data['DISTRICS_E_D'];
        $_SESSION['REGENCIES_E_D'] = $data['REGENCIES_E_D'];
        $_SESSION['VILLAGES_E_D'] = $data['VILLAGES_E_D'];
        $_SESSION['RT_E_D'] = $data['RT_E_D'];
        $_SESSION['RW_E_D'] = $data['RW_E_D'];
        $_SESSION['ADDRESS_E_D'] = $data['ADDRESS_E_D'];
        $_SESSION['POSTAL_CODE_E_D'] = $data['POSTAL_CODE_E_D'];
        $_SESSION['PROVINCE_E_S'] = $data['PROVINCE_E_S'];
        $_SESSION['CITY_E_S'] = $data['CITY_E_S'];
        $_SESSION['DISTRICS_E_S'] = $data['DISTRICS_E_S'];
        $_SESSION['REGENCIES_E_S'] = $data['REGENCIES_E_S'];
        $_SESSION['VILLAGES_E_S'] = $data['VILLAGES_E_S'];
        $_SESSION['RT_E_S'] = $data['RT_E_S'];
        $_SESSION['RW_E_S'] = $data['RW_E_S'];
        $_SESSION['ADDRESS_E_S'] = $data['ADDRESS_E_S'];
        $_SESSION['POSTAL_CODE_E_S'] = $data['POSTAL_CODE_E_S'];
        $_SESSION['RELIGION'] = $data['RELIGION'];
        $_SESSION['BLOOD'] = $data['BLOOD'];
        $_SESSION['MARITAL_STATUS'] = $data['MARITAL_STATUS'];
        $_SESSION['PLACE_BIRTH'] = $data['PLACE_BIRTH'];
        $_SESSION['DATE_BIRTH'] = $data['DATE_BIRTH'];
        $_SESSION['AGE'] = $data['AGE'];
        $_SESSION['GENDER'] = $data['GENDER'];
        $_SESSION['STATUS_EMPLOYEE'] = $data['STATUS_EMPLOYEE'];
        $_SESSION['TYPE_EMPLOYEE'] = $data['TYPE_EMPLOYEE'];
        return 2;
    } else return 1;
}

if (isset($_POST["USERNAME"])) {
    $USERNAME_ = $db->real_escape_string($_POST["USERNAME"]);
} else {
    $USERNAME_ = "";
}
if (isset($_POST["PASSWORD"])) {
    $PASSWORD_ = $db->real_escape_string($_POST["PASSWORD"]);
} else {
    $PASSWORD_ = "";
}

$user = $db->query("SELECT * FROM view_privileges WHERE USERNAME='" . $USERNAME_ . "' AND PASSWORD='" . md5($PASSWORD_) . "'", 0);
$result = $user->fetch_assoc();
$ID_USERS = $result['ID_USERS'];
$BARCODE_U = $result['BARCODE_U'];
$USERNAME = $result['USERNAME'];
$PASSWORD = $result['PASSWORD'];
$ROLE = $result['ROLE'];
$STATUS = $result['STATUS'];
$CREATED_DATE = $result['CREATED_DATE'];
$BY = $result['BY'];
$ID_ROLE = $result['ID_ROLE'];
$ACCESS = $result['ACCESS'];
$DESC_ACCESS = $result['DESC_ACCESS'];
$MODULES = $result['MODULES'];
$ID_EMPLOYEE = $result['ID_EMPLOYEE'];
$BARCODE_E = $result['BARCODE_E'];
$NIK = $result['NIK'];
$NPWP = $result['NPWP'];
$FIRST_NAME = $result['FIRST_NAME'];
$MIDDLE_NAME = $result['MIDDLE_NAME'];
$LAST_NAME = $result['LAST_NAME'];
$EMAIL = $result['EMAIL'];
$HANDPHONE = $result['HANDPHONE'];
$PROVINCE_E_D = $result['PROVINCE_E_D'];
$CITY_E_D = $result['CITY_E_D'];
$DISTRICS_E_D = $result['DISTRICS_E_D'];
$REGENCIES_E_D = $result['REGENCIES_E_D'];
$VILLAGES_E_D = $result['VILLAGES_E_D'];
$RT_E_D = $result['RT_E_D'];
$RW_E_D = $result['RW_E_D'];
$ADDRESS_E_D = $result['ADDRESS_E_D'];
$POSTAL_CODE_E_D = $result['POSTAL_CODE_E_D'];
$PROVINCE_E_S = $result['PROVINCE_E_S'];
$CITY_E_S = $result['CITY_E_S'];
$DISTRICS_E_S = $result['DISTRICS_E_S'];
$REGENCIES_E_S = $result['REGENCIES_E_S'];
$VILLAGES_E_S = $result['VILLAGES_E_S'];
$RT_E_S = $result['RT_E_S'];
$RW_E_S = $result['RW_E_S'];
$ADDRESS_E_S = $result['ADDRESS_E_S'];
$POSTAL_CODE_E_S = $result['POSTAL_CODE_E_S'];
$RELIGION = $result['RELIGION'];
$BLOOD = $result['BLOOD'];
$MARITAL_STATUS = $result['MARITAL_STATUS'];
$PLACE_BIRTH = $result['PLACE_BIRTH'];
$DATE_BIRTH = $result['DATE_BIRTH'];
$AGE = $result['AGE'];
$GENDER = $result['GENDER'];
$STATUS_EMPLOYEE = $result['STATUS_EMPLOYEE'];
$TYPE_EMPLOYEE = $result['TYPE_EMPLOYEE'];


if ($ROLE == 'Administrator') {
    $data = [
        'ID_USERS' => $ID_USERS,
        'BARCODE_U' => $BARCODE_U,
        'USERNAME' => $USERNAME,
        'PASSWORD_HASH' => md5($PASSWORD_),
        'PASSWORD' => $PASSWORD,
        'ROLE' => $ROLE,
        'STATUS' => $STATUS,
        'CREATED_DATE' => $CREATED_DATE,
        'BY' => $BY,
        'ID_ROLE' => $ID_ROLE,
        'ACCESS' => $ACCESS,
        'DESC_ACCESS' => $DESC_ACCESS,
        'MODULES' => $MODULES,
        'ID_EMPLOYEE' => $ID_EMPLOYEE,
        'BARCODE_E' => $BARCODE_E,
        'NIK' => $NIK,
        'NPWP' => $NPWP,
        'FIRST_NAME' => $FIRST_NAME,
        'MIDDLE_NAME' => $MIDDLE_NAME,
        'LAST_NAME' => $LAST_NAME,
        'EMAIL' => $EMAIL,
        'HANDPHONE' => $HANDPHONE,
        'PROVINCE_E_D' => $PROVINCE_E_D,
        'CITY_E_D' => $CITY_E_D,
        'DISTRICS_E_D' => $DISTRICS_E_D,
        'REGENCIES_E_D' => $REGENCIES_E_D,
        'VILLAGES_E_D' => $VILLAGES_E_D,
        'RT_E_D' => $RT_E_D,
        'RW_E_D' => $RW_E_D,
        'ADDRESS_E_D' => $ADDRESS_E_D,
        'POSTAL_CODE_E_D' => $POSTAL_CODE_E_D,
        'PROVINCE_E_S' => $PROVINCE_E_S,
        'CITY_E_S' => $CITY_E_S,
        'DISTRICS_E_S' => $DISTRICS_E_S,
        'REGENCIES_E_S' => $REGENCIES_E_S,
        'VILLAGES_E_S' => $VILLAGES_E_S,
        'RT_E_S' => $RT_E_S,
        'RW_E_S' => $RW_E_S,
        'ADDRESS_E_S' => $ADDRESS_E_S,
        'POSTAL_CODE_E_S' => $POSTAL_CODE_E_S,
        'RELIGION' => $RELIGION,
        'BLOOD' => $BLOOD,
        'MARITAL_STATUS' => $MARITAL_STATUS,
        'PLACE_BIRTH' => $PLACE_BIRTH,
        'DATE_BIRTH' => $DATE_BIRTH,
        'AGE' => $AGE,
        'GENDER' => $GENDER,
        'STATUS_EMPLOYEE' => $STATUS_EMPLOYEE,
        'TYPE_EMPLOYEE' => $TYPE_EMPLOYEE,
    ];

    $loginArea = login($data);

    if ($loginArea == 2) {
        // exit;
        echo '<script>alert("Hai, ' . $FIRST_NAME . '. kamu berhasil login");location.href = "index.php"</script>';
    } else if ($loginArea == 1) {
        echo '<script>alert("Gagal Login");window.history.go(-1);</script>';
    }
} else {
    // exit;
    echo '<script>alert("Gagal Login, Anda tidak memiliki akses");window.history.go(-1);</script>';
}
?>
<!-- End Script -->