<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
        ['name' => 'Starter','percent_profit' => 0,'period' => '20','minimum_purchase' => 0,'maximum_purchase' => 0],
        ['name' => 'Bronze','percent_profit' => 10,'period' => '20','minimum_purchase' => 1000,'maximum_purchase' => 3000],
        ['name' => 'Silver','percent_profit' => 30,'period' => '20','minimum_purchase' => 3000,'maximum_purchase' => 5000],
        ['name' => 'Gold','percent_profit' => 50,'period' => '30','minimum_purchase' => 5000,'maximum_purchase' => 10000],
            ];

        foreach ($packages as $item) {
            if (Package::where('name', '=', $item['name'])->first() === null) {
                Package::create([
                    'name' => $item['name'],
                    'percent_profit'  => $item['percent_profit'],
                    'period' => $item['period'],
                    'minimum_purchase' => $item['minimum_purchase'],
                    'maximum_purchase' => $item['maximum_purchase'],
                    'status' => 1,
                ]);
            }
        }
    }
}
