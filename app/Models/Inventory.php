<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inventory extends Model
{
    use HasFactory;

    public function relationTocolor(){
        //relation ono to one Inventory to Color table
        return $this->hasOne(Variation::class, 'id','color_id');
    }

    public function relationTosize()
    {
        //relation ono to one Inventory to Color table
        return $this->hasOne(Size::class, 'id', 'size_id');
    }
}
