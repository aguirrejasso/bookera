<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class FindBookController extends Controller
{
    public function index(Category $categoria)
    {
        $books = $categoria->books;
        return view('book.catalagoBook', compact('books'));

    }

    public function show(Request $request)
    {
       $books = Book::where('name', $request->search)->get();
       return view('book.catalagoBook', compact('books'));

    }



}
