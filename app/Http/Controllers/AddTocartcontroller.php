<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Session;

class AddTocartcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function cart()
    {

        return view('add_cart');
    }

    public function addToCart($id)
    {
        $product = Book::find($id);
        if (!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [
                $id => [
                    "id"=>$product->id,
                    "name" => $product->title,
                    "quantity" => 1,
                    "price" => $product->book_price,
                    "photo" => $product->imagefile
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        $cart[$id] = [
            "name" => $product->title,
            "quantity" => 1,
            "price" => $product->book_price,
            "photo" => $product->imagefile
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {

        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
//            session()->with('success', 'Cart updated successfully');
            return redirect()->back()->with('success', 'Product Update successfully!');

        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
//            return redirect('add_cart')->with('success', 'Book Upload');
        }
    }

}
