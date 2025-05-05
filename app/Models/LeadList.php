<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadList extends Model
{
    use HasFactory;
    
    protected $table = 'leads';
    protected $fillable = ['nama', 'kontak', 'status'];
}
