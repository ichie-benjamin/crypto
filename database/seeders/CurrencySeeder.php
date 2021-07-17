<?php

namespace Database\Seeders;

use App\Models\CurrencyPair;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'BCH-EUR','image' => '/images/c/bch.png'],
            ['name' => 'BCH-BTC','image' => '/images/c/btc.png'],
            ['name' => 'BCH-GBP','image' => '/images/c/gbp.png'],
            ['name' => 'BTC-EOS','image' => '/images/c/eos.png'],
            ['name' => 'BTC-EUR','image' => '/images/c/eur.png'],
            ['name' => 'BTC-GBP','image' => '/images/c/btc.png'],
            ['name' => 'BTC-USD','image' => '/images/c/usd1.png'],
            ['name' => 'BTC-USDC','image' => '/images/c/btc.png'],
            ['name' => 'EOS-BTC','image' => '/images/c/eos.png'],
            ['name' => 'EOS-EUR','image' => '/images/c/eur.png'],
            ['name' => 'EOS-USD','image' => '/images/c/eos.png'],
            ['name' => 'ETC-BTC','image' => '/images/c/etc.png'],
            ['name' => 'ETC-EUR','image' => '/images/c/eur.png'],
        ];

        foreach ($items as $item) {
            if (CurrencyPair::where('name', '=', $item['name'])->first() === null) {
                CurrencyPair::create([
                    'name' => $item['name'],
                    'image' => $item['image'],
                ]);
            }
        }
    }
}
