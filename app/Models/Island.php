<?php

namespace App\Models;

use App\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Island extends Model
{
    use HasFactory;

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
