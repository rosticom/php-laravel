<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use SoftDeletes;
    protected $table = 'sizes';
    protected $fillable = ['id', 'width', 'height', 'created_at', 'updated_at'];
}
