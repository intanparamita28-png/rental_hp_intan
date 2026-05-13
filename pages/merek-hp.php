<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Merek HP - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <!-- <script src="../js/header.js"></script> -->
    <!-- <script src="../js/components.js" defer></script> -->

    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/table.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <script src="../js/header.js" defer></script>
  </head>
  <body>
    <!-- HEADER -->
    <?php include '../components/header.php'; ?>

    <div class="container">
      <!-- SIDEBAR -->
      <?php include '../components/sidebar.php'; ?>

      <!-- Main Content -->
      <main class="main-content">
        <div class="table-container">
          <div class="table-header">
            <h2>Semua Merek HP :</h2>
            <button class="btn-add" onclick="openModal('modalAdd')">
              <i class="fas fa-plus"></i> Tambah Merek
            </button>
          </div>

          <div class="table-wrapper">
            <table class="data-table">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA MEREK</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>iPhone 15 Pro</td>
                  <td>
                    <button class="btn-edit" onclick="openEditModal('Apple')">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    <button
                      class="btn-delete"
                      onclick="openModal('modalDelete')"
                    >
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>iPhone 14</td>
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
                  <td>iPhone 13</td>
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
                  <td>iPhone 12</td>
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
                  <td>iPhone 11</td>
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
                  <td>6</td>
                  <td>iPhone 16</td>
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
                  <td>7</td>
                  <td>Iphone 15</td>
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
              </tbody>
            </table>
          </div>
        </div>

        <footer class="page-footer">
          <p>© 2025 RENTPHONE - Penyewaan HP. All rights reserved.</p>
        </footer>
      </main>
    </div>

    <!-- Modal Add Genre -->
    <div id="modalAdd" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Tambah Merek HP</h3>
          <span class="close" onclick="closeModal('modalAdd')">&times;</span>
        </div>
        <div class="modal-body">
          <form id="formAdd">
            <div class="form-group">
              <label for="merekName">Nama Merek</label>
              <input
                type="text"
                id="merekName"
                placeholder="Masukkan nama merek HP"
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

    <!-- Modal Edit Genre -->
    <div id="modalEdit" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Edit Merek HP</h3>
          <span class="close" onclick="closeModal('modalEdit')">&times;</span>
        </div>
        <div class="modal-body">
          <form id="formEdit">
            <div class="form-group">
              <label for="editMerekName">Nama Merek</label>
              <input
                type="text"
                id="editMerekName"
                placeholder="Masukkan nama merek HP"
                required
              />
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn-cancel"
                onclick="closeModal('modalEdit')"
              >
                Batal
              </button>
              <button type="submit" class="btn-submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Delete Confirmation -->
    <div id="modalDelete" class="modal">
      <div class="modal-content modal-small">
        <div class="modal-header">
          <h3>Konfirmasi Hapus</h3>
          <span class="close" onclick="closeModal('modalDelete')">&times;</span>
        </div>
        <div class="modal-body">
          <p class="delete-message">
            Apakah Anda yakin ingin menghapus merek ini?
          </p>
          <div class="modal-footer">
            <button
              type="button"
              class="btn-cancel"
              onclick="closeModal('modalDelete')"
            >
              Batal
            </button>
            <button
              type="button"
              class="btn-delete-confirm"
              onclick="confirmDelete()"
            >
              Hapus
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/modal.js"></script>
  </body>
</html>
