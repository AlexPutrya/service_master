<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileForm extends Controller {
    
    public function __invoke(Request $request){
        $userId = Auth::id();
        if($request->isMethod('post')){
            // $status = $request->input('status');
            // $repairs = DB::table('repairs')
            //                 ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
            //                 ->where('owner', '=', $userId)
            //                 ->where('status', '=', $status)
            //                 ->orderBy('register_date', 'DESC')
            //                 ->orderBy('id', 'DESC')
            //                 ->get();
            return view('forms/profile_form');
        }else{
            // $repairs = DB::table('repairs')
            //                 ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
            //                 ->where('owner', '=', $userId)
            //                 ->where('status', '=', 'В обработке')
            //                 ->orderBy('register_date', 'DESC')
            //                 ->orderBy('id', 'DESC')
            //                 ->get();
            return view('forms/profile_form');
        }
    }
}