<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Formulir KIB C (Gedung & Bangunan)</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Entry KIB C</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header"><h3 class="card-title">Tambah Aset Gedung & Bangunan</h3></div>
        
        <div class="card-body">
          <form id="formAset">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nomor KIB</label>
              <div class="col-sm-4">
                <input type="text" class="form-control bg-light" name="kib" value="KIB-C-2026-001" readonly />
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Tahun</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="tahun" placeholder="Contoh: 2026" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Asal Usul</label>
              <div class="col-sm-4">
                <select class="form-select select2-init" name="asal_usul" data-placeholder="Pilih asal usul...">
                  <option></option>
                  <option value="APBD">APBD</option>
                  <option value="Perolehan Lainnya">Perolehan Lainnya</option>
                </select>
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Deskripsi Objek</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="desk_obj" placeholder="Nama Gedung/Bangunan" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Kondisi</label>
              <div class="col-sm-4">
                <select class="form-select select2-init" name="kondisi" data-placeholder="Pilih kondisi...">
                  <option></option>
                  <option value="B">Baik</option>
                  <option value="RR">Rusak Ringan</option>
                  <option value="RB">Rusak Berat</option>
                </select>
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Harga (Rp)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="harga" placeholder="0" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Konstruksi Beton</label>
              <div class="col-sm-4">
                <select class="form-select select2-init" name="beton" data-placeholder="Apakah Beton?">
                  <option></option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Alamat</label>
              <div class="col-sm-4">
                <textarea class="form-control" name="alamat" rows="2" placeholder="Lokasi gedung..."></textarea>
              </div>
            </div>

            <hr> <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Luas Lantai (m²)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="luas_lantai" placeholder="0" />
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">No. Dokumen</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="no_dok" placeholder="Nomor Sertifikat/IMB" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Tgl. Dokumen</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="tgl_dok" />
              </div>
              <label class="col-sm-2 col-form-label text-sm-end">Kode KIB A (Tanah)</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="kiba" placeholder="Relasi kode tanah" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Luas Tanah (m²)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="luas_tanah" placeholder="0" />
              </div>
            </div>

          </form>
          
          <div class="alert alert-info py-2 mt-4">
            <small><i class="bi bi-info-circle"></i> <strong>Informasi:</strong> Pastikan data Luas Lantai dan No. Dokumen sesuai dengan berkas fisik.</small>
          </div>
        </div>
        
        <div class="card-footer d-flex justify-content-end gap-2">
          <button type="button" id="btn-reset" class="btn btn-outline-secondary px-4">Reset</button>
          <button type="submit" form="formAset" class="btn btn-primary px-4">Simpan Data KIB C</button>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $('.select2-init').select2({
      theme: "bootstrap-5",
      width: '100%',
      allowClear: true
    });

    $('#btn-reset').on('click', function() {
      if(confirm('Apakah Anda yakin ingin mengosongkan form?')) {
        $('#formAset')[0].reset();
        $('.select2-init').val(null).trigger('change');
      }
    });
  });
</script>