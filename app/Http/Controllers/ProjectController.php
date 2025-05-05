<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('project', compact('projects'));
    }

    // public function show($id)
    // {
    //     $layanan = LeadList::findOrFail($id); // Ambil data layanan berdasarkan ID
    //     return view('project', compact('project'));
    // }
}
