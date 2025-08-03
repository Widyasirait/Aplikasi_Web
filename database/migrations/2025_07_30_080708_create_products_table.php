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
        // Membuat tabel products
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // Membuat tabel product_logs
        Schema::create('product_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable(); // Boleh null jika produk sudah dihapus
            $table->string('nama_produk');
            $table->enum('aksi', ['tambah', 'edit', 'hapus']);
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_logs');
        Schema::dropIfExists('products');
    }
};
