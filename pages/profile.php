<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <script src="../js/header.js"></script>
    <script src="../js/components.js" defer></script>

    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/profile.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>
  <body>
    <!-- HEADER -->
    <?php include '../components/header.php'; ?>

    <div class="container">
      <!-- SIDEBAR -->
      <?php include '../components/sidebar.php'; ?>

      <!-- Main Content -->
      <main class="main-content">
        <div class="profile-container">
          <div class="profile-header">
            <h2>Profilku</h2>
          </div>

          <div class="profile-card">
            <h3 class="profile-title">Edit Profil:</h3>

            <form id="profileForm" class="profile-form">
              <!-- Photo Upload Section -->
              <div class="photo-upload-section">
                <div class="photo-preview">
                  <div class="photo-circle" id="photoCircle">
                    <i class="fas fa-camera"></i>
                  </div>
                  <img id="photoPreview" src="" alt="Profile Photo" style="display: none;" />
                </div>
                <div class="photo-upload-info">
                  <label for="photoUpload" class="upload-label">
                    upload new photo
                  </label>
                  <input
                    type="file"
                    id="photoUpload"
                    accept="image/jpeg,image/png"
                    style="display: none;"
                  />
                  <p class="upload-hint">
                    At least 800x800 px recommended.<br />
                    JPG and PNG is allowed
                  </p>
                </div>
              </div>

              <!-- Form Fields -->
              <div class="form-grid">
                <div class="form-group-profile">
                  <label for="namaLengkap">Nama Lengkap</label>
                  <input
                    type="text"
                    id="namaLengkap"
                    placeholder="Masukan teks"
                    value="Admin User"
                  />
                </div>

                <div class="form-group-profile">
                  <label for="namaPanggilan">Nama Panggilan</label>
                  <input
                    type="text"
                    id="namaPanggilan"
                    placeholder="Masukan teks"
                    value="Admin"
                  />
                </div>

                <div class="form-group-profile">
                  <label for="password">Password</label>
                  <div class="password-input-wrapper">
                    <input
                      type="password"
                      id="password"
                      placeholder="Masukan teks"
                    />
                    <button type="button" class="toggle-password" onclick="togglePassword()">
                      <i class="fas fa-eye" id="toggleIcon"></i>
                    </button>
                  </div>
                </div>

                <div class="form-group-profile">
                  <label for="role">Role</label>
                  <input
                    type="text"
                    id="role"
                    placeholder="Masukan teks"
                    value="Administrator"
                    readonly
                  />
                </div>
              </div>

              <!-- Description -->
              <div class="form-group-profile full-width">
                <label for="deskripsi">Deskripsi</label>
                <textarea
                  id="deskripsi"
                  rows="5"
                  placeholder="Masukan teks"
                ></textarea>
              </div>

              <!-- Action Buttons -->
              <div class="form-actions">
                <button type="button" class="btn-cancel-profile" onclick="cancelEdit()">
                  <i class="fas fa-times"></i> Batalkan
                </button>
                <button type="submit" class="btn-save-profile">
                  <i class="fas fa-save"></i> Simpan Perubahan
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

    <!-- Success Modal -->
    <div id="successModal" class="modal-profile">
      <div class="modal-content-profile">
        <div class="modal-body-profile">
          <div class="success-icon">
            <i class="fas fa-check-circle"></i>
          </div>
          <h3>Berhasil!</h3>
          <p>Profil Anda telah berhasil diperbarui.</p>
          <button class="btn-ok-profile" onclick="closeSuccessModal()">OK</button>
        </div>
      </div>
    </div>

    <script src="../js/profile.js"></script>
  </body>
</html>
