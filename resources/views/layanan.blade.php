<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Proyek Lead</title>
  <link rel="stylesheet" href="/asset/layanan.css" />
</head>
<body>
  <div class="container">
    
    <h2>Proses Lead Menjadi Customer</h2>

    <div class="lead-details">
      <h3>Informasi Lead</h3>
      @if($layanan)
        <div class="lead-info">
          <p><strong>Nama Lead:</strong> {{ $layanan->nama }}</p>
          <p><strong>Kontak:</strong> {{ $layanan->kontak }}</p>
          <p><strong>Status:</strong> {{ $layanan->status }}</p>
        </div>
      @else
        <p>Lead tidak ditemukan.</p>
      @endif
    </div>

    <form action="{{ route('leads.proyekStore', $layanan->id) }}" method="POST">
      @csrf

      <!-- Hidden inputs -->
      <input type="hidden" name="nama" value="{{ $layanan->nama }}">
      <input type="hidden" name="kontak" value="{{ $layanan->kontak }}">
      <input type="hidden" name="status" value="{{ $layanan->status }}">

      <!-- Project Form -->
      <label for="projectName">Nama Proyek</label>
      <input type="text" name="project_name" id="projectName" required/>

      <label for="projectDesc">Deskripsi Proyek</label>
      <textarea name="project_desc" id="projectDesc" required></textarea>

      <label for="projectType">Jenis Proyek</label>
      <select name="project_type" id="projectType" required>
        <option value="">-- Pilih Jenis --</option>
        <option value="Instalasi">Instalasi</option>
        <option value="Pemeliharaan">Pemeliharaan</option>
        <option value="Upgrade">Upgrade</option>
      </select>

      <button type="submit">Ajukan Proyek</button>
    </form>
  </div>
</body>
</html>
