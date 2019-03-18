<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileForm extends Controller {
    
    // get => проверяем по id пользователя есть ли данные профиля, загружаем если есть, если нет создаем пустой профиль
    // post => редактируем данные профиля
    public function __invoke(Request $request){
        $userId = Auth::id();
        if($request->isMethod('post')){
            DB::table('profiles')
                        ->where('owner', '=', Auth::id())
                        ->update([
                            'org_name' => $request->org_name,
                            'adress' => $request->adress,
                            'phone' => $request->phone,
                            'email' => $request->email,
                            'drfo_code' => $request->drfo_code,
                            'bank_name' => $request->bank_name,
                            'mfo' => $request->mfo,
                            'bank_acount_number' => $request->bank_acount_number,
                        ]);
            return redirect()->route('profile'); 
        }else{
            $profile = DB::table('profiles')
                            ->select('id', 'org_name', 'adress', 'phone', 'email', 'drfo_code', 'bank_name', 'mfo', 'bank_acount_number')
                            ->where('owner', '=', $userId)
                            ->get();
                if(count($profile) == 0){
                    DB::table('profiles')->insert([
                        'owner' => Auth::id()
                    ]);
                    return redirect()->route('profile');  
                }
            return view('forms/profile_form',  ['profile' => $profile[0]]);
        }
    }
}