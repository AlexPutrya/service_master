<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Repairs extends Controller {
    // key => DB column "repairs"
    const SEARCH = ['id' => '№ ремонта',
                    'client' => 'ФИО клиента',
                    'phone' => 'Телефон',
                    'device' => 'Название устройства'
    ];
    
    // делаем запрос и возвращаем данные с предустановленым статусом
    public function index(Request $request){
        $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '=', 'В обработке')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
        return view('pages/repairs', ['search' => self::SEARCH,'repairs' => $repairs, 'status' => 'В обработке']);
    }

    //  получаем данные из формы и возвращаем отфильтрованый результат
    public function filter(Request $request){
        $status = $request->input('status');
        $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '=', $status)
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
        return view('pages/repairs', ['search' => self::SEARCH,'repairs' => $repairs, 'status' => $status]);
    }

    public function search(Request $request){
        $status = $request->input('status');
        $request_word = $request->input('search');
        $db_col = $request->input('search_filter');

        $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '=', $status)
                        ->where($db_col, 'like', '%'.$request_word.'%')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
        return view('pages/repairs', ['search' => self::SEARCH,'repairs' => $repairs, 'status' => $status]);
    }
}