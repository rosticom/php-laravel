<?php

namespace App;

trait Selectable
{
    public static function getSelectList($value = 'created_by', $key = 'id')
    {
        return static::latest()->owned()->pluck($value, $key);
    }
}

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    use Selectable;

        protected $table = 'books';
        protected $fillable = ['id', 'title', 'price', 'author', 'genres', 'pages', 'publisher', 'year', 'hardcover', 'size_id', 'created_at', 'updated_at', 'created_by'];


        public function scopeOwned($query){
//        return $query->where('created_by', 'Rostyslav');
        }
}


