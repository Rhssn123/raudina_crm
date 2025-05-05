<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>List Produk - CRM PT Smart</title>
  <link rel="stylesheet" href="/asset/product.css" />
</head>
<body>
  <div class="container">
    <div class="dashboard-link">
        <a href="/dashboard" class="btn-dashboard">Kembali ke Dashboard</a>
    </div>
    
    <h1>List Produk (Layanan Internet)</h1>

    <div class="top-bar">
      <input type="text" placeholder="🔍 Cari produk..." />
      <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk Baru</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $key => $product)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $product['name'] }}</td>
          <td>{{ $product['description'] }}</td>
          <td>{{ $product['price'] }}</td>
          <td>
            <button class="btn small">Edit</button>
            <form action="{{ route('products.destroy', $product['id']) }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn small danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
            <a href="{{ route('products.detail', $product['id']) }}" class="btn small success">Detail</a>
          </td>
        </tr>
        @endforeach
      </tbody>      
    </table>
  </div>

</body>
</html>
