<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Manajemen Ruangan</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Data Ruangan</a></li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6"> <div class="card card-primary card-outline shadow-sm">
            <div class="card-header">
              <h3 class="card-title"><i class="bi bi-plus-circle me-1"></i> Tambah Ruangan Baru</h3>
            </div>
            
            <form id="formTambahRuangan">
              <div class="card-body">
                <div class="mb-3">
                  <label for="nama_ruangan" class="form-label fw-bold">Nama Ruangan</label>
                  <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" 
                         placeholder="Contoh: Ruang Rapat Lt. 2" required>
                </div>

                <div class="mb-3">
                  <label for="lokasi" class="form-label fw-bold">Lokasi / Gedung</label>
                  <select class="form-select" id="lokasi" name="lokasi" required>
                    <option value="" selected disabled>Pilih Lokasi...</option>
                    <option value="Gedung Sayap Barat">UPT PPP BULU</option>
                    <option value="Gedung Sayap Timur">Instalasi Bawean</option>
                    <option value="Gedung Serbaguna">Instalasi Campurejo</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                  <textarea class="form-control" id="keterangan" name="keterangan" rows="3" 
                            placeholder="Catatan tambahan mengenai ruangan..."></textarea>
                </div>
              </div>

              <div class="card-footer bg-light d-flex justify-content-end gap-2">
                <button type="reset" class="btn btn-secondary px-4">Batal</button>
                <button type="submit" class="btn btn-primary px-4">
                  <i class="bi bi-save me-1"></i> Simpan Ruangan
                </button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="alert alert-info border-0 shadow-sm">
            <h5><i class="bi bi-info-circle-fill me-2"></i> Petunjuk</h5>
            <hr>
            <ul class="mb-0">
              <li>Pastikan <strong>Nama Ruangan</strong> belum terdaftar sebelumnya.</li>
              <li>Pilih <strong>Lokasi</strong> sesuai dengan pembagian blok gedung yang tersedia.</li>
              <li>Gunakan kolom keterangan untuk mencatat kapasitas atau fasilitas utama ruangan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>