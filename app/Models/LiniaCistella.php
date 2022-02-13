<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiniaCistella extends Model
{
    use HasFactory;

    public function cistella(){
        return $this->belongsTo(Cistella::class);
    }

    public function producte(){
        return $this->belongsTo(Producte::class);
    }
}
