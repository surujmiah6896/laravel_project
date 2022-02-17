<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function relationToproduct()
    {
        //relation ono to one Inventory to Product table
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function relationTocolor()
    {
        //relation ono to one Inventory to Color table
        return $this->hasOne(Variation::class, 'id', 'color_id');
    }

    public function relationTosize()
    {
        //relation ono to one Inventory to size table
        return $this->hasOne(Size::class, 'id', 'size_id');
    }
}
