<?php
include '../koneksi.php';

$search = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

$query = mysqli_query($conn, "
    SELECT * FROM hp
    WHERE nama_hp LIKE '%$search%'
");
?>

<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Dashboard - RENTPHONE</title>

    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/sidebar.css" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <?php include '../components/sidebar.php'; ?>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- SEARCH -->
        <div class="search-section">

            <form method="GET" class="search-bar">

                <i class="fas fa-search"></i>

                <input
                    type="text"
                    name="search"
                    placeholder="Cari HP disini"
                    value="<?php echo $search; ?>"
                />

                <button type="submit" class="filter-btn">
                    Cari
                </button>

            </form>

        </div>

        <!-- BANNER -->
        <div class="banner">

            <div class="banner-content">
                <h1>AYO CARI HANDPHONE FAVORIT KALIAN</h1>
            </div>

        </div>

        <!-- HP POPULER -->
        <section class="book-section">

            <div class="section-header">
                <h2>DAFTAR HANDPHONE :</h2>
            </div>

            <div class="book-grid">

                <?php
                while($data = mysqli_fetch_array($query)) {
                ?>

                <a href="../pages/detail-hp.php?id=<?php echo $data['id']; ?>">

                    <div class="book-card">

                        <img src="../assets/img/<?php echo $data['gambar']; ?>" />

                        <h3><?php echo $data['nama_hp']; ?></h3>

                        <p>
                            RAM <?php echo $data['ram']; ?>
                            •
                            Storage <?php echo $data['storage']; ?>
                        </p>

                        <button class="btn-borrow">

                            <i class="fas fa-mobile-alt"></i>

                            <?php echo $data['status']; ?>

                        </button>

                    </div>

                </a>

                <?php } ?>

            </div>

        </section>

        <!-- FOOTER -->
        <footer class="page-footer">
            <p>© 2026 Aplikasi Penyewaan Handphone</p>
        </footer>

    </main>

</div>

</body>
</html>