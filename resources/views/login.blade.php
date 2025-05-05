<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - CRM PT. Smart</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/asset/login.css" />
</head>
<body>
  <div class="background"></div>
  <div class="login-card">
    <h2>Login CRM PT. Smart</h2>
    <form action="{{ route('register.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required />
      </div>
      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required />
      </div>
      <button type="submit">Daftar</button>
    </form>
    <p class="footer">&copy; 2025 PT. Smart - CRM System</p>
  </div>
</body>
</html>
