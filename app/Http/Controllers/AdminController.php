<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // $books=Book::all();
    
        return view('adminPanel');
       
    }
}
