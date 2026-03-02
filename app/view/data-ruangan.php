<?php
// --- KONFIGURASI DATABASE ---
require_once '../load_env.php';

// Cek Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// --- QUERY AMBIL DATA ---
$query = mysqli_query($conn, "SELECT * FROM ruangan ORDER BY id_ruang DESC");
?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Manajemen Ruangan</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Daftar Ruangan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card shadow-sm">
        <div class="card-header bg-primary">
          <h3 class="card-title text-white">Data Ruangan</h3>
          <div class="card-tools">
            <a href="./ruangan" class="btn btn-warning btn-m">
                <i class="bi bi-plus-lg"></i> Tambah Ruangan
            </a>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover dt-responsive nowrap" style="width:100%">
            <thead>
              <tr class="table-dark">
                <th width="5%">No</th>
                <th>Nama Ruangan</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              // Proses Fetch Data menggunakan while loop
              while($row = mysqli_fetch_assoc($query)) { 
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><strong><?= htmlspecialchars($row['nama_ruangan']); ?></strong></td>
                <td><?= htmlspecialchars($row['lokasi']); ?></td>
                <td><?= htmlspecialchars($row['keterangan']); ?></td>
                
                <td class="text-center">
                  <a href="./action/proses_editruangan.php?id=<?= $row['id_ruang']; ?>" class="btn btn-sm btn-warning" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  
                  <a href="./action/proses_hapusruangan.php?id=<?= $row['id_ruang']; ?>" 
                     class="btn btn-sm btn-danger" 
                     onclick="confirmDelete(event, this.href)"
                     title="Hapus">
                    <i class="bi bi-trash"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>

              <?php if(mysqli_num_rows($query) == 0): ?>
              <tr>
                <td colspan="10" class="text-center">Data tidak ditemukan.</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
    function confirmStatusChange(event, url, actionText) {
        event.preventDefault();
        swal({
            title: "Apakah Anda yakin?",
            text: "Anda akan " + actionText + " operator ini.",
            icon: "warning",
            buttons: ["Batal", "Ya, Lanjutkan"],
            dangerMode: true,
        })
        .then((willChange) => {
            if (willChange) {
                window.location.href = url;
            }
        });
    }

    function confirmDelete(event, url) {
        event.preventDefault();
        swal({
            title: "Apakah Anda yakin?",
            text: "Setelah dihapus, data tidak dapat dipulihkan!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = url;
            }
        });
    }

    function confirmResetPassword(event, url) {
        event.preventDefault();
        swal({
            title: "Apakah Anda yakin?",
            text: "Anda akan mereset password dan mengirimkan password baru via WhatsApp!",
            icon: "warning",
            buttons: ["Batal", "Ya, Hapus"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = url;
            }
        });
    }
</script>