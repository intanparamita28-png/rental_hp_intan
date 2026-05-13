<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Penyewaan HP - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <script src="../js/header.js"></script>
    <script src="../js/components.js" defer></script>

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

      <!-- Main Content -->
      <main class="main-content">
        <div class="form-page-container">
          <!-- Back Button & Title -->
          <div class="page-header">
            <button class="btn-back" onclick="window.history.back()">
              <i class="fas fa-arrow-left"></i>
            </button>
            <h2>Edit Penyewaan HP :</h2>
          </div>

          <!-- Form Card -->
          <div class="form-card">
            <form id="editPeminjamanForm">
              <div class="form-group-page">
                <label for="namaPenyewa">Nama Penyewa</label>
                <input
                  type="text"
                  id="namaPenyewa"
                  placeholder="Masukkan nama penyewa"
                  value="Wilhelmina Lorenzia Wijaya"
                  required
                />
              </div>

              <div class="form-group-page">
                <label for="kelasJurusan">Kelas/Jurusan</label>
                <input
                  type="text"
                  id="kelasJurusan"
                  placeholder="Masukkan teks"
                  value="XII RPL"
                  required
                />
              </div>

              <div class="form-group-page">
                <label for="namaHp">Nama HP</label>
                <input
                  type="text"
                  id="namaHp"
                  placeholder="Contoh: iPhone 13 Pro"
                  value="iPhone 13 Pro"
                  required
                />
              </div>

              <div class="form-group-page">
                <label for="tanggalSewa">Tanggal Sewa</label>
                <input
                  type="date"
                  id="tanggalSewa"
                  value="2025-01-12"
                  required
                />
              </div>

              <div class="form-group-page">
                <label for="tanggalKembali">Tanggal Kembali</label>
                <input
                  type="date"
                  id="tanggalKembali"
                  value="2025-12-12"
                  required
                />
              </div>

              <div class="form-group-page">
                <label for="nomorTelepon">Nomor Telepon (opsional)</label>
                <input
                  type="tel"
                  id="nomorTelepon"
                  placeholder="Masukkan teks"
                  value="+62 0100000000"
                />
              </div>

              <div class="form-group-page">
                <label for="catatan">Catatan (opsional)</label>
                <textarea id="catatan" rows="4" placeholder="Masukkan teks">
Catatan penyewaan</textarea
                >
              </div>

              <!-- Action Buttons -->
              <div class="form-actions-page">
                <button type="submit" class="btn-submit-page">
                  <i class="fas fa-save"></i> Update
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
          <p>© 2025 RENTPHONE - Penyewaan HP. All rights reserved.</p>
        </footer>
      </main>
    </div>

    <script src="../js/form-page.js"></script>
  </body>
</html>
