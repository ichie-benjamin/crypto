<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function message($user,$msg,$sub){
        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $data = [
            'message' => $msg,
            'user' => $user
        ];

        $beautymail->send('mails.message', ['data' => $data], function($message) use ($user, $sub)
        {
            $message
                ->from(env('MAIL_FROM_ADDRESS'))
                ->to($user->email, $user->username)
                ->subject($sub);
        });
    }
}
