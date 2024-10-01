<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $products = DB::table('barangs')->pluck('harga_beli', 'kd_barang')->toArray();

        // Manual entries for d_masuks based on the specified PO codes
        $d_masuks = [
            // Entries for PO001
            [
                'id_masuk' => 'B0001',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0001', 
                'jumlah' => 4,  
                'subtotal' => 4 * $products['A0001'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0002',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0002', 
                'jumlah' => 5,  
                'subtotal' => 5* $products['A0002'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0003',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0003', 
                'jumlah' => 10,  
                'subtotal' => 10* $products['A0003'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0004',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0004', 
                'jumlah' => 12,  
                'subtotal' => 12* $products['A0004'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0005',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0005', 
                'jumlah' => 4,  
                'subtotal' => 4* $products['A0005'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_masuk' => 'B0006',
                'kd_masuk' => 'AO001',
                'kd_barang_beli' => '0006', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0006'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0007',
                'kd_masuk' => 'AO002',
                'kd_barang_beli' => '0007', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0007'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0008',
                'kd_masuk' => 'AO002',
                'kd_barang_beli' => '0008', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0008'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0009',
                'kd_masuk' => 'AO002',
                'kd_barang_beli' => '0009', 
                'jumlah' => 15,  
                'subtotal' => 15* $products['A0009'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0010',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0001', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0001'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_masuk' => 'B0011',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0002', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0002'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0012',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0003', 
                'jumlah' => 3,  
                'subtotal' => 3* $products['A0003'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0013',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0004', 
                'jumlah' => 5,  
                'subtotal' => 5* $products['A0004'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0014',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0005', 
                'jumlah' => 12,  
                'subtotal' => 12* $products['A0005'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0015',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0006', 
                'jumlah' => 7,  
                'subtotal' => 7* $products['A0006'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0016',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0007', 
                'jumlah' => 10,  
                'subtotal' => 10* $products['A0007'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0017',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0008', 
                'jumlah' => 13,  
                'subtotal' => 13* $products['A0008'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0018',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0009', 
                'jumlah' => 8,  
                'subtotal' => 8* $products['A0009'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0019',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0010', 
                'jumlah' => 2,  
                'subtotal' => 2* $products['A0010'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_masuk' => 'B0020',
                'kd_masuk' => 'AO003',
                'kd_barang_beli' => '0011', 
                'jumlah' => 20,  
                'subtotal' => 20* $products['A0011'], 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert entries into the d_masuks table
        DB::table('d_masuks')->insert($d_masuks);
    }
}
