<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  
    public function index(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $user = User::where('name', $name)->first();

        if ($user) {
            if ($password == $user->password) {

                return redirect('home')->with('success', 'Logged in successfully.');
            }
        }

        else{
            return redirect('login')->with('error', 'Invalid login credentials.');
        }
    }
   
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    
    public function show(login $login)
    {
        //
    }


    public function edit(login $login)
    {
        //
    }

  
    public function update(Request $request, login $login)
    {
        //
    }

    public function destroy(login $login)
    {
        //
    }
}