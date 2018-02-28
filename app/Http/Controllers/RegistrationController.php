<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create', 'store');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

        ]);
        auth()->login($user);
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit()
    {
        $user = User::where('id', auth()->id())->first();

        return view('registration.edit', compact('user'));
    }

    public function update()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        User::where('id', auth()->id())->update([

            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))

        ]);
        return redirect('/');
    }

    public function destroy($id)
    {
        //
    }
}
