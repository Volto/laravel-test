<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        if (! auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
        return redirect('/');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
