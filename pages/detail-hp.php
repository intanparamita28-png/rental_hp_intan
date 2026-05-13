<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail HP - RENTPHONE</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <script src="../js/header.js"></script>
    <script src="../js/components.js" defer></script>

    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/detail-book.css" />
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
        <div class="detail-container">
          <div class="detail-card">
            <!-- Left Section - HP Cover -->
            <div class="book-cover-section">
              <div class="book-cover">
                <img src="../assets/img/image-15.jpg" alt="HP Cover" />
              </div>
              <button class="btn-available">TERSEDIA</button>
            </div>

            <!-- Right Section - HP Details -->
            <div class="book-details-section">
              <h1 class="book-title">iPhone 13 Pro</h1>

              <div class="author-info">
                <div class="author-avatar">
                  <i class="fas fa-tags"></i>
                </div>
                <span class="author-name">Apple</span>
              </div>

              <div class="book-description">
                <p>
                  iPhone 13 Pro hadir dengan layar Super Retina XDR ProMotion
                  6.1 inci, chip A15 Bionic, dan sistem kamera Pro tiga lensa
                  dengan kemampuan macro photography.
                </p>
              </div>

              <div class="book-info">
                <div class="info-row">
                  <span class="info-label">RAM</span>
                  <span class="info-value">6GB</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Storage</span>
                  <span class="info-value">128GB</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Warna</span>
                  <span class="info-value">Sierra Blue</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Tahun Rilis</span>
                  <span class="info-value">2021</span>
                </div>
                <div class="info-row">
                  <span class="info-label">Harga Sewa</span>
                  <span class="info-value">Rp 75.000 / hari</span>
                </div>
              </div>

              <div class="book-tags">
                <div class="tag-group">
                  <span class="tag-label">Kategori</span>
                  <div class="tags">
                    <span class="tag">Flagship</span>
                    <span class="tag">Pro Series</span>
                  </div>
                </div>
                <div class="tag-group">
                  <span class="tag-label">Kondisi</span>
                  <div class="tags">
                    <span class="tag">Sangat Baik</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
