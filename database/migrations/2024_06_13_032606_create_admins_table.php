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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_admin');
            $table->enum('jk_admin', ['L', 'P']);
            $table->string('nohp_admin', length: 15);
            $table->string('email_admin')-> unique();
            $table->string('password_admin');
            $table->text('alamat_admin');
            $table->string('jabatan_admin', length: 100);
            $table->string('foto_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
