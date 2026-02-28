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
        .swal-title {
            font-weight: bold;
        }
        .swal-text {
            text-align: center;
            color: #000000;
        }
        </style>  
        <script type="text/javascript">
                $(window).load(function() {
                    $(".loader").fadeOut("slow");
                });
        </script>
    </head>
    <body>
<div class="loader"></div>
<?php
 
if (isset($_POST['submit'])) {
	if (empty($_POST['nama'])) {
	        echo "<script>swal('TAMBAH USER', 'Nama Masih Kosong', 'error').then((value) => { history.back(); });</script>";
			 //echo "<script type='text/javascript'>alert('Maaf! Nama Masih Kosong');history.back();</script>";
	}
	else
	{
		// Variabel username dan password
		date_default_timezone_set("Asia/jakarta");

        require_once '../load_env.php';

        // Membuat koneksi
        $koneksi = new mysqli($host, $user, $pass, $db);
                
        $querywa = mysqli_query($koneksi, "SELECT * FROM konfig_wa WHERE status='1'") or die (mysqli_error());
        $rwa        = mysqli_fetch_array($querywa);
        $sender     = $rwa['number'];
        $token      = $rwa['token'];
        $urlserver  = $rwa['url_pesan'];
        
		// menangkap data yang di kirim dari form
		$nama 	 = $_POST['nama'];
		$jabatan = $_POST['jabatan'];
		$akses 	 = $_POST['hak_akses'];
		$hp 	 = $_POST['whatsapp'];
		$status	 = $_POST['aktivasi'];
		$unor    = $_POST['lokasi'];
		$idz     = "SP".date("YmdHis");

	    $acak         = rand(0000,9999);
	    $acak2        = rand(11,99);
	    $th           = date("y");
		//buat user dan password
		$replaced     = explode(' ',$nama);
		$sub_kalimat  = 'BuluIkan!1'.$th.''.$acak2;
		$password     = password_hash($sub_kalimat, PASSWORD_BCRYPT);
		
		if($_POST['username']==null){
		    $username = $replaced[0]."".$acak2;
		} else {
    		$username = $_POST['username'];
		}
		
		$jamdaftar = date("Y-m-d H:i:s");

		
		$queryok = $koneksi->query("INSERT INTO operator VALUES ('$idz','$nama','$username','$password','$jabatan','$akses','$hp','$status','$unor','')");
		

			if ($queryok) {
			    
				if ($hp == null){
				echo "<script>swal('TAMBAH USER', 'Operator User $username Sukses Terbuat!', 'success').then((value) => { document.location='../?page=operator' });</script>";	    
				//echo "<script type='text/javascript'>alert('Operator $nama Sukses Terbuat!');document.location='../?page=operator'</script>";
				} else {
				    
//kirim ke pengguna baru
$data = [
'api_key' => $token,
'sender'  => $sender,
'number'  => $hp,
'message' => '*[PEMBERITAHUAN]*

Administrator memberitahukan akun anda untuk login di *Aplikasi SIMETRIS* :
    
Nama Petugas : *'.$nama.'*
Username : *'.$username.'*
Password : '.$sub_kalimat.'
Status : *AKTIF*
Unor Sistem : *'.$unor.'*
_(untuk aktivasi hubungi admin)_
    
Mohon untuk menyimpan data ini, jika kehilangan/lupa bisa menghubungi Admin.
Terima Kasih',
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
				    
echo "<script>swal('TAMBAH USER', 'Operator User $username Sukses Terbuat!, $info to $hp Cek Whatsapp', 'success').then((value) => { document.location='../?page=operator' });</script>";	    				    
//echo "<script type='text/javascript'>alert('Operator User $username Sukses Terbuat!, $info to $hp Cek Whatsapp');document.location='../?page=operator'</script>";

				}
				
			} else {
			    
				echo "<script>swal('TAMBAH USER', 'Data Gagal Disimpan', 'error').then((value) => { history.back(); });</script>";
				
			}
			
		
				//mysql_close($connection); // Menutup koneksi
	}
}
?>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://kakandhika26.com/UX/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>