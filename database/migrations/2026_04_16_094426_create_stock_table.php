<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->id(); //auto incrementing primary key
            $table->string('kode_brg',5)->unique(); //kode barang dengan panjang 5 karakter dan unik
            $table->string('nama_brg',70); //nama barang
            $table->string('satuan',25); //satuan barang
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
