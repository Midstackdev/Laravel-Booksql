<?php

namespace App;

use App\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $gaurded = [];

    public function books() 
    {
    	return $this->hasMany(Book::class);
    }
}
