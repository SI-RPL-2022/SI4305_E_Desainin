<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('loginview.login', [
            'title' => 'Login'
        ]);
    }

    public function collections()
    {
        return view('collections', [
            'title' => 'Portfolio Collections',
            'posts' => Post::latest()->get()
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'title' => 'Profile',
            'avatar' => User::where('avatar', auth()->user()->avatar)->get()
        ]);
    }

    public function update_profile(Request $request)
    {
        $user = $request->post('id');

        $validatedData = $request->validate([
            'avatar' => 'image|file|max:5120',
            'username',
            'phonenumber',
            'password' => 'confirmed'
        ]);

        if($request->file('image')) {
            $validatedData['avatar'] = $request->file('image')->store('post-images');
        }

        $inputedData = User::find($user);
        $inputedData->avatar = $validatedData['avatar'];
        $inputedData->username = $validatedData['username'];
        $inputedData->phonenumber = $validatedData['phonenumber'];
        $inputedData->password = Hash::make($validatedData['password']);
        $inputedData->save();

        return redirect('/profile')->with('success', 'Data Berhasil di Update!');
    }

    // public function homepage_user()
    // {
    //     return view('homepage', [
    //         'title' => 'Home'
    //     ]);
    // }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/admin')->with('admin', 'Successfully login as admin. Welcome back!');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/');}
        }

        return back()->with('failed', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function admin()
    {
        return view('adminview.index', [
            'title' => 'Home'
        ]);
    }
}
