<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class Namespace1 extends Controller
{
    public function Namespace1 ()
    {
        return view('namespace1');
    }
    public function ok ($id='', $name='') 
    {
      echo $id. ' ' . $name;
    }
}
