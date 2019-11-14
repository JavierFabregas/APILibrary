<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
	protected $table = 'books';
<<<<<<< HEAD
    protected $fillable = ['id','title','description'];
=======
    protected $fillable = ['title','description'];
>>>>>>> 03476387fd0d7773625fb60f8d51d748165b1ace
}
