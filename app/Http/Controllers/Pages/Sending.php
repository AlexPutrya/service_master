<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class Sending extends Controller {
    
    public function __invoke(){

           return view('pages/sending');

    }
}