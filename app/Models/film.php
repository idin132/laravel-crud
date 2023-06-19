<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;
    protected $table = "film";
    protected $fillable = [
        'id',
        'judul',
        'ringkasan',
        'tahun',
        'poster',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }

    public function kritik()
    {
        return $this->belongsToMany(kritik::class);
    }
}
