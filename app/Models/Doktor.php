<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Porodiliste;
use App\Models\Beba;

class Doktor extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'iskustvo',
        'porodiliste_id'
    ];

    public function porodiliste()
    {
        return $this->belongsTo(Porodiliste::class);
    }

    public function bebe()
    {
        return $this->hasMany(Beba::class);
    }
}
