<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    // php artisan db:seed --class=CategoriesTableSeeder
    {
        $categories = [
            'Administratie en onthaal',
            'Beauty en wellness',
            'Bouw',
            'Dieren',
            'Drones',
            'Elektro en techniek',
            'Energie en HVAC',
            'Financiën',
            'Grafische en multimedia',
            'Groenvoorziening',
            'Horeca en voeding',
            'Informatica',
            'Interieur en ontwerpen',
            'Kunst, antiek en creatief design',
            'Management',
            'Mode en kledij',
            'Safety',
            'Sales, marketing en communicatie',
            'Sport',
            'Starten met ondernemen',
            'Talen en redactie',
            'Toerisme',
            'Transport en logistiek',
            'Vastgoed',
            'Voertuigen en metaal',
            'Zorgverlening'
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category
            ]);
        }
    }
}
