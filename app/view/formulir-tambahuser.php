<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Manajemen Pengguna</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Pengguna</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7"> 
          <div class="card card-primary card-outline shadow-sm">
            <div class="card-header">
              <h3 class="card-title"><i class="bi bi-person-plus-fill me-1"></i> Tambah Pengguna Baru</h3>
            </div>
            
            <form id="formTambahUser" action="proses_tambahuser" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="mb-3 row">
                  <label for="nama_personal" class="col-sm-3 col-form-label fw-bold">Nama Personal :</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_personal" name="nama" placeholder="Nama Pengguna Baru" required>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="jabatan" class="col-sm-3 col-form-label fw-bold">Jabatan :</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Nama Jabatan Pengguna Baru" required>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="username" class="col-sm-3 col-form-label fw-bold">Username :</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" id="username" name="username" placeholder="Username akan dibuat secara otomatis" readonly>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="password" class="col-sm-3 col-form-label fw-bold">Password :</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control bg-light" id="password" name="password" placeholder="Password akan dibuat secara otomatis" readonly>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="aktivasi" class="col-sm-3 col-form-label fw-bold">Aktivasi :</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="aktivasi" name="aktivasi" required>
                      <option value="1" selected>Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="whatsapp" class="col-sm-3 col-form-label fw-bold">Whatsapp :</label>
                  <div class="col-sm-9">
                    <input type="number" class="form-control" id="whatsapp" name="whatsapp" placeholder="Nomor Whatsapp Aktif" required>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="hak_akses" class="col-sm-3 col-form-label fw-bold">Hak Akses :</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="hak_akses" name="hak_akses" required>
                      <option value="1010">Full Akses</option>
                      <option value="101">Operator</option>
                      <option value="100">User Biasa</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="lokasi_kerja" class="col-sm-3 col-form-label fw-bold">Lokasi Kerja :</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="lokasi_kerja" name="lokasi" required>
                      <option value="12079" selected>UPT Pelabuhan Perikanan Pantai Bulu</option>
                      <option value="120791">Instalasi Bawean</option>
                      <option value="120792">Instalasi Campurejo</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-light d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-secondary px-4">Batal</button>
                <button type="submit" class="btn btn-primary px-4" name="submit">
                  <i class="bi bi-save me-1"></i> Simpan Pengguna
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-5">
          <div class="alert alert-info border-0 shadow-sm">
            <h5><i class="bi bi-info-circle-fill me-2"></i> Keterangan Sistem</h5>
            <hr>
            <ul class="mb-0">
              <li><strong>Username & Password</strong> akan digenerate otomatis oleh sistem berdasarkan Nama Personal.</li>
              <li>Pastikan <strong>Nomor Whatsapp</strong> diawali dengan kode negara (contoh: 62812...).</li>
              <li><strong>Hak Akses</strong> menentukan menu yang dapat dibuka oleh pengguna tersebut.</li>
              <li>Pilih <strong>Lokasi Kerja</strong> yang sesuai untuk memfilter cakupan data aset.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>