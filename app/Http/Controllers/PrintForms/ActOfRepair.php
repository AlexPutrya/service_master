<?php

namespace App\Http\Controllers\PrintForms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActOfRepair extends Controller {

    public function __invoke(Request $request, $id){
        $repair = DB::table('repairs')
                        ->where('owner', '=', Auth::id())
                        ->where('id', '=', $id)
                        ->first();
        $profile = DB::table('profiles')
                            ->where('owner', '=',Auth::id())
                            ->first();
        return view('print_forms/act_of_repair', ['repair' => $repair, 'profile' => $profile]);
    }
}