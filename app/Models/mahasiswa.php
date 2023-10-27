<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class mahasiswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [
        'id'
    ];
    protected $table = 'mahasiswas';

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'password' => 'hashed',
    ];

    public function dosenwali(){
        return $this->belongsTo(dosenwali::class);
    }
}
