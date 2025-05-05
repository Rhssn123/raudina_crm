<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Halaman Project - Proses Lead</title>
  <link rel="stylesheet" href="/asset/project.css">
</head>
<body>
  <div class="container">
    <h1>Daftar Proyek dari Lead</h1>

    <div class="dashboard-link">
      <a href="/dashboard" class="btn-dashboard">Kembali ke Dashboard</a>
    </div>
    
    <table>
      <thead>
        <tr>
          <th>Nama Lead</th>
          <th>Nama Proyek</th>
          <th>Status Approval</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($projects as $project)
          <tr>
            <td>{{ $project->nama_lead }}</td>
            <td>{{ $project->nama_proyek }}</td>
            <td class="status">{{ $project->status }}</td>
            <td>
              @if($project->status == 'Menunggu Approval')
                <form action="{{ route('projects.approval', $project->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn-approve">Ajukan Approval</button>
                </form>
              @elseif($project->status == 'Disetujui')
                <form action="{{ route('projects.toCustomer', $project->id) }}" method="POST">
                  @csrf
                  <button type="submit" class="btn-process">Proses Menjadi Customer</button>
                </form>
              @else
                <span class="note">Menunggu di approval Manager</span>
              @endif
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4">Belum ada data proyek.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    
  </div>
</body>
</html>
