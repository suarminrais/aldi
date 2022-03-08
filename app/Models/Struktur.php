<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    protected $fillable = [
        'struktur',
        'penelitian_id',
        'kadar',
    ];

    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class);
    }
}
