<?php
// --- KONFIGURASI DATABASE ---
require_once '../load_env.php';

// Cek Koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// --- QUERY AMBIL DATA ---
$query = mysqli_query($conn, "SELECT * FROM operator ORDER BY id DESC");
?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Manajemen Operator</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Daftar Operator</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card shadow-sm">
        <div class="card-header bg-primary">
          <h3 class="card-title text-white">Data Pegawai / Operator Sistem</h3>
          <div class="card-tools">
            <a href="./formulir-user" class="btn btn-success btn-sm">
                <i class="bi bi-plus-lg"></i> Tambah User
            </a>
          </div>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover dt-responsive nowrap" style="width:100%">
            <thead>
              <tr class="table-dark">
                <th width="5%">No</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Jabatan</th>
                <th>Kode</th>
                <th>No. HP</th>
                <th>Status</th>
                <th>UNOR</th>
                <th>Terakhir Masuk</th>
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
                <td><strong><?= htmlspecialchars($row['nama_pegawai']); ?></strong></td>
                <td><?= htmlspecialchars($row['nip']); ?></td>
                <td><?= htmlspecialchars($row['jabatan']); ?></td>
                <td><span class="badge bg-secondary"><?= htmlspecialchars($row['kode']); ?></span></td>
                <td><?= htmlspecialchars($row['hp']); ?></td>
                <td>
                  <?php if($row['status'] == '1'): ?>
                    <span class="badge bg-success">Aktif</span>
                  <?php else: ?>
                    <span class="badge bg-danger">Non-Aktif</span>
                  <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($row['unor']); ?></td>
                <td><small><?= date('d/m/Y H:i', strtotime($row['logmasuk'])); ?></small></td>
                <td class="text-center">
                  <a href="./action/proses_edituser.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                  <a href="./action/proses_resetuser.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-info" onclick="confirmResetPassword(event, this.href)" title="Reset & Kirim Password via WA">
                    <i class="bi bi-whatsapp"></i>
                  </a>
                  <?php if($row['status'] == '1'): ?>
                    <a href="./action/proses_statususer.php?id=<?= $row['id']; ?>&status=0" class="btn btn-sm btn-dark" onclick="confirmStatusChange(event, this.href, 'menonaktifkan')" title="Non-aktifkan">
                      <i class="bi bi-toggle-off"></i>
                    </a>
                  <?php else: ?>
                    <a href="./action/proses_statususer.php?id=<?= $row['id']; ?>&status=1" class="btn btn-sm btn-success" onclick="confirmStatusChange(event, this.href, 'mengaktifkan')" title="Aktifkan">
                      <i class="bi bi-toggle-on"></i>
                    </a>
                  <?php endif; ?>
                  <a href="./action/proses_hapususer.php?id=<?= $row['id']; ?>" 
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