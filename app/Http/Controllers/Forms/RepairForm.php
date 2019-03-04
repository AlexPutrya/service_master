<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RepairForm extends Controller {

    // get => Возвращаем пустую форму
    // post => Сохраняем дынные заполненные пользователем, и пренаправляем
    public function index(Request $request){
        if($request->isMethod('post')){
            DB::table('repairs')->insert([
                'register_date' => $request->register_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
                'client' => $request->client,
                'phone' => $request->phone,
                'device' => $request->device,
                'serial' => $request->serial,
                'complect' => $request->complect,
                'defect' => $request->defect,
                'owner' => Auth::id()
            ]);
            return redirect()->route('repairs');
        }else{
            return view('forms/repair_form');
        }
    }

    // get => Получем данные по id и заполняем форму для редактирования
    // post => Получаем id и параметры и обновлям в бд
    public function edit(Request $request, $id){
        if($request->isMethod('post')){
            DB::table('repairs')
                        ->where('owner', '=', Auth::id())
                        ->where('id', '=', $id)
                        ->update([
                            'end_date' => $request->end_date,
                            'status' => $request->status,
                            'client' => $request->client,
                            'phone' => $request->phone,
                            'device' => $request->device,
                            'serial' => $request->serial,
                            'complect' => $request->complect,
                            'defect' => $request->defect
                        ]);
            return redirect()->route('repairs');
        }else{
            $repair = DB::table('repairs')
                        ->where('owner', '=', Auth::id())
                        ->where('id', '=', $id)
                        ->first();
            return view('forms/repair_form', ['repair' => $repair]);
        }
    }
}