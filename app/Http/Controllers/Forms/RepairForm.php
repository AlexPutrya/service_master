<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RepairForm extends Controller {
    
    public function index(Request $request){
        if($request->isMethod('post')){
            $userId = Auth::id();
        }else{
            
            return view('forms/repair_form');
        }
    }

    public function update(Request $request, $id){
        if($request->isMethod('post')){
            //получаем данные из request и обновляем запись в бд
        }else{
            // получаем данные по id из бд и отправляем в view
        }
    }
}