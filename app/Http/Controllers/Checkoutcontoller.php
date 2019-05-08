<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use Mail;
use App\Mail\sendmail;
use App\Orderitems;
class Checkoutcontoller extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
    }
   public function index(){

       Mail::to(Auth::user()->email)->send(new sendmail());
       return view('checkout');
   }
   public function Oder_complete(Request  $request  ){

//       data insert

       $total = 0;
       if(session('cart'))
       foreach (session('cart') as $id => $details) {
           $total += $details['price'] * $details['quantity'];
       }
       $oder = new \App\order;
       $oder->user_id = Auth::user()->id;
       $oder->email = Auth::user()->email;
       $oder->total = $total;
       $oder->status = 'panding';
       $oder->save();

       $cart = Session::get('cart');  //all items in cart
       $products = [];
       if(session('cart'))
       foreach ($cart as $data) {  //for each of the item
           $row = [];
           $row['order_id'] = $oder->id;
           $row['product_name'] = $data['name'];
           $row['product_price'] = $data['price'];
           $row['product_qty'] = $data['quantity'];

           $products[] = $row;  //add row
       }
       Orderitems::insert($products);

       Session::forget('cart');

       Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       Stripe\Charge::create ([
           "amount" => $total * 100,
           "currency" => "usd",
           "source" => $request->stripeToken,
           "description" => "Test payment from itsolutionstuff.com."
       ]);

       return redirect('/')->with('success', 'Thank You For Oder!');

   }
    public function payment(){

        return view('payment');
    }

}

