<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Root extends Controller {
    
    public function __invoke(Request $request){

           return view('pages/root');
    }
}