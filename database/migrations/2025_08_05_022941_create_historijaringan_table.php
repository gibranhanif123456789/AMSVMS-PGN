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
        Schema::create('historijaringan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alatukur')->nullable();
            $table->string('kode_region');
            $table->string('kode_alatukur');
            $table->integer('alatukur_ke')->default(1);
            $table->string('kode_brand');
            $table->string('type')->nullable();
            $table->string('serialnumber')->nullable();
            $table->integer('tahunperolehan')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('kondisi')->nullable();
            $table->text('histori');
            $table->timestamp('tanggal_perubahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historijaringan');
    }
};
