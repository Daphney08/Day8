<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Redirect;

class UpdateController extends Controller

{

    
    protected $request;
    
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }

    public function index($id)
    {
        return view('update')->with([
            'data' => Personnel::find($id)
        ]);
        
    }
    public function save( $id)
    {
        Personnel::find($id)->update(

            $this->request->except('_token')

        );

        return Redirect::route('home');
    }
}