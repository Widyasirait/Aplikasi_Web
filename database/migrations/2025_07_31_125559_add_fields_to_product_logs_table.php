<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('product_logs', function (Blueprint $table) {
            $table->string('nama_produk')->nullable()->after('product_id');
            $table->enum('aksi', ['tambah', 'edit', 'hapus'])->after('nama_produk');
            $table->text('deskripsi')->nullable()->after('aksi');
        });
    }

    public function down()
    {
        Schema::table('product_logs', function (Blueprint $table) {
            $table->dropColumn(['nama_produk', 'aksi', 'deskripsi']);
        });
    }
};
