<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function announcer()
   {
       return view('adminview.announce', [
           'title' => 'Announcerss'
       ]);
   } 
}
