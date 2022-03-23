<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;
    public function fiscalYear()
    {
        return $this->hasMany(FiscalYear::class);
    }
    public function quarter()
    {
        return $this->hasMany(Quarter::class);
    }
}
