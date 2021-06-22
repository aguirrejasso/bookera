<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('admin')->except(['show']);
    }

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
    public function show(Book $libro)
    {
        $related = $libro->category->books;
        
        return view('book.singleBook', compact('libro', 'related'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $libro)
    {
        $categories = Category::all();

        return view('book.formBook', compact('libro', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $libro)
    {
        $request->validate([
            'name'        => 'required|string',
            'author'      => 'required|string',
            'language'    => 'required|string',
            'description' => 'required|string',
            'edition'     => 'required|integer',
            'year'        => 'required|integer',
            'image'       => 'image',
            'price'       => 'required|numeric',
            'category_id' => 'required|numeric',
            'sales'       => 'numeric'
            
        ]);

        if($request->hasFile('image'))
        {
            Storage::delete($libro->image);

            $image = $request->file('image');
            $fileName = time() . $image->getClientOriginalName();
            $destination = public_path('img/books');
            $request->image->move($destination, $fileName);

            $libro->image = $fileName;
        }

        if($request->has('name')){
            $libro->name = $request->name;
        }

        if($request->has('author')){
            $libro->author = $request->author;
        }

        if($request->has('language')){
            $libro->language = $request->language;
        }

        if($request->has('description')){
            $libro->description = $request->description;
        }

        if($request->has('edition')){
            $libro->edition = $request->edition;
        }

        if($request->has('year')){
            $libro->year = $request->year;
        }

        if($request->has('price')){
            $libro->price = $request->price;
        }

        if($request->has('category_id')){
            $libro->category_id = $request->category_id;
        }

        if($request->has('sales')){
            $libro->sales = $request->sales;
        }


        $libro->save();

        

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $libro)
    {
        $libro->delete();

        return redirect()->route('book.index');
    }
    
}
