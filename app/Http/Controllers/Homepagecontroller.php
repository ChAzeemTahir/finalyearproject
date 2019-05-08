<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Orderitems;
use Comments;
use User;


class Homepagecontroller extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function book(Request $request)
    {

        $data = \App\Book::where('title', 'LIKE', '%' . $request->search . '%')
            ->orwhere('author_name', 'LIKE', '%' . $request->search . '%')
            ->orwhere('filed', 'LIKE', '%' . $request->search . '%')
            ->paginate(9);
        if ($request->ajax()) {
            return view('Book_Pagination', compact('data'));
        }
        $orderdetalis = \App\Order::with('order')->where('user_id', Auth::id())->get();

//        $orderdetalis = json_decode(json_encode($orderdetalis));
        return view('welcome', compact('data','orderdetalis'));
    }



    public function view($id)
    {
        $data = \App\Book::find($id);
        $orderdetalis = \App\Order::with('order')->where('user_id', Auth::id())->get();


        return view('view', compact('data','orderdetalis', 'id'));
    }
    public function  model(){

        return view('mdel');
    }

    public function order_details()
    {
        $users = \App\Orderitems::with()
            ->paginate(10);
        return view('welcome',compact('users'));
    }

    public function comment_index(){

        $comment= \App\Comments::all();
        $orderdetalis = \App\Order::with('order')->where('user_id', Auth::id())->get();

        return view('comment',compact('comment','orderdetalis'));
    }

    public function comment(Request $request){

        $this->validate($request, [
            'comment' => 'required|min:15|max:50|string',
        ]);
        $data = new \App\Comments;
        $data->name = Auth::user()->name;
        $data->email = Auth::user()->email;
        $data->comment = $request->post('comment');
        $data->save();
        return redirect('comment_page');
    }

    public function order_history(){

        $books = \App\Order::with('order')->where('user_id', Auth::id())->get();
        return view('add_cart')->with('books', $books);
    }


}
