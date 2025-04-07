<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Plumas',
            'Papel',
            'Escritorio',
            'Arte y Color',
        ];

        foreach ($categories as $name) {
            DB::table('t090_category_products')->insert([
                't090_category_name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
