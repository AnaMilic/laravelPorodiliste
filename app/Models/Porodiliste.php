<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doktor;

class Porodiliste extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'grad'
    ];

    public function doktori()
    {
        return $this->hasMany(Doktor::class);
    }
}
