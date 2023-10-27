<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'skripsis';

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }

    public function semester(){
        return $this->belongsTo(semester::class);
    }
}
