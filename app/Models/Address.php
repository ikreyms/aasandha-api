<?php

namespace App\Models;

use App\Models\Island;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    public function island()
    {
        return $this->belongsTo(Island::class);
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
