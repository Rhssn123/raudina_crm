<?php

namespace App\Http\Controllers;
use App\Models\LeadList;


use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return view('layanan'); 
    }

    public function show($id)
    {
        $layanan = LeadList::findOrFail($id); // Ambil data layanan berdasarkan ID
        return view('layanan', compact('layanan'));
    }
}
