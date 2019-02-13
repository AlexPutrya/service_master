<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Partners extends Controller {
    
    public function __invoke(Request $request){

           return view('pages/partners');
    }
}