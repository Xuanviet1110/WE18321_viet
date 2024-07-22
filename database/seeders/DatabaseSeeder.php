<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        
        $this->call([
            //User1Seeder::class
            //ProductSeeder::class
            //ProductSeeder::class
            //orders_detailSeeder::class,
            ordersSeeder::class,
        ]);
    }
}
