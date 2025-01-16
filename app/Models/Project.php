<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = [
        'nama',
        'foto',
        'status',
        'tujuan',
        'deskripsi',
        'harga'
    ];
    
}
