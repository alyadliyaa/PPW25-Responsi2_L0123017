<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambahkan kolom 'nama' ke tabel 'bookings'
     */
    public function up(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('nama')->after('id');
        });
    }

    /**
     * Hapus kolom 'nama' dari tabel 'bookings' jika di-rollback
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }
};