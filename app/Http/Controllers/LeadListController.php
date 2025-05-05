<?php

namespace App\Http\Controllers;
use App\Models\LeadList;
use App\Models\Project;
use Illuminate\Http\Request;

class LeadListController extends Controller
{
    // Menampilkan daftar leads
    public function index()
    {
        $leads = LeadList::all(); // Mengambil semua data leads dari database
        return view('lead-list', compact('leads')); // Menampilkan view lead-list dengan data leads
    }

    // Menampilkan form untuk tambah lead baru
    public function create()
    {
        return view('lead-create'); // Menampilkan form untuk tambah lead baru
    }

    // Menyimpan data lead baru
    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
            'nama' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        // Simpan data ke database
        LeadList::create([
            'nama' => $request->nama,
            'kontak' => $request->kontak,
            'status' => $request->status
        ]);

        // Redirect kembali ke halaman lead-list dengan pesan sukses
        return redirect()->route('leads.index')->with('success', 'Lead berhasil ditambahkan.');
    }

    // Proses lead menjadi customer
    public function proses($id)
    {
        $lead = LeadList::findOrFail($id);
        
        // Redirect ke halaman layanan dengan ID lead
        return redirect()->route('layanan.show', ['id' => $lead->id]);
    }

    public function project($id)
    {
        $lead = LeadList::findOrFail($id);
        
        // Redirect ke halaman layanan dengan ID lead
        return redirect()->route('project.show', ['id' => $lead->id]);
    }

    public function proyekStore(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'status' => 'required',
            'project_name' => 'required',
            'project_desc' => 'required',
            'project_type' => 'required',
        ]);
    
        Project::create([
            'nama_lead' => $request->nama,
            'kontak' => $request->kontak,
            'status' => $request->status,
            'nama_proyek' => $request->project_name,
            'deskripsi' => $request->project_desc,
            'jenis' => $request->project_type,
        ]);
    
        return redirect()->route('projects.index')->with('success', 'Proyek berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $lead = LeadList::findOrFail($id);
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead berhasil dihapus.');
    }

}
