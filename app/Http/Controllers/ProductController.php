<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Data statis produk
        $products = [
            [
                'id' => 1,
                'name' => 'Internet 20 Mbps',
                'description' => 'Kecepatan 20 Mbps untuk penggunaan rumahan',
                'price' => 'Rp 300.000/bulan',
            ],
            [
                'id' => 2,
                'name' => 'Internet 50 Mbps',
                'description' => 'Kecepatan 50 Mbps untuk rumah dan usaha kecil',
                'price' => 'Rp 500.000/bulan',
            ],
        ];

        return view('product', compact('products'));
    }

    public function create()
    {
        return view('product-create'); // Ganti dengan view form untuk tambah produk
    }

    public function destroy($id)
    {
        // Logika untuk menghapus produk (pada aplikasi nyata, bisa dilakukan pengecekan atau penghapusan dari database)
        return redirect()->route('product')->with('success', 'Produk berhasil dihapus.');
    }

    public function show($id)
    {
        // Tampilkan detail produk berdasarkan ID
        return view('product-detail', compact('id'));
    }
}
