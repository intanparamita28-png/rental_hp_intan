<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Penyewaan HP - RENTPHONE</title>

    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/form-page.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

   
  </head>

  <body>
    <div id="header-placeholder"></div>

  
    <!-- SIDEBAR -->
    <?php include '../components/sidebar.php'; ?>
      <!-- MAIN CONTENT -->

      <main class="main-content">
        <div class="form-page-container">
          <div class="page-header">
            <button class="btn-back" onclick="window.history.back()">
              <i class="fas fa-arrow-left"></i>
            </button>

            <h2>Tambah Penyewaan HP</h2>
          </div>

          <div class="form-card">
            <form id="addSewaForm">
              <div class="form-group-page">
                <label>Nama Penyewa</label>
                <input
                  type="text"
                  placeholder="Masukkan nama penyewa"
                  required
                />
              </div>

              <div class="form-group-page">
                <label>Kelas / Jurusan</label>
                <input type="text" placeholder="Contoh: XI RPL 1" required />
              </div>

              <div class="form-group-page">
                <label>Nama HP</label>
                <input
                  type="text"
                  placeholder="Contoh: iPhone 13 Pro"
                  required
                />
              </div>

              <div class="form-group-page">
                <label>Tanggal Sewa</label>
                <input type="date" required />
              </div>

              <div class="form-group-page">
                <label>Tanggal Kembali</label>
                <input type="date" required />
              </div>

              <div class="form-group-page">
                <label>Durasi Sewa (Hari)</label>
                <input type="number" placeholder="Contoh: 3" />
              </div>

              <div class="form-group-page">
                <label>Harga Sewa / Hari</label>
                <input type="number" placeholder="Contoh: 50000" />
              </div>

              <div class="form-group-page">
                <label>Nomor Telepon</label>
                <input type="tel" placeholder="Contoh: 08123456789" />
              </div>

              <div class="form-group-page">
                <label>Catatan</label>
                <textarea
                  rows="4"
                  placeholder="Tambahkan catatan jika ada"
                ></textarea>
              </div>

              <div class="form-actions-page">
                <button type="submit" class="btn-submit-page">
                  <i class="fas fa-save"></i> Simpan
                </button>

                <button
                  type="button"
                  class="btn-cancel-page"
                  onclick="window.history.back()"
                >
                  <i class="fas fa-times"></i> Batalkan
                </button>
              </div>
            </form>
          </div>
        </div>

        <footer class="page-footer">
          <p>© 2025 RENTPHONE - Penyewaan HP</p>
        </footer>
      </main>
    </div>

    <script src="../js/form-page.js"></script>
  </body>
</html>
