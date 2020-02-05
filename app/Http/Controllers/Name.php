<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Name extends Controller
{
    public function name ()
    {
        return view('name');
    }
    public function created ()
    {
        return view('created');
    }
    public function listed ()
    {
        return view('listed');
    }
    public function user ($id = "")
    {
        echo $id;
    }
}
