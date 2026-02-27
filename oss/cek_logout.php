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
<div class="loader"></div>
<?php 
// mengaktifkan session
session_start();
// menghapus semua session
session_destroy();

setcookie('username', '' , '0', '/');
setcookie('password', '', '0', '/');

// mengalihkan halaman sambil mengirim pesan logout
//echo "<script>swal('SIMETRIS', 'Aplikasi SIMETRIS Telah Di Tutup', 'success', {buttons: false, timer: 2000,}).then((value) => { document.location='./login' });</script>";

echo '<script type="text/javascript">
        swal({
            title: "SIMETRIS",
            text: "Anda telah berhasil logout.",
            icon: "success",
            buttons: false,
            timer: 2000
        }).then(() => {
            window.location.href = "./login";
        });
    </script>';
?>
</body>
</html>