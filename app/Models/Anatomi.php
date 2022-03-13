<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anatomi extends Model
{
    use HasFactory;

    protected $fillable = [
        'struktur',
        'penelitian_id',
        'detail',
    ];

    public function penelitian()
    {
        return $this->belongsTo(Penelitian::class);
    }
}
