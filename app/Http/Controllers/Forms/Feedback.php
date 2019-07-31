<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class Feedback extends Controller {
    
    public function index(Request $request){
            // if authorizated get email and name and put in feedback form
           return view('forms/feedback');
    }

    public function send(Request $request){
        $title = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = config('mail.from.address');
        $comment = $request->comment;
        // Mail::to($toEmail)->send(new FeedbackMail($title, $comment));
        return redirect('feedback')->with('send_status', "Сообщение успешно отправлено");
    }

}