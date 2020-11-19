<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
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
        return view('home');
    }
    public function contact()
    {
        return view('home');
    }
}
