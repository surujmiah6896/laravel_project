<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class catagory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['catagory_name', 'catagory_photo', 'updated_by'];
    // protected $fillable = ['updated_by'];
}
