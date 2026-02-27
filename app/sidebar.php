<!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    <strong>Dashboard</strong>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./home" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard KIB</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-database"></i>
                  <p>
                    <strong>Master Data</strong>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./formulir-kiba" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Formulir KIB A</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="./formulir-kibb" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Formulir KIB B</p>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="./formulir-kibc" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Formulir KIB C</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-file-earmark-pdf-fill"></i>
                  <p>
                    <strong>Laporan Data</strong>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./kiba" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Rekapitulasi KIB A</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./kibb" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Rekapitulasi KIB B</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./kibc" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Rekapitulasi KIB C</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Cetak Label KIB</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-arrow-left-right"></i>
                  <p>
                    <b>Mutasi Data</b>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./data-ruangan" class="nav-link"> 
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Ruangan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./ruangan" class="nav-link"> 
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Ruangan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Rekapitulasi Mutasi</p>
                    </a>
                  </li>
                </ul>


              </li>

               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-gear"></i>
                  <p>
                    <strong>Pengaturan</strong>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Data Pengguna</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Histori Data</p>
                    </a>
                  </li>
                </ul>

                
              </li>
              <!-- untuk khusus role admin -->
              <li class="nav-header">Pengaturan</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle text-danger"></i>
                  <p class="text">Role : <?php echo $jab ?></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle text-warning"></i>
                  <p>IP : 192.168.1.100</p>
                </a>
              </li>
              <li class="nav-header">Informasi Sistem</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                 
                  <?php
// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
echo "<i class='nav-icon bi bi-database-fill-check'></i><p>Sync Berhasil</p>";
?>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->