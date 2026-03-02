<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Daftar Data Ruangan</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Data Ruangan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card shadow-sm">
        <div class="card-header bg-primary d-flex justify-content-between align-items-center">
          <h3 class="card-title text-white mb-0">Tabel Master Ruangan</h3>
          
        </div>
        
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover nowrap" style="width:100%">
            <thead>
              <tr>
                <th style="width: 5%">No</th>
                <th>Nama Ruangan</th>
                <th>Lokasi / Gedung</th>
                <th class="text-center" style="width: 15%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              require_once '../load_env.php';
              if (!$conn) { die("Koneksi gagal: " . mysqli_connect_error()); }

              $query = mysqli_query($conn, "SELECT * FROM ruangan ORDER BY id_ruang DESC");
              $no = 1;

              while ($data = mysqli_fetch_assoc($query)) {
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= htmlspecialchars($data['nama_ruangan']); ?></td>
                  <td><?= htmlspecialchars($data['lokasi']); ?></td>
                  <td class="text-center">
                    <div class="btn-group">
                        <a href="edit_ruangan.php?id=<?= $data['id_ruang']; ?>" class="btn btn-sm btn-warning">
                           <i class="bi bi-pencil-square"></i>
                        </a>
                        <button class="btn btn-sm btn-danger btn-hapus" 
                                data-id="<?= $data['id_ruang']; ?>" 
                                data-nama="<?= $data['nama_ruangan']; ?>">
                          <i class="bi bi-trash"></i>
                        </button>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>