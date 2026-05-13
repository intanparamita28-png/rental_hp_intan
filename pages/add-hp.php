
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah HP - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <script src="../js/header.js"></script>
    <script src="../js/components.js" defer></script>
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/add-book.css" />

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
        <div class="add-book-container">
          <!-- Back Button & Title -->
          <div class="book-page-header">
            <button class="btn-back-book" onclick="window.history.back()">
              <i class="fas fa-arrow-left"></i>
            </button>
            <h2>Tambah HP Baru</h2>
          </div>

          <!-- Form Card -->
          <div class="book-form-card">
            <form id="addHpForm">
              <!-- Foto Upload Section -->
              <div class="cover-upload-section">
                <div class="cover-preview">
                  <div class="cover-placeholder" id="coverPlaceholder">
                    <i class="fas fa-mobile-alt"></i>
                    <p>Upload Foto HP</p>
                  </div>
                  <img
                    id="coverPreview"
                    src=""
                    alt="Foto HP Preview"
                    style="display: none"
                  />
                </div>
                <div class="cover-upload-info">
                  <label for="coverUpload" class="upload-cover-label">
                    <i class="fas fa-upload"></i> Pilih Foto
                  </label>
                  <input
                    type="file"
                    id="coverUpload"
                    accept="image/jpeg,image/png"
                    style="display: none"
                  />
                  <p class="upload-cover-hint">
                    Rekomendasi: 800x800 px<br />
                    Format: JPG, PNG (Max 5MB)
                  </p>
                </div>
              </div>

              <!-- Form Grid -->
              <div class="book-form-grid">
                <div class="book-form-group">
                  <label for="namaHp"
                    >Nama HP <span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="namaHp"
                    placeholder="Contoh: iPhone 13 Pro"
                    required
                  />
                </div>

                <div class="book-form-group">
                  <label for="merek"
                    >Merek <span class="required">*</span></label
                  >
                  <input
                    type="text"
                    id="merek"
                    placeholder="Contoh: Apple, Samsung, Xiaomi"
                    required
                  />
                </div>

                <div class="book-form-group">
                  <label for="ram">RAM</label>
                  <input type="text" id="ram" placeholder="Contoh: 8GB" />
                </div>

                <div class="book-form-group">
                  <label for="storage">Storage</label>
                  <input type="text" id="storage" placeholder="Contoh: 128GB" />
                </div>

                <div class="book-form-group">
                  <label for="warna">Warna</label>
                  <input
                    type="text"
                    id="warna"
                    placeholder="Contoh: Midnight Black"
                  />
                </div>

                <div class="book-form-group">
                  <label for="tahunRilis">Tahun Rilis</label>
                  <input
                    type="number"
                    id="tahunRilis"
                    placeholder="2024"
                    min="2000"
                    max="2100"
                  />
                </div>

                <div class="book-form-group">
                  <label for="hargaSewa">Harga Sewa / Hari (Rp)</label>
                  <input
                    type="number"
                    id="hargaSewa"
                    placeholder="50000"
                    min="0"
                  />
                </div>

                <div class="book-form-group">
                  <label for="stok"
                    >Stok HP <span class="required">*</span></label
                  >
                  <input
                    type="number"
                    id="stok"
                    placeholder="5"
                    min="0"
                    required
                  />
                </div>
              </div>

              <!-- Merek & Kategori -->
              <div class="book-form-grid">
                <div class="book-form-group">
                  <label for="kategori">Kategori</label>
                  <select id="kategori" multiple size="5">
                    <option value="Flagship">Flagship</option>
                    <option value="Mid-Range">Mid-Range</option>
                    <option value="Budget">Budget</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Kamera">Kamera</option>
                  </select>
                  <small>Tekan Ctrl untuk pilih lebih dari satu</small>
                </div>

                <div class="book-form-group">
                  <label for="kondisi">Kondisi</label>
                  <select id="kondisi" multiple size="5">
                    <option value="Baru">Baru</option>
                    <option value="Sangat Baik">Sangat Baik</option>
                    <option value="Baik">Baik</option>
                    <option value="Cukup">Cukup</option>
                  </select>
                  <small>Tekan Ctrl untuk pilih lebih dari satu</small>
                </div>
              </div>

              <!-- Description -->
              <div class="book-form-group full-width">
                <label for="deskripsi">Deskripsi HP</label>
                <textarea
                  id="deskripsi"
                  rows="6"
                  placeholder="Masukkan deskripsi atau spesifikasi HP..."
                ></textarea>
              </div>

              <!-- Action Buttons -->
              <div class="book-form-actions">
                <button
                  type="button"
                  class="btn-cancel-book"
                  onclick="window.history.back()"
                >
                  <i class="fas fa-times"></i> Batalkan
                </button>
                <button type="submit" class="btn-submit-book">
                  <i class="fas fa-save"></i> Simpan HP
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

    <script src="../js/add-book.js"></script>
  </body>
</html>
