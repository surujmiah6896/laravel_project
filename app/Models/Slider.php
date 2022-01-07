<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slider_caption',
        'sale_off_price',
        'slider_photo',
        'created_by',
        'updated_by',
        'deleted_by',

    ];
}
