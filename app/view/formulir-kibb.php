<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Formulir Entry Data Aset</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active">Entry Data Aset</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header bg-success text-white"><h3 class="card-title">Tambah Aset Baru</h3></div>
        
        <div class="card-body">
          <form id="formAset">
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nomor KIB</label>
              <div class="col-sm-10">
                <input type="text" class="form-control bg-light" name="no_kib" value="KIB-B-2024-001" readonly />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Tahun</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="tahun" placeholder="Contoh: 2024" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Asal Usul</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="asal_usul" data-placeholder="Pilih asal usul...">
                  <option></option>
                  <option value="Pembelian">Pembelian</option>
                  <option value="Hibah">Hibah</option>
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
              <label class="col-sm-2 col-form-label">Merek / Type</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="merek_type" placeholder="Contoh: Honda Vario / 125cc" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Jenis</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="jenis" data-placeholder="Pilih jenis aset...">
                  <option></option>
                  <option value="Kendaraan">Kendaraan</option>
                  <option value="Alat Berat">Alat Berat</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Harga (Rp)</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="harga" placeholder="0" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. Pabrik</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_pabrik" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. Rangka</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_rangka" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. Mesin</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_mesin" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. BPKB</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_bpkb" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">No. Polisi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_polisi" />
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Kondisi</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="kondisi" data-placeholder="Pilih kondisi...">
                  <option></option>
                  <option value="Baik">Baik</option>
                  <option value="Rusak Ringan">Rusak Ringan</option>
                  <option value="Rusak Berat">Rusak Berat</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Lokasi</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="lokasi" data-placeholder="Pilih lokasi...">
                  <option></option>
                  <option value="Kantor Utama">Kantor Utama</option>
                  <option value="Pool Kendaraan">Pool Kendaraan</option>
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
          <button type="submit" form="formAset" class="btn btn-primary px-4">Simpan Data</button>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    // Inisialisasi Select2
    $('.select2-init').select2({
      theme: "bootstrap-5",
      width: '100%',
      allowClear: true
    });

    // Reset handler
    $('#btn-reset').on('click', function() {
      $('#formAset')[0].reset();
      $('.select2-init').val(null).trigger('change');
    });
  });
</script>