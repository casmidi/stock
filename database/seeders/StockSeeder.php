<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stock')->truncate(); // hapus semua data + reset identity

        for ($i = 1; $i <= 10; $i++) {
            DB::table('stock')->insert([
                'kode_brg' => 'B' . str_pad($i, 3, '0', STR_PAD_LEFT), // Generate kode_brg like BRG001, BRG002, etc.
                'nama_brg' => 'Barang ' . $i, // Generate nama_brg like Barang 1, Barang 2, etc.
                'satuan' => 'pcs', // Set satuan to 'pcs'
                'created_at' => now(), // Set created_at to current timestamp
                'updated_at' => now(), // Set updated_at to current timestamp
            ]);
        }
    }
}
