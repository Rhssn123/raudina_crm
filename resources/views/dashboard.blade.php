<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - CRM PT. Smart</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" />
  <link rel="stylesheet" href="/asset/dashboard.css" />
  <script defer src="/asset/navbar.js"></script>
</head>
<body>
  <div class="background"></div>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-container">
      <div class="nav-logo">CRM PT. Smart</div>
      <button class="hamburger" id="hamburger">&#9776;</button>
      <ul class="nav-links" id="nav-links">
        <li><a href="/lead-list">Lead</a></li>
        <li><a href="/layanan">Produk</a></li>
        <li><a href="/project">Project</a></li>
      </ul>
    </div>
  </nav>

  <!-- Dashboard -->
  <main class="dashboard-container">
    <h1>👋 Selamat Datang</h1>
    <p class="subtitle">Kelola data pelanggan dan produk dengan efisien.</p>
    <div class="card-grid">
      <a href="/lead-list" class="card">
        <h2>Lead</h2>
        <p>List Calon Customer</p>
      </a>
      <a href="/product" class="card">
        <h2>Produk</h2>
        <p>Master Layanan Internet</p>
      </a>
      <a href="/project" class="card">
        <h2>Project</h2>
        <p>Manajemen Proyek</p>
      </a>
    </div>
    <footer class="footer">
      &copy; 2025 PT. Smart - CRM System
    </footer>
  </main>
</body>
</html>
