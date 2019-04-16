<?php

namespace App\Http\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RepairsModel {

    public static function getAll(){
        return $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
    }

    public static function getNotComplayted(){
        return $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '!=', 'complayted')
                        ->where('status', '!=', 'canceled')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
    }

    public static function getWithStatus(String $status){
        return $repairs = DB::table('repairs')
                ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                ->where('owner', '=', Auth::id())
                ->where('status', '=', $status)
                ->orderBy('register_date', 'DESC')
                ->orderBy('id', 'DESC')
                ->get();
    }

    public static function searchAll($db_col, $request_word){
        return $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where($db_col, 'like', '%'.$request_word.'%')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
    }
    
    public static function searchNotComplayted($db_col, $request_word){
        return $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '!=', 'complayted')
                        ->where('status', '!=', 'canceled')
                        ->where($db_col, 'like', '%'.$request_word.'%')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
    }

    public static function searchWithStatus($status, $db_col, $request_word){
        return $repairs = DB::table('repairs')
                        ->select('id', 'register_date', 'status', 'client', 'phone', 'device', 'defect')
                        ->where('owner', '=', Auth::id())
                        ->where('status', '=', $status)
                        ->where($db_col, 'like', '%'.$request_word.'%')
                        ->orderBy('register_date', 'DESC')
                        ->orderBy('id', 'DESC')
                        ->get();
    }
}