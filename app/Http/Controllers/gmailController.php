<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;

class gmailController extends Controller
{
    public function messages()
    {
        $messages = LaravelGmail::message()->subject('test')->unread()->preload()->all();
        $count= strlen($messages);
        
        foreach ($messages as $message) {
            // $body = $message->getHtmlBody();
            $subject = $message->getSubject();
            $body = $message->getPlainTextBody();

        }
        // return view('msg');
        // dd($messages);
        // dd($messages);
        return view('msg')->with (compact('messages','body','count'));

    }

    public function detailsMail($id){

        $messages = LaravelGmail::message()->get( $id );
        dd($messages);

    }
}
