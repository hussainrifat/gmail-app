<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use Dacastro4\LaravelGmail\Services\Message\Attachment;


class gmailController extends Controller
{
    public function messages()
    {
        $messages = LaravelGmail::message()->subject('test')->unread()->preload()->all();
        $count = strlen($messages);
        // $attachment = new Attachment;


        foreach ($messages as $message) {
            $subject = $message->getSubject();
            $body = $message->getPlainTextBody();
            $attachment= LaravelGmail::message()->hasAttachment()
            ;
        }
        // return view('msg');
        // dd($messages);
        // dd($messages);
        return view('inbox')->with(compact('messages', 'body', 'count','attachment'));
    }

    public function detailsMail($id)
    {

        $mail = LaravelGmail::message()->get($id);
        $messages = LaravelGmail::message()->subject('test')->unread()->preload()->all();
        $count = strlen($messages);
        // $attachment= $messages->getAttachmentsWithData();
        // dd($mail);
        return view('gmail.mail')->with(compact('mail', 'count'));
    }
}
