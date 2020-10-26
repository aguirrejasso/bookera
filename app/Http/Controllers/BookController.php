<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('book.listBook', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();

        return view('book.formBook', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'        => 'required|string',
            'author'      => 'required|string',
            'language'    => 'required|string',
            'description' => 'required|string',
            'edition'     => 'required|integer',
            'year'        => 'required|integer',
            'image'       => 'required|image',
            'price'       => 'required|numeric',
            'category_id' => 'required|numeric'
            
        ]);

        //Upload image
        
        $image = $request->file('image');
        $fileName = time() . $image->getClientOriginalName();
        $destination = public_path('img/books');
        $request->image->move($destination, $fileName);

        //Save

        $book = Book::create([
            'name'        => $request->name,
            'author'      => $request->author,
            'language'    => $request->language,
            'description' => $request->description,
            'edition'     => $request->edition,
            'year'        => $request->year,
            'image'       => $fileName,
            'price'       => $request->price,
            'stock'       => $request->stock,  
            'category_id' => $request->category_id,          
        ]);

        $categories = Category::all();

        return view('book.formBook', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
