<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link rel="stylesheet" href="css/auth.css" />
</head>
<body>
    <div class="card">
        <h2>Daftar</h2>
        <form>
          <div class="form-group">
            <label for="fullname">Nama Lengkap</label>
            <input type="text" id="fullname" name="fullname" placeholder="Contoh: Intan" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="nama@email.com" required />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required />
          </div>
          <div class="form-group">
            <label for="confirm">Konfirmasi Password</label>
            <input type="password" id="confirm" name="confirm" placeholder="Ulangi password" required />
          </div>
          <button type="submit" class="btn">Buat Akun</button>
        </form>
        <div class="footer-link">
          Sudah punya akun? <a href="index.php">Login di sini</a>
        </div>
      </div>
</body>
</html>