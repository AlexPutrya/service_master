<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Feedback extends Controller {
    
    public function __invoke(Request $request){
            // if authorizated get email and name and put in feedback form
           return view('forms/feedback');
    }
}