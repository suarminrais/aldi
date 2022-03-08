<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manfaat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function penelitians()
    {
        return $this->belongsToMany(Penelitian::class);
    }
}
