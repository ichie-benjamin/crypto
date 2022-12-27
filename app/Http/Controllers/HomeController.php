<?php

namespace App\Http\Controllers;

use App\Mail\NewUser;
use App\Models\Deposit;
use App\Models\Identity;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{


    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function getCoin(){
        return $this->getCoinRate('BTC');
    }

    public function updateAccount(){
//        if (!env('APP_DEBUG')){
//            return 'Cant run on live';
//        }
        Carbon::createFromFormat('Y-m-d H:i:s', '')->format('Y-m-d');
        $items = [
            [
            'dm' => 'sk.gateway7@gmail.com',
            'deposits' => [
                [
                'amount' => 893,
                'created_at' => '2022-09-04'
                ],[
                'amount' => 43687,
                'created_at' => '2022-10-19'
                ],
            ]
                ],
            [
                'dm' => 'pike2642@gmail.com',
                'deposits' => [
                    [
                        'amount' => 317,
                        'created_at' => '2022-11-07'
                    ],[
                        'amount' => 300,
                        'created_at' => '2022-11-10'
                    ],[
                        'amount' => 325,
                        'created_at' => '2022-11-10'
                    ],
                ]
            ],
            [
                'dm' => 'beguincraig7@gmail.com',
                'deposits' => [
                    [
                        'amount' => 1058,
                        'created_at' => '2022-11-04'
                    ],[
                        'amount' => 771,
                        'created_at' => '2022-11-16'
                    ],[
                        'amount' => 4895,
                        'created_at' => '2022-12-15'
                    ],
                ]
            ],
            [
                'dm' => 'rodbaughman@gmail.com',
                'deposits' => [
                    [
                        'amount' => 6900,
                        'created_at' => '2022-09-10'
                    ],[
                        'amount' => 9800,
                        'created_at' => '2022-09-22'
                    ],[
                        'amount' => 3680,
                        'created_at' => '2022-09-13'
                    ],[
                        'amount' => 4796,
                        'created_at' => '2022-11-01'
                    ],[
                        'amount' => 9800,
                        'created_at' => '2022-11-16'
                    ],[
                        'amount' => 11961,
                        'created_at' => '2022-11-28'
                    ],[
                        'amount' => 22102,
                        'created_at' => '2022-12-03'
                    ],[
                        'amount' => 8710,
                        'created_at' => '2022-12-06'
                    ],[
                        'amount' => 10416,
                        'created_at' => '2022-12-09'
                    ],
                ]
            ],
            [
                'dm' => 'dwdemaris@gmail.com',
                'deposits' => [
                    [
                        'amount' => 750,
                        'created_at' => '2021-12-10'
                    ],[
                        'amount' => 8291,
                        'created_at' => '2021-12-16'
                    ],[
                        'amount' => 988,
                        'created_at' => '2022-01-14'
                    ],[
                        'amount' => 1760,
                        'created_at' => '2022-12-16'
                    ],
                ]
            ],
            ];

        foreach ($items as $item){
            $user = User::whereEmail($item['dm'])->first();
            if($user){
                foreach ($item['deposits'] as $deposit){
                    $new_deposit = new Deposit();
                    $new_deposit->user_id = $user->id;
                    $new_deposit->status = 1;
                    $new_deposit->amount = $deposit['amount'];
                    $new_deposit->payment_method = "Bitcoin";
                    $new_deposit->proof = "proof";
                    $new_deposit->created_at = Carbon::createFromFormat('Y-m-d', $deposit['created_at'])->format('Y-m-d');


                    $user->balance = $user->balance + $deposit['amount'];
                    $new_deposit->save();
                }

                $user->save();
            }
        }

        return "done seeding";

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
            ['name' => '@saudagarfx', 'id' => 'sau-2333', 'days' => '20 days', 'pro' => '996.40 % / 408 USD', 'equity' => '136,000 USD'],
            ['name' => '@hottie', 'id' => 'gutt-5609', 'days' => '30 days', 'pro' => '896.40 % / 608 USD', 'equity' => '326,000 USD'],
            ['name' => '@cartake', 'id' => 'cad-1222', 'days' => '112 days', 'pro' => '696.40 % / 4608 USD', 'equity' => '315,600 USD'],
            ['name' => '@gotradi', 'id' => 'cak-50233', 'days' => '23 days', 'pro' => '900.40 % / 498 USD', 'equity' => '516,000 USD'],
            ['name' => '@matnij', 'id' => 'kat-1121', 'days' => '40 days', 'pro' => '799.40 % / 518 USD', 'equity' => '455,000 USD'],
            ['name' => '@aisyas', 'id' => 'yas-0012', 'days' => '32 days', 'pro' => '898.40 % / 538 USD', 'equity' => '711,000 USD'],
            ['name' => '@jobsede', 'id' => 'sede-3111', 'days' => '21 days', 'pro' => '955.40 % / 438 USD', 'equity' => '499,000 USD'],
            ['name' => '@emidos', 'id' => 'dos-9882', 'days' => '23 days', 'pro' => '911.40 % / 438 USD', 'equity' => '512,000 USD'],
            ['name' => '@protrader', 'id' => 'pro-1011', 'days' => '20 days', 'pro' => '916.40 % / 401 USD', 'equity' => '536,000 USD'],
            ['name' => '@uniquegee', 'id' => 'ique-50443', 'days' => '10 days', 'pro' => '890.40 % / 102 USD', 'equity' => '760,000 USD']
        ];
      shuffle($all_traders);
       $traders = array_slice($all_traders, 0, 5);
        $all_plans = [
            ['name' => 'Savings', 'days' => '20 days', 'min' => '100,000', 'max' => '199,000', 'c' => '31'],
            ['name' => 'Retirement', 'days' => '30 days', 'min' => '200,000', 'max' => '499,000', 'c' => '45'],
            ['name' => 'Business Startup', 'days' => '45 days', 'min' => '500,000', 'max' => '700,000', 'c' => '65'],
            ];
        return view('home', compact('traders','all_plans'));
    }

    public function about(){
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
