<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Semester extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id'
    ];
    protected $table = 'semesters';

    public function mahasiswa(){
        return $this->belongsTo(mahasiswa::class);
    }
}
