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
                ->from('support@cryptoassest.com', 'Crypto Assets')
//                ->to('benjaminchukwudi0@gmail.com', 'Benjamin')
                ->to($user->email, $user->username)
                ->subject($sub);
        });
    }

    function getCoinRate($coinId)
    {
        $url = 'https://min-api.cryptocompare.com/data/price?fsym=' . $coinId . '&tsyms=USD';
        $crypto = file_get_contents($url);
        $usd = json_decode($crypto, true);
        $cryptoRate = $usd['USD'];
        return $cryptoRate;
    }
}
