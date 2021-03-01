<?php

namespace App\Http\Controllers;

use App\Mail\NewUser;
use App\Models\Identity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function codes(){
        $users = User::all();
        foreach ($users as $user){
            $user->code = rand(100,999).$user->id;
            $user->save();
        }
        $ids = Identity::all();
        foreach ($ids as $id){
            $id->front = '';
            $id->back = '';
            $id->status = 0;
            $id->save();
        }
        return 'Done';
    }

    public function testMail(){
        $user = User::latest()->first();
//        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
//        $beautymail->send('mails.newuser', ['user' => $user], function($message)
//        {
//            $message
//                ->from('noreply@cryptoassets.com')
//                ->to(setting('admin_email','admin@cryptoassets.com'), 'Admin')
//                ->subject('New User Account');
//        });
//        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
//        $data = [
//            'message' => '$200 has been credited to your account pls be notified that trading starts now',
//            'user' => $user
//        ];
//        $beautymail->send('mails.message', ['data' => $data], function($message)
//        {
//            $message
//                ->from('noreply@cryptoassets.com')
//                ->to(setting('admin_email','admin@cryptoassets.com'), 'Admin')
//                ->subject('New Message From CryptoAssets');
//        });

        if(setting('suspend_trade_mail')){
            $this->message($user,'New $200 has been credited to your account pls be notified that trading starts now','New Message From CryptoAssets');

//        $beautymail->send('mails.newuser', $user);
//        Mail::to(setting('admin_email','admin@cryptoassets.com'))->send(new NewUser($user));
            return 'done';
        }

        return 'cant';


    }

    public function index()
    {
      $all_traders = [
            ['name' => '@saudagarfx', 'id' => 'sau-2333', 'days' => '20 days', 'pro' => '996.40 % / 408 USD', 'equity' => '136.29 USD'],
            ['name' => '@hottie', 'id' => 'gutt-5609', 'days' => '30 days', 'pro' => '896.40 % / 608 USD', 'equity' => '326.39 USD'],
            ['name' => '@cartake', 'id' => 'cad-1222', 'days' => '112 days', 'pro' => '696.40 % / 4608 USD', 'equity' => '3156.00 USD'],
            ['name' => '@gotradi', 'id' => 'cak-50233', 'days' => '23 days', 'pro' => '900.40 % / 498 USD', 'equity' => '516.79 USD'],
            ['name' => '@matnij', 'id' => 'kat-1121', 'days' => '40 days', 'pro' => '799.40 % / 518 USD', 'equity' => '455.77 USD'],
            ['name' => '@aisyas', 'id' => 'yas-0012', 'days' => '32 days', 'pro' => '898.40 % / 538 USD', 'equity' => '711 USD'],
            ['name' => '@jobsede', 'id' => 'sede-3111', 'days' => '21 days', 'pro' => '955.40 % / 438 USD', 'equity' => '499.67 USD'],
            ['name' => '@emidos', 'id' => 'dos-9882', 'days' => '23 days', 'pro' => '911.40 % / 438 USD', 'equity' => '512 USD'],
            ['name' => '@protrader', 'id' => 'pro-1011', 'days' => '20 days', 'pro' => '916.40 % / 401 USD', 'equity' => '536.11 USD'],
            ['name' => '@uniquegee', 'id' => 'ique-50443', 'days' => '10 days', 'pro' => '890.40 % / 102 USD', 'equity' => '76.29 USD']
        ];
      shuffle($all_traders);
       $traders = array_slice($all_traders, 0, 5);
        return view('home', compact('traders'));
    }

    public function about()
    {
        return view('about1');
    }
    public function withdrawal()
    {
        return view('withdrawal');
    }

    public function deposit()
    {
        return view('deposit');
    }

       public function fags()
    {
        return view('fags');
    }
       public function verification()
    {
        return view('verification');
    }

       public function options()
    {
        return view('options');
    }
       public function trades()
    {
        return view('trades');
    }
    public function calender()
    {
        return view('calender');
    }
    public function bonus()
    {
        return view('bonus');
    }



    public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }
}
