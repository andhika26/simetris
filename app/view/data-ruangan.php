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
        <div class="card-header bg-primary">
          <h3 class="card-title text-white">Tabel Master Ruangan</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-hover dt-responsive nowrap" style="width:100%">
            <thead>
              <tr>
                <th style="width: 10%">No</th>
                <th>Nama Ruangan</th>
                <th>Lokasi / Gedung</th>
                <th class="text-center" style="width: 15%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ruang Rapat Utama</td>
                <td>Gedung A - Lantai 2</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Laboratorium Komputer</td>
                <td>Gedung B - Lantai 1</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Gudang Arsip</td>
                <td>Gedung C - Samping Kantin</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-sm btn-danger" title="Hapus"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th>Lokasi / Gedung</th>
                <th class="text-center">Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>