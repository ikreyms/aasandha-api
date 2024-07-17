<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
