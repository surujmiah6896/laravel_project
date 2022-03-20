<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    public function relationTocountry()
    {
        //relation ono to one Inventory to Color table
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
}
