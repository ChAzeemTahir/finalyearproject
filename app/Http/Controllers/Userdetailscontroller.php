<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class Userdetailscontroller extends Controller
{
    public function index(Request $request)
    {
        $users = \App\User::with('relation')
            ->where('name', 'LIKE', '%' . $request->search . '%')
            ->orwhere('email', 'LIKE', '%' . $request->search . '%')
            ->orwhere('role_id', 'LIKE', '%' . $request->search . '%')
            ->paginate(10);
        return view('index', compact('users'));
    }

    public function edit($id)
    {
        $users = \App\User::find($id);
        return view('user_edit', compact('users', 'id'));
    }

    public function update(Request $request, $id)
    {
        $users = \App\User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->save();
        return redirect('userdetails')->with('success', 'User Data Updata successfully');
    }

    public function destroy($id)
    {
        $users = \App\User::find($id);
        $users->delete();
        return redirect('userdetails')->with('delete', 'Dlete Data Success');
    }
}
