<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Formulir KIB C (Bangunan)</h3></div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form id="formKibC">
            <div class="row mb-3">
              <label class="col-sm-2">Nomor KIB</label>
              <div class="col-sm-10">
                <input type="text" class="form-control bg-light" name="no_kib" readonly value="KIB-C-2026-001">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Tahun</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="tahun">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Asal Usul</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="asal_usul">
                  <option value="Pembelian">Pembelian</option>
                  <option value="Hibah">Hibah</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Deskripsi</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="deskripsi" rows="2"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Kondisi</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="kondisi">
                  <option value="Baik">Baik</option>
                  <option value="Rusak Ringan">Rusak Ringan</option>
                  <option value="Rusak Berat">Rusak Berat</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Harga</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" name="harga">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Beton</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="beton">
                  <option value="Ya">Ya (Beton)</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="2"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Luas Lantai (m2)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="luas_lantai">
              </div>
            </div>

            <hr> <div class="row mb-3">
              <label class="col-sm-2">Nomor Dokumen</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="no_dokumen">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Tanggal Dokumen</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="tgl_dokumen">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Luas Tanah (m2)</label>
              <div class="col-sm-4">
                <input type="number" class="form-control" name="luas_tanah">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Keterangan</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="keterangan" rows="2"></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2">Lokasi</label>
              <div class="col-sm-10">
                <select class="form-select select2-init" name="lokasi">
                  <option value="Pusat">Pusat</option>
                  <option value="Cabang">Cabang</option>
                </select>
              </div>
            </div>
          </form>

          <div class="alert alert-info py-2 mt-4">
            <small><strong>Foto:</strong> Diinput setelah data disimpan.</small>
          </div>
        </div>
        
        <div class="card-footer d-flex justify-content-end gap-2">
          <button type="submit" form="formKibC" class="btn btn-primary px-4">Simpan Data</button>
        </div>
      </div>
    </div>
  </div>
</main>