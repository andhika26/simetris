<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Formulir KIB A</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Formulir KIB A</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header bg-primary text-white"><h3 class="card-title">Entry Data Aset</h3></div>
        
        <div class="card-body">
          <form id="formKibA">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nomor KIB</label>
              <div class="col-sm-5">
                <input type="text" class="form-control bg-light" name="no_kib" value="KIB-A-2024-001" readonly />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Tahun</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" name="tahun" placeholder="Contoh: 2024" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Asal Usul</label>
              <div class="col-sm-5">
                <select class="form-select select2-init" name="asal_usul" data-placeholder="Pilih asal usul...">
                  <option></option>
                  <option value="Pembelian">Pembelian</option>
                  <option value="Hibah">Hibah</option>
                  <option value="Warisan">Warisan</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Kategori Aset</label>
              <div class="col-sm-5">
                <select class="form-select select2-init" name="kategori_aset" data-placeholder="Pilih asal usul...">
                  <option></option>
                  <option value="Pembelian">1.1.1.1 Pembelian</option>
                  <option value="Hibah">1.1.1.1 Hibah</option>
                  <option value="Warisan">1.1.1.1 Warisan</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" rows="2" placeholder="Detail barang..."></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Luas (m2)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="luas" placeholder="0" />
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Harga (Rp)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="harga" placeholder="0" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="2" placeholder="Alamat lengkap lokasi..."></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Status HAK</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="status_hak" data-placeholder="Pilih status hak...">
                  <option></option>
                  <option value="HM">Hak Milik (HM)</option>
                  <option value="HGB">Hak Guna Bangunan (HGB)</option>
                  <option value="HP">Hak Pakai (HP)</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. Sertifikat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_sertifikat" placeholder="Masukkan nomor sertifikat" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Tanggal Sertifikat</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="tgl_sertifikat" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" rows="2"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Lokasi</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="lokasi" data-placeholder="Pilih lokasi...">
                  <option></option>
                  <option value="Gudang A">Gudang A</option>
                  <option value="Kantor Pusat">Kantor Pusat</option>
                </select>
              </div>
            </div>
          </form>
          
          <div class="alert alert-info py-2 mt-4">
            <small><i class="bi bi-info-circle"></i> <strong>Foto:</strong> Diinput setelah data disimpan.</small>
          </div>
        </div>
        
        <div class="card-footer d-flex justify-content-end gap-2">
          <button type="button" id="btn-reset" class="btn btn-outline-secondary px-4">Reset</button>
          <button type="submit" form="formKibA" class="btn btn-primary px-4">Simpan Data</button>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    // Inisialisasi semua Select2 dengan satu class
    $('.select2-init').select2({
      theme: "bootstrap-5",
      width: '100%',
      allowClear: true
    });

    // Reset handler
    $('#btn-reset').on('click', function() {
      $('#formKibA')[0].reset();
      $('.select2-init').val(null).trigger('change');
    });
  });
</script>