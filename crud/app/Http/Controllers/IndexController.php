<?php

namespace App\Http\Controllers;
use App\Models\Personnel;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        
        return view('index')->with([
            'data' => Personnel::all()
        ]);
    }
}
