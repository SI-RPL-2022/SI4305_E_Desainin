<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registerview.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phonenumber' => 'required|min:10|max:13',
            'password' => 'required|min:5|max:255',
            'agreement' => 'accepted'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful. Please Login');
    }
}