<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Repairs extends Controller {
    
    public function __invoke(Request $request){
            $userId = Auth::id();
            $repairs = DB::table('repairs')
                            ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                            ->where('owner', '=', $userId)
                            ->orderBy('register_date', 'DESC')
                            ->orderBy('id', 'DESC')
                            ->get();
            return view('pages/repairs', ['repairs' => $repairs]);
    }
}