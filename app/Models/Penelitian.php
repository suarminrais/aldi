<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
        'tempat',
        'file',
        'description',
        'status',
        'user_id',
    ];

    protected $with = [
        'user'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function strukturs()
    {
        return $this->hasMany(Struktur::class);
    }

    public function manfaats()
    {
        return $this->belongsToMany(Manfaat::class);
    }

    public function anatomis()
    {
        return $this->belongsToMany(Anatomi::class);
    }
}
