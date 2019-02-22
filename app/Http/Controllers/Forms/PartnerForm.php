<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerForm extends Controller {
    
    public function __invoke(Request $request){

           return view('forms/partner_form');
    }
}