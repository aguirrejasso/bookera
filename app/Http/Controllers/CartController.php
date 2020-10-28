<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $carrito, $quantity = 1)
    {
        $e = Cart::where('user_id', Auth::user()->id)->where('book_id', $carrito->id)->exists();

        
        if($e == true){
            $exist = Cart::where('user_id', Auth::user()->id)->where('book_id', $carrito->id)->get();
            $n = $exist[0]->quantity += $quantity;
            Cart::where('user_id', Auth::user()->id)->where('book_id', $carrito->id)->update(['quantity' => $n]);
        }else{
            Cart::create([
            'user_id' => Auth::user()->id,
            'book_id' => $carrito->id,
            'quantity' => $quantity
            ]);
        }
        
        $carts = Auth::user()->carts;

        return view('cart.cart', compact('carts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
