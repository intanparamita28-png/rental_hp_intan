<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Penyewaan - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <script src="../js/header.js"></script>
    <script src="../js/components.js" defer></script>

    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/peminjaman.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <div id="header-placeholder"></div>

    <div class="container">
          <?php include '../components/sidebar.php'; ?>

      <!-- Main Content -->
      <main class="main-content">
        <div class="peminjaman-container">
          <div class="peminjaman-header">
            <h2>Riwayat Penyewaan :</h2>
          </div>

          <!-- Table Wrapper -->
          <div class="table-responsive">
            <table class="peminjaman-table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Penyewa</th>
                  <th>Nama HP</th>
                  <th>Tanggal Sewa</th>
                  <th>Tanggal Kembali</th>
                  <th>Nomer Telepon</th>
                  <th>Catatan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Wilhelmina Lorenzia Wijaya</td>
                  <td>iPhone 13 Pro</td>
                  <td>12 / Januari / 2025</td>
                  <td>12 / Desember / 2025</td>
                  <td>+62 0100000000</td>
                  <td>-</td>
                  <td>
                    <span class="status-badge status-returned"
                      >Sudah Dikembalikan</span
                    >
                  </td>
                  <td>
                    <button
                      class="btn-edit-riwayat"
                      onclick="openEditRiwayat(1)"
                      title="Edit"
                    >
                      <i class="fas fa-edit"></i>
                    </button>
                    <button
                      class="btn-delete-riwayat"
                      onclick="openDeleteRiwayat(1)"
                      title="Hapus"
                    >
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>John Doe</td>
                  <td>Samsung Galaxy S21</td>
                  <td>15 / Januari / 2025</td>
                  <td>15 / Februari / 2025</td>
                  <td>+62 0200000000</td>
                  <td>Terlambat</td>
                  <td>
                    <span class="status-badge status-not-returned"
                      >Belum Dikembalikan</span
                    >
                  </td>
                  <td>
                    <button
                      class="btn-edit-riwayat"
                      onclick="openEditRiwayat(2)"
                      title="Edit"
                    >
                      <i class="fas fa-edit"></i>
                    </button>
                    <button
                      class="btn-delete-riwayat"
                      onclick="openDeleteRiwayat(2)"
                      title="Hapus"
                    >
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Jane Smith</td>
                  <td>Xiaomi Redmi Note 12</td>
                  <td>20 / Januari / 2025</td>
                  <td>20 / Maret / 2025</td>
                  <td>+62 0300000000</td>
                  <td>-</td>
                  <td>
                    <span class="status-badge status-returned"
                      >Sudah Dikembalikan</span
                    >
                  </td>
                  <td>
                    <button
                      class="btn-edit-riwayat"
                      onclick="openEditRiwayat(3)"
                      title="Edit"
                    >
                      <i class="fas fa-edit"></i>
                    </button>
                    <button
                      class="btn-delete-riwayat"
                      onclick="openDeleteRiwayat(3)"
                      title="Hapus"
                    >
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Ahmad Rizki</td>
                  <td>Oppo A78</td>
                  <td>25 / Januari / 2025</td>
                  <td>25 / Februari / 2025</td>
                  <td>+62 0400000000</td>
                  <td>Perpanjangan</td>
                  <td>
                    <span class="status-badge status-not-returned"
                      >Belum Dikembalikan</span
                    >
                  </td>
                  <td>
                    <button
                      class="btn-edit-riwayat"
                      onclick="openEditRiwayat(4)"
                      title="Edit"
                    >
                      <i class="fas fa-edit"></i>
                    </button>
                    <button
                      class="btn-delete-riwayat"
                      onclick="openDeleteRiwayat(4)"
                      title="Hapus"
                    >
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <footer class="page-footer">
          <p>© 2026 RENTPHONE - Penyewaan HP. All rights reserved.</p>
        </footer>
      </main>
    </div>

    <!-- Modal Edit Riwayat -->
    <div id="modalEditRiwayat" class="modal-peminjaman">
      <div class="modal-content-peminjaman">
        <div class="modal-header-peminjaman">
          <h3>Edit Riwayat Penyewaan</h3>
          <span
            class="close-peminjaman"
            onclick="closeModalPeminjaman('modalEditRiwayat')"
            >&times;</span
          >
        </div>
        <div class="modal-body-peminjaman">
          <form id="formEditRiwayat">
            <div class="form-row">
              <div class="form-group-peminjaman">
                <label for="editNamaPenyewa">Nama Penyewa</label>
                <input
                  type="text"
                  id="editNamaPenyewa"
                  placeholder="Masukkan nama penyewa"
                  required
                />
              </div>
              <div class="form-group-peminjaman">
                <label for="editNamaHp">Nama HP</label>
                <input
                  type="text"
                  id="editNamaHp"
                  placeholder="Masukkan nama HP"
                  required
                />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group-peminjaman">
                <label for="editTanggalSewa">Tanggal Sewa</label>
                <input type="date" id="editTanggalSewa" required />
              </div>
              <div class="form-group-peminjaman">
                <label for="editTanggalKembali">Tanggal Kembali</label>
                <input type="date" id="editTanggalKembali" required />
              </div>
            </div>
            <div class="form-row">
              <div class="form-group-peminjaman">
                <label for="editNomerTelepon">Nomer Telepon</label>
                <input
                  type="tel"
                  id="editNomerTelepon"
                  placeholder="+62"
                  required
                />
              </div>
              <div class="form-group-peminjaman">
                <label for="editCatatan">Catatan</label>
                <input
                  type="text"
                  id="editCatatan"
                  placeholder="Catatan (opsional)"
                />
              </div>
            </div>
            <div class="form-group-peminjaman">
              <label for="editStatus">Status</label>
              <select id="editStatus" required>
                <option value="">Pilih Status</option>
                <option value="returned">Sudah Dikembalikan</option>
                <option value="not-returned">Belum Dikembalikan</option>
              </select>
            </div>
            <div class="modal-footer-peminjaman">
              <button
                type="button"
                class="btn-cancel-peminjaman"
                onclick="closeModalPeminjaman('modalEditRiwayat')"
              >
                Batal
              </button>
              <button type="submit" class="btn-submit-peminjaman">
                Update
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Delete Confirmation -->
    <div id="modalDeleteRiwayat" class="modal-peminjaman">
      <div class="modal-content-peminjaman modal-small-peminjaman">
        <div class="modal-header-peminjaman">
          <h3>Konfirmasi Hapus</h3>
          <span
            class="close-peminjaman"
            onclick="closeModalPeminjaman('modalDeleteRiwayat')"
            >&times;</span
          >
        </div>
        <div class="modal-body-peminjaman">
          <p class="delete-message-peminjaman">
            Apakah Anda yakin ingin menghapus riwayat penyewaan ini?
          </p>
          <div class="modal-footer-peminjaman">
            <button
              type="button"
              class="btn-cancel-peminjaman"
              onclick="closeModalPeminjaman('modalDeleteRiwayat')"
            >
              Batal
            </button>
            <button
              type="button"
              class="btn-delete-confirm-peminjaman"
              onclick="confirmDeleteRiwayat()"
            >
              Hapus
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/peminjaman.js"></script>
  </body>
</html>
