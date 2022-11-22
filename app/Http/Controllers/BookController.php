<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function szerzonkent()
    {
        $books = DB::table('books as c')
            ->select('author', 'title')->groupBy('author')->orderBy('title');
        return $books;
    }
}
