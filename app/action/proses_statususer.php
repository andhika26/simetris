<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SIMETRIS</title>
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
	
$id = $_GET['id'];

require_once '../../load_env.php';

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $db);


$querywa    = mysqli_query($koneksi, "SELECT * FROM konfig_wa WHERE status='1'") or die (mysqli_error());
$rwa        = mysqli_fetch_array($querywa);
$sender     = $rwa['number'];
$token      = $rwa['token'];
$urlserver  = $rwa['url_pesan'];

$query1   = mysqli_query($koneksi, "SELECT * FROM operator WHERE id='$id'") or die (mysqli_error());
$rpop1    = mysqli_fetch_array($query1);
$nama     = $rpop1['nama_pegawai'];
$status   = $rpop1['status'];
$nohp     = $rpop1['hp'];


if($status == '1'){
$query = mysqli_query($koneksi, "UPDATE operator SET status='0' WHERE id='$id'");
echo "<script>swal('SIMETRIS', 'Akun $nama Telah di BLOKIR SEMENTARA !', 'error').then((value) => { document.location='../user' });</script>";
//Notifikasi
//kirim ke pengguna baru
$data = [
'api_key' => $token,
'sender'  => $sender,
'number'  => $nohp,
'message' => '*[PEMBERITAHUAN]* dikarenakan ada aktivitas yang mencurigakan atau diluar lingkup Kegiatan Pelayanan Terpadu, Akun SIMETRIS anda di Non-Aktifkan Sementera.',
];

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => $urlserver.'/send-message',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($data),
CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
));


$response = curl_exec($curl);
//curl_close($curl); 

} else {
    
$query = mysqli_query($koneksi, "UPDATE operator SET status='1' WHERE id='$id'");
echo "<script>swal('SIMETRIS', 'Akun $nama Telah di AKTIFKAN !', 'success').then((value) => { document.location='../user' });</script>";
//aktivasi
//kirim ke pengguna baru
$data = [
'api_key' => $token,
'sender'  => $sender,
'number'  => $nohp,
'message' => '*[PEMBERITAHUAN]* Akun SIMETRIS anda di Aktifkan Kembali.',
];

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => $urlserver.'/send-message',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($data),
CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
));

$response = curl_exec($curl);

}
?>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://kakandhika26.com/UX/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>