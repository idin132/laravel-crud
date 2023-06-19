<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table = "profile";
    protected $fillable = [
        'id',
        'umur',
        'bio',
        'alamat',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
