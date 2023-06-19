<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritik extends Model
{
    use HasFactory;
    protected $table = "kritik";
    protected $fillable = [
        'id',
        'user_id',
        'film_id'
    ];

    public function film()
    {
        return $this->belongsToMany(film::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
