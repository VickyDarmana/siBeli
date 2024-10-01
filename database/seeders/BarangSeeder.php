<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $products = [
            [
                'kd_barang' => 'A0001',
                'nama_barang' => 'Barang A',
                'satuan' => 'buah',
                'harga_jual' => 20000,
                'harga_beli' => 12000,
                'stok' => 40,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0002',
                'nama_barang' => 'Barang B',
                'satuan' => 'kg',
                'harga_jual' => 50000,
                'harga_beli' => 25000,
                'stok' => 20,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0003',
                'nama_barang' => 'Barang C',
                'satuan' => 'buah',
                'harga_jual' => 20000,
                'harga_beli' => 15000,
                'stok' => 60,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0004',
                'nama_barang' => 'Barang D',
                'satuan' => 'kotak',
                'harga_jual' => 60000,
                'harga_beli' => 30000,
                'stok' => 20,
                'status' => false,
            ],
            [
                'kd_barang' => 'A0005',
                'nama_barang' => 'Barang E',
                'satuan' => 'buah',
                'harga_jual' => 80000,
                'harga_beli' => 70000,
                'stok' => 40,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0006',
                'nama_barang' => 'Barang F',
                'satuan' => 'pieces',
                'harga_jual' => 100000,
                'harga_beli' => 80000,
                'stok' => 35,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0007',
                'nama_barang' => 'Barang G',
                'satuan' => 'pasang',
                'harga_jual' => 70000,
                'harga_beli' => 50000,
                'stok' => 55,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0008',
                'nama_barang' => 'Barang H',
                'satuan' => 'buah',
                'harga_jual' => 150000,
                'harga_beli' => 100000,
                'stok' => 15,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0009',
                'nama_barang' => 'Barang I',
                'satuan' => 'kg',
                'harga_jual' => 130000,
                'harga_beli' => 110000,
                'stok' => 30,
                'status' => true,
            ],
            [
                'kd_barang' => 'A0010',
                'nama_barang' => 'Barang J',
                'satuan' => 'buah',
                'harga_jual' => 250000,
                'harga_beli' => 175000,
                'stok' => 20,
                'status' => true,
            ],
        ];

        DB::table('barangs')->insert($products);
    }
}
