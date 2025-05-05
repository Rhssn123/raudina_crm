<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Lead Baru</title>
  <link rel="stylesheet" href="/asset/lead-create.css" />
</head>
<body>
  <div class="container">
    <h1>Tambah Lead Baru</h1>
    <form method="POST" action="{{ route('leads.store') }}">
      @csrf
      <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" required>
      </div>

      <div class="form-group">
        <label>Kontak:</label>
        <input type="text" name="kontak" required>
      </div>

      <div class="form-group">
        <label>Status:</label>
        <select name="status" required>
          <option value="Baru">Baru</option>
          <option value="Follow-Up">Follow-Up</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
</html>
