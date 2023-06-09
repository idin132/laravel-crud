<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    use HasFactory;
    protected $table = "cast";
    protected $fillable = [
        'id',
        'nama',
        'umur',
        'bio'
    ];

    public function peran()
    {
        return $this->belongsToMany(peran::class);
    }
}