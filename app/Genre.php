<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes;
    protected $table = 'genres';
    protected $fillable = ['id', 'title', 'created_at', 'updated_at'];
}
