<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function kpi()
    {
        return $this->hasMany(Kpi::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 
}