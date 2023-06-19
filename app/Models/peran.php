<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    use HasFactory;
    protected $table = "peran";
    protected $fillable = [
        'id',
        'film_id',
        'cast_id',
        'nama'
    ];

    public function cast()
{
    return $this->belongsToMany(cast::class);
}

}
