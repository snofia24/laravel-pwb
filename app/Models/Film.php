<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $tble = 'films';
    protected $fillable = [
        'judul',
        'ringkasan',
        'tahun',
        'poster',
        'genre_id',
    ];

    public function genre()
    {
        return $this->hasMany('App\Models\Genre','id','genre_id');
    }

    public function peran()
    {
        return $this->hasMany(peran::class);
    }
}
