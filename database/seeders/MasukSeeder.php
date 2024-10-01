<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $suppliers = DB::table('suppliers')->pluck('kd_supplier')->toArray();

        $masuks = [
            [
                'kd_masuk' => 'AO001',
                'tgl_masuk' => now(),
                'kd_supplier' => $suppliers[array_rand($suppliers)], 
                'total_masuk' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'AO002',
                'tgl_masuk' => now(),
                'kd_supplier' => $suppliers[array_rand($suppliers)], 
                'total_masuk' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kd_masuk' => 'AO003',
                'tgl_masuk' => now(),
                'kd_supplier' => $suppliers[array_rand($suppliers)], 
                'total_masuk' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('masuks')->insert($masuks);
    }
    }
