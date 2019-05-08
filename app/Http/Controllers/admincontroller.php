<?php

namespace App\Http\Controllers;

use App\Book;
use Order;
use User;
use Auth;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\BookImage;
use App\Mail\sendbookmail;
use Mail;

class admincontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


//    public function index()
//    {
//        return view('auth.admin');
//    }

    public function book_index()
    {
        return view('book_form');
    }

    public function book_store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'author_name' => 'required','regex:/^[A-Za-z\s-_]+$/',
            'filename' => 'required|mimes:doc,pdf,docx,zip|max:50000',
            'imagefile' => 'required',
            'book_price' => 'required|numeric|min:1|digits_between: 1,3',
            'filed' => 'required',
            'description' => 'required','regex:/^[A-Za-z\s-_]+$/'
        ]);

        if ($request->hasfile('filename')) {
            $file = $request->file('filename');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path('books'), $name);
        }
        if ($request->hasfile('imagefile')) {
            $file = $request->file('imagefile');
            $image = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $image);
        }
        $data = new \App\Book;
        $data->title = $request->post('title');
        $data->author_name = $request->post('author_name');
        $data->book_price = $request->post('book_price');
        $data->filed = $request->post('filed');
        $data->description = $request->post('description');
        $data->filename = $name;
        $data->imagefile = $image;
        $data->save();
        return redirect('form')->with('success', 'Book Upload');
    }

    public function book_show(Request $request)
    {
        $data = \App\Book::where('title', 'LIKE', '%' . $request->search . '%')
            ->orwhere('author_name', 'LIKE', '%' . $request->search . '%')
            ->orwhere('filed', 'LIKE', '%' . $request->search . '%')
            ->paginate(10);
        return view('book_details', compact('data'));
    }

    public function edit($id)
    {
        $data = \App\Book::find($id);
        return view('book_edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = \App\Book::find($id);
        $data->title = $request->input('title');
        $data->author_name = $request->input('author_name');
        $data->book_price = $request->input('book_price');
        $data->filed = $request->input('filed');
        $data->description = $request->input('description');
        $data->save();
        return redirect('bookdetails')->with('success', 'Edit the Book');
    }


    public function destroy($id)
    {
        $book = \App\Book::find($id);
        $book->delete();
        return redirect('bookdetails')->with('success', 'Book has been  deleted');
    }


    public function order_details(Request $request)
    {
        $users = \App\Order::with('order')->orderBy('id', 'DESC')
            ->paginate(10);

        return view('auth.admin', compact('users'));

//        $order= \App\Order::with('order')->get();
//        $order=json_decode(json_encode($order));
//        echo '<pre>'; print_r($order);die();

    }

    public function order_edit($id)
    {
        $data = \App\Order::find($id);
        return view('order_edit', compact('data', '$id'));
    }

    public function order_update(Request $request, $id)
    {

        $order = \App\Order::find($id);
        $order->status = $request->input('status');
        $order->save();
        return redirect('admin')->with('success', 'Order is Pay');
    }

    public function order_view($order_id)
    {

        $orderdetalis = \App\Order::with('order')->where('id', $order_id)->first();
        $orderdetalis = json_decode(json_encode($orderdetalis));
//     echo '<pre>'; print_r($orderdetalis);die();
        $user_id = $orderdetalis->user_id;
        $userdetalis = \App\User::where('id', $user_id)->first();
        return view('order_view', compact('orderdetalis', 'userdetalis'));

//     return view('order_view');
    }

    public function send_book($order_id){

        $orderdetalis = \App\Order::with('order')->where('id', $order_id)->first();
        $orderdetalis = json_decode(json_encode($orderdetalis));
        $user_id = $orderdetalis->user_id;
        $userdetalis = \App\User::where('id', $user_id)->first();
        return view('send_book', compact('orderdetalis', 'userdetalis'));
    }
    public function comment_show(){

        $comment= \App\Comments::all();
        return view('admin_comment',compact('comment'));
    }

    public function comment_replay($id){

        $coment = \App\Comments::find($id);
        $coment->delete();
        return redirect('admin_comment')->with('success', 'Comment has been  deleted');
}



    public function mail_page()
    {
        return view('send_book_mail');


    }
    public function  send_book_email(Request $request){

//        dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'filename' => 'required|mimes:doc,pdf,docx,zip|max:50000',
            'description' => 'required','regex:/^[A-Za-z\s-_]+$/'
        ]);
//
            $data= array(
                'email' =>  $request->email,
                'name' => $request->name,
                'description' => $request->description,
                'filename' =>  $request->filename,
            );

        Mail::to($data->email)->send(new sendbookmail($data));
        return back()->with('success', 'Send order ');
    }

}