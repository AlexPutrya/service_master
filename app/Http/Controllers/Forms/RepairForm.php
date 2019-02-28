<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RepairForm extends Controller {

    public function userId(){
        return Auth::id();
    }

    public function index(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // $userId = Auth::id();
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
                'owner' => $this->userId()
            ]);
            return redirect()->route('repairs');
        }else{
            return view('forms/repair_form');
        }
    }

    public function edit(Request $request, $id){
        // если вызов происходит методом get, загружем форму
        if($request->isMethod('post')){
            //получаем данные из request и обновляем запись в бд
        }else{
            $repair = DB::table('repairs')
                        ->where('owner', '=', $this->userId())
                        ->where('id', '=', $id)
                        ->first();
            return view('forms/repair_form', ['repair' => $repair]);
            // получаем данные по id из бд и отправляем в view
        }
    }
}