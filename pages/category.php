<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Kategori Handphone - MYPHONE</title>

    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/table.css" />
    <link rel="stylesheet" href="../css/footer.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <script src="../js/header.js"></script>
  </head>

  <body>
    <!-- HEADER -->
    <header class="header">
      <div class="header-left">
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
        </div>
      <div class="logo">RENTPHONE</div>
      </div>

      <div class="header-right">
        <i class="fas fa-bell notification-icon"></i>

        <div class="user-menu">
          <div class="user-dropdown">
            <i class="fas fa-user-circle"></i>
            <span>Admin</span>
            <i class="fas fa-chevron-down"></i>
          </div>

          <div class="dropdown-menu">
            <div class="dropdown-header">
              <div class="user-info">
                <div class="user-avatar">
                  <i class="fas fa-user"></i>
                </div>

                <div class="user-details">
                  <div class="user-name">Admin User</div>
                  <div class="user-role">Administrator</div>
                </div>
              </div>
            </div>

            <a href="profile.php" class="dropdown-item">
              <i class="fas fa-user-circle"></i>
              <span>My Profile</span>
            </a>

            <a href="dashboard.php" class="dropdown-item">
              <i class="fas fa-th-large"></i>
              <span>Dashboard</span>
            </a>

            <div class="dropdown-divider"></div>

            <button class="dropdown-item logout">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <!-- SIDEBAR -->

      <div class="outbar">
        <aside class="sidebar">
          <nav class="nav-menu">
            <a href="dashboard.php" class="nav-item">
              <i class="fas fa-th-large"></i>
              <span>Dashboard</span>
            </a>

            <a href="allhp.php" class="nav-item">
              <i class="fas fa-mobile-alt"></i>
              <span>Daftar HP</span>
            </a>

            <a href="merek-hp.php" class="nav-item">
              <i class="fas fa-tags"></i>
              <span>Merek HP</span>
            </a>

            <a href="kategori-hp.php" class="nav-item active">
              <i class="fas fa-list"></i>
              <span>Kategori HP</span>
            </a>

            <a href="hp-disewa.php" class="nav-item">
              <i class="fas fa-hand-holding"></i>
              <span>HP Disewa</span>
            </a>

            <a href="riwayat-sewa.php" class="nav-item">
              <i class="fas fa-history"></i>
              <span>Riwayat Penyewaan</span>
            </a>

            <a href="profile.php" class="nav-item">
              <i class="fas fa-user"></i>
              <span>Profile</span>
            </a>
          </nav>
        </aside>
      </div>

      <!-- MAIN CONTENT -->

      <main class="main-content">
        <div class="table-container">
          <div class="table-header">
            <h2>Semua Kategori Handphone :</h2>

            <button class="btn-add" onclick="openModal('modalAdd')">
              <i class="fas fa-plus"></i> Tambah Kategori
            </button>
          </div>

          <div class="table-wrapper">
            <table class="data-table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA KATEGORI</th>
                  <th>AKSI</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>iPhone Flagship</td>
                  <td>
                    <button class="btn-edit">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn-delete">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>iPhone Pro Series</td>
                  <td>
                    <button class="btn-edit">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn-delete">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>iPhone Standard</td>
                  <td>
                    <button class="btn-edit">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn-delete">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>iPhone Budget</td>
                  <td>
                    <button class="btn-edit">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn-delete">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>iPhone Lama</td>
                  <td>
                    <button class="btn-edit">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn-delete">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <footer class="page-footer">
          <p>© 2026 Aplikasi Penyewaan Handphone</p>
        </footer>
      </main>
    </div>

    <!-- MODAL TAMBAH KATEGORI -->

    <div id="modalAdd" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Tambah Kategori Handphone</h3>
          <span class="close" onclick="closeModal('modalAdd')">&times;</span>
        </div>

        <div class="modal-body">
          <form id="formAdd">
            <div class="form-group">
              <label>Nama Kategori</label>

              <input
                type="text"
                placeholder="Masukkan kategori handphone"
                required
              />
            </div>

            <div class="modal-footer">
              <button
                type="button"
                class="btn-cancel"
                onclick="closeModal('modalAdd')"
              >
                Batal
              </button>

              <button type="submit" class="btn-submit">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script src="../js/modal.js"></script>
  </body>
</html>
```
