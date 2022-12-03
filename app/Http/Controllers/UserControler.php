<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserControler extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function findAll()
    {
        $users = User::all();
        return view('user.list', compact('users'));
    }

    public function findById($id)
    {
        $user = User::find($id);
        return view('user.index', compact('user'));
    }

    
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'userName' => 'required|string',
            'zipCode' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',

        ]);

        User::create($input);

        return Redirect::route('user.list');
    }

    public function update(Request $request)
    {
        $input = $request->validate([
            'id'=> 'required|string',
            'name' => 'required|string',
            'userName' => 'required|string',
            'zipCode' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',

        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->userName = $input['userName'];
        $user->zipCode = $input['zipCode'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        
        $user->save();

        return Redirect::route('user.list');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return Redirect::route('user.list');
    }
}
