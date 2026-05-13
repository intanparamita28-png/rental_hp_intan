<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar HP - RENTPHONE</title>

    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />
    <link rel="stylesheet" href="../css/all-books.css" />
    <link rel="stylesheet" href="../css/footer.css" />

    

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
  </head>

  <body>
    <div id="header-placeholder"></div>

    <div class="container">
      <
    <!-- SIDEBAR -->
    <?php include '../components/sidebar.php'; ?>
      <!-- MAIN CONTENT -->

      <main class="main-content">
        <!-- SEARCH -->

        <div class="search-section">
          <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari HP disini" />
          </div>

          <button class="filter-btn">
            <i class="fas fa-filter"></i>
            <span>FILTER</span>
          </button>
        </div>

        <!-- LIST HP -->

        <section class="book-section">
          <div class="section-header">
            <h2>Semua HP :</h2>

            <button
              class="btn-add show-all"
              onclick="window.location.href = 'add-hp.php'"
            >
              <i class="fas fa-plus"></i> Tambah HP
            </button>
          </div>

          <div class="book-grid">
            <!-- 1 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-1.jpg" />
                <h3>iPhone 15 Pro</h3>
                <p>128GB • Natural Titanum</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 2 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-2.jpg" />
                <h3>iPhone 14</h3>
                <p>256GB • Midnight</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 3 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-3.jpg" />
                <h3>iPhone 12</h3>
                <p>128GB • Black</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 4 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-4.jpg" />
                <h3>iPhone 11</h3>
                <p>64GB • black</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 5 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-5.jpg" />
                <h3>iPhone 13</h3>
                <p>256GB • pink</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 6 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-6.jpg" />
                <h3>iPhone 11</h3>
                <p>256GB • White</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 7 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-7.jpg" />
                <h3>iPhone 15</h3>
                <p>256GB • Black</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>

            <!-- 8 -->
            <a href="detail-hp.php">
              <div class="book-card">
                <img src="../assets/img/image-8.jpg" />
                <h3>iPhone 16</h3>
                <p>256GB • Black</p>
                <button class="btn-borrow">
                  <i class="fas fa-mobile-alt"></i> SEWA
                </button>
              </div>
            </a>
          </div>
        </section>

        <footer class="page-footer">
          <p>© 2025 RENTPHONE - Penyewaan HP</p>
        </footer>
      </main>
    </div>
  </body>
</html>
