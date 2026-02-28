<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>One Gate Login SIMETRIS</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css" integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style type="text/css">
          .loader {
            position: relative;
            width: 100%;
        }
        .swal-button {
          padding: 10px 20px;
          border-radius: 2px;
          background-color: #4962B3;
          font-size: 16px;
          position: relative;
          text-align: center;
        }
        .swal-title {
          font-weight: bold;
        }
        .swal-text {
          text-align: center;
          color: #61534e;
        }
        </style> 
        <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script>
    </head>
<body>
<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
require_once '../load_env.php';

$host = getenv('DB_HOST');
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    
    // menangkap data yang dikirim dari form
    $user_nip       = $_POST['username'];
    $password_input = $_POST['password'];
    $status_aktif   = '1';

    $query = "SELECT nip, password, nama_pegawai, hp, kode, unor FROM operator WHERE nip = ? AND status = ?";
    
    // Siapkan statement
    $stmt = $koneksi->prepare($query);
    // Binding parameter
    $stmt->bind_param("ss", $user_nip, $status_aktif);
    // Eksekusi statement
    $stmt->execute();
    // Ambil hasil
    $result = $stmt->get_result();

if ($result->num_rows === 1) {
    $r = $result->fetch_assoc();
    $stored_hash = $r['password'];
    // menghitung jumlah data yang ditemukan
    $namauser    = strtoupper($r['nama_pegawai']);
    $hp          = $r['hp'];
    $jobdes      = $r['kode'];
    $unor        = $r['unor'];
    $sesilog     = date("Ymd")."-".$user;

if(password_verify($password_input, $stored_hash)){
    
    setcookie('username', $_POST['username'] , time() + (60 * 60 * 24 * 15), '/');
    setcookie('password',  $_POST['password'] , time() + (60 * 60 * 24 * 15), '/');
	$_SESSION['username'] = $sesilog;
	$_SESSION['status'] = $user;
	
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("d-m-Y H:i:s");
    $ubahnama = strtoupper("$namauser");
    $ip_pribadi=$_SERVER['REMOTE_ADDR'];
    // deteksi IP utama
    $ip_utama = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    // deteksi perangkat
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $platform = 'Mobile/Unknown';
    //Get the platform
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'Linux/Android';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'Mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
    }

    //Menggunakan Plugin dari http://www.geoplugin.net/json.gp
    //$details = json_decode(file_get_contents("http://ipinfo.io/{$ip_pribadi}/json"));
    //$kota = $details->city;
        
    // deteksi browser
    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
        $browser = 'Netscape';
    }
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
        $browser = 'Mozilla Firefox';
    }
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
        $browser = 'Google Chrome';
    }
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
        $browser = 'Opera';
    }
    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
        $browser = 'Internet Explorer';
    }
    else {
        $browser = 'Lainnya';
    }
    
    


    // jika WA Aktif
    //$p1 = $_COOKIE['username'];
    echo "<script>swal('Hai, $namauser', 'Selamat Datang di Aplikasi SIMETRIS', 'success', {buttons: false, timer: 2000,}).then((value) => { document.location='../app/home' });</script>";

}else{
    ?>
    
    <script>swal('SIMETRIS', 'Password Anda Salah, Ulangi Kembali atau Hubungi Admin SIMETRIS untuk Dilakukan Reset!', 'info', {buttons: false, timer: 2500,}).then((value) => { history.back(); });</script>
   
	<?php
	//echo "<script type='text/javascript'>alert('Anda Belum Terdaftar atau Akun Diblokir Sementara, Hubungi Admin!');</script>";
	
}

} else {

?>
        <script>swal('SIMETRIS', 'Akun Anda Tidak Ditemukan!', 'warning', {buttons: false, timer: 2000,}).then((value) => { history.back(); });</script>
<?php
}
    
    // Tutup statement
$stmt->close();


} else { ?>
   
   <script>swal('SIMETRIS', 'Data Username atau Password Masih Kosong!', 'warning', {buttons: false, timer: 2000,}).then((value) => { history.back(); });</script>

<?php
}
?>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://kakandhika26.com/UX/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>