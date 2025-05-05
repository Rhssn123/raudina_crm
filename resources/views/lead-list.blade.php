<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>List Calon Customer - CRM PT Smart</title>
  <link rel="stylesheet" href="/asset/lead-list.css" />
</head>
<body>

  <div class="container">
    
    <h1>List Calon Customer (Lead)</h1>

    <div class="top-bar">
      <input type="text" placeholder="🔍 Cari nama atau status..." />
      <a href="{{ route('leads.create') }}" class="btn btn-primary">Tambah Lead Baru</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kontak</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($leads as $index => $lead)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $lead->nama }}</td>
            <td>{{ $lead->kontak }}</td>
            <td>
              <span class="badge 
                {{ strtolower($lead->status) == 'baru' ? 'new' : 
                   (strtolower($lead->status) == 'follow-up' ? 'follow' : '') }}">
                {{ $lead->status }}
              </span>
            </td>
            <td>
              <button class="btn small">Edit</button>
              <form action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn small danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
              </form>
              <a href="{{ route('leads.proses', $lead->id) }}" class="btn small success">Proses</a>
            </td>
          </tr>
        @endforeach
      </tbody>      
    </table>
  </div>
</body>
</html>
