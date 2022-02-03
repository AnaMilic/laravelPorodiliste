<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Doktor;

class Beba extends Model
{
    use HasFactory;

    public function doktor()
    {
        return $this->belongsTo(Doktor::class);
    }
}
