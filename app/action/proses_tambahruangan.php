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
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['nama_ruangan'])) {
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
    
		// menangkap data yang di kirim dari form
		$nama_ruangan = $_POST['nama_ruangan'];
		$lokasi       = $_POST['lokasi'];
		$keterangan   = $_POST['keterangan'];
		$idz          = "RG".date("YmdHis");
		
		$queryok = $koneksi->query("INSERT INTO ruangan VALUES ('$idz','$nama_ruangan','$lokasi','$keterangan')");
		

			if ($queryok) {
			    
					    
echo "<script>swal('TAMBAH RUANG', 'Operator User $username Sukses Terbuat!, $info to $hp Cek Whatsapp', 'success').then((value) => { document.location='../?page=operator' });</script>";	    				    
//echo "<script type='text/javascript'>alert('Operator User $username Sukses Terbuat!, $info to $hp Cek Whatsapp');document.location='../?page=operator'</script>";
				
			} else {
			    
				echo "<script>swal('TAMBAH RUANG', 'Data Gagal Disimpan', 'error').then((value) => { history.back(); });</script>";
				
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