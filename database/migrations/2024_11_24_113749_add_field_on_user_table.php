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
        Schema::table('users', function (Blueprint $table) {
            $table->string('img')->nullable()->nullable()->after('password');
            $table->enum('role', ['admin', 'supplier', 'pegawai'])->nullable()->after('img');
            $table->string('alamat')->nullable()->after('role');
            $table->integer('telp')->nullable()->after('alamat');
            $table->date('tgl_lahir')->nullable()->after('telp');
            $table->enum('status', ['non-aktif', 'aktif'])->nullable()->after('tgl_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('img');
            $table->dropColumn('role');
            $table->dropColumn('alamat');
            $table->dropColumn('telp');
            $table->dropColumn('tgl_lahir');
            $table->dropColumn('status');
        });
    }
};
