<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HP Disewa - RENTPHONE</title>

    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/peminjaman.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <script src="../js/header.js" defer></script>
    <script src="../js/components.js" defer></script>
  </head>

  <body>
    <!-- HEADER -->
    <?php include '../components/header.php'; ?>

    <div class="container">
      <!-- SIDEBAR -->
      <?php include '../components/sidebar.php'; ?>

      <!-- MAIN CONTENT -->

      <main class="main-content">
        <div class="peminjaman-container">
          <div class="peminjaman-header">
            <h2>HP Disewa :</h2>

            <button
              class="btn-add-peminjaman"
              onclick="window.location.href = 'add-sewa.php'"
            >
              <i class="fas fa-plus"></i> Tambah Penyewaan
            </button>
          </div>

          <!-- TABLE -->

          <div class="table-responsive">
            <table class="peminjaman-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Penyewa</th>
                  <th>HP</th>
                  <th>Alamat</th>
                  <th>Tanggal Sewa</th>
                  <th>Tanggal Kembali</th>
                  <th>Nomor Telepon</th>
                  <th>Catatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Aldi Wijaya</td>
                  <td>iPhone 15 Pro</td>
                  <td>Pasirian</td>
                  <td>1 Maret 2026</td>
                  <td>31 Maret 2026</td>
                  <td>+62 81234140813</td>
                  <td>-</td>

                  <td>
                    <button class="btn-check" title="Sudah Dikembalikan">
                      <i class="fas fa-check"></i>
                    </button>

                    <button class="btn-cross" title="Belum Dikembalikan">
                      <i class="fas fa-times"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>Decca Almeira</td>
                  <td>iPhone 14</td>
                  <td>Biting</td>
                  <td>3 April 2026</td>
                  <td>15 April 2026</td>
                  <td>+62 84321014813</td>
                  <td>-</td>

                  <td>
                    <button class="btn-check">
                      <i class="fas fa-check"></i>
                    </button>

                    <button class="btn-cross">
                      <i class="fas fa-times"></i>
                    </button>
                  </td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>Ghasany Nadziva</td>
                  <td>iPhone 13</td>
                  <td>Nogosari</td>
                  <td>20 April 2026</td>
                  <td>26 April 2026</td>
                  <td>+62 85234687935</td>
                  <td>-</td>

                  <td>
                    <button class="btn-check">
                      <i class="fas fa-check"></i>
                    </button>

                    <button class="btn-cross">
                      <i class="fas fa-times"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <footer class="page-footer">
          <p>© 2026 RENTPHONE - Penyewaan HP</p>
        </footer>
      </main>
    </div>

    <script src="../js/peminjaman.js"></script>
  </body>
</html>
