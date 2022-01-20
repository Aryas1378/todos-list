<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validateWithBag('user',[
            'username' => 'required|string|max:255',
            'password' => 'required|min:4',
        ]);

       User::query()->create([
           'name' => $validatedData['username'],
           'password' => bcrypt($validatedData['password']),
       ]);
       $message = "signed up successfully";
       return redirect()->back()->with('jsAlert', $message);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
                return redirect()->intended('todo-list');
        }
        return back();
    }
}
