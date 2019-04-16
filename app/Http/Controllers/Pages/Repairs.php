<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\StatusList;
use App\Http\Models\RepairsModel;

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
                        ->where('status', '=', 'in_work')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
        return view('pages/repairs', [
            'search' => self::SEARCH,
            'repairs' => $repairs, 
            'status' => 'in_work', 
            'status_list' => StatusList::$filter_status_list, 
            'status_color' => StatusList::$status_color
        ]);
    }

    //  получаем данные из формы и возвращаем отфильтрованый результат
    public function filter(Request $request){
        $status = $request->input('status');

        switch($status){
            case 'all':
                $repairs = RepairsModel::getAll();
            break;
            case 'not_complayted':
                $repairs = RepairsModel::getNotComplayted();
            break;
            default:
                $repairs = RepairsModel::getWithStatus($status);            
        }
        return view('pages/repairs', [
            'search' => self::SEARCH,
            'repairs' => $repairs,
            'status' => $status,
            'status_list' => StatusList::$filter_status_list, 
            'status_color' => StatusList::$status_color
        ]);
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
        return view('pages/repairs', [
            'request_word' => $request_word,
            'search_filter' => self::SEARCH[$db_col],
            'search' => self::SEARCH,
            'repairs' => $repairs,
            'status' => $status,
            'status_list' => StatusList::$filter_status_list, 
            'status_color' => StatusList::$status_color
        ]);
    }
}