<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;

class book_controller extends Controller
{
	public function getBooks(book $books){

		$books = book::all();
	   // dd($books);

	}
}



