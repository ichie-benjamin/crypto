<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['site_name' => env('APP_NAME')],
            ['autotrader' => 0],
            ['subscription' => false],
            ['mining' => true],
        ];
        foreach ($items as $item){
            setting($item)->save();
        }
    }
}
