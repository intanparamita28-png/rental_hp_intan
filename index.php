<?php
include 'koneksi.php';

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users 
    WHERE email='$email' AND password='$password'");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        header("Location: pages/dashboard.php");
        exit;
    } else {
        echo "<script>alert('Email atau Password salah!')</script>";
    }
}
?>

<!DOCTYPE php>
<php lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/auth.css">
</head>

<body>

<!-- BACKGROUND -->
<div class="particles">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>

<div class="card">

    <h2>Login</h2>

    <form method="POST">

        <div class="form-group">
            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Masukkan email Anda"
                required
            >
        </div>

        <div class="form-group">
            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Masukkan password"
                required
            >
        </div>

        <button type="submit" name="login" class="btn">
            Masuk
        </button>

    </form>

    <div class="footer-link">
        Belum punya akun?
        <a href="register.php">Daftar sekarang</a>
    </div>

</div>

</body>
</html>