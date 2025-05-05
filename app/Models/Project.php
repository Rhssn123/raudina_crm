<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lead',
        'kontak',
        'status',
        'nama_proyek',
        'deskripsi',
        'jenis',
    ];
}
