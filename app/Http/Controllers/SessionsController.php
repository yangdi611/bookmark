<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest', [
          'only' => ['create']
      ]);
    }
    //
    public function create()
    {
        return view('sessions.create');
    }

     public function store(Request $request)
    {
       $credentials = $this->validate($request, [
           'email' => 'required|email|max:255',
           'password' => 'required'
       ]);

      if (Auth::attempt($credentials, $request->has('remember'))) {
        session()->flash('success', 'Welcome back!');
        return redirect()->intended(route('users.show', [Auth::user()]));
       } else {
        session()->flash('danger', 'Sorry, your Email and password don\'t match');
        return redirect()->back();
       }
    }

        public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You have successfully loged out!');
        return redirect('login');
    }
}
