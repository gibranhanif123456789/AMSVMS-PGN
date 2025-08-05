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
        Schema::create('listfasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->string('kode_region');
            $table->string('kode_site');
            $table->string('no_rack');
            $table->string('kode_fasilitas');
            $table->integer('fasilitas_ke')->default(1);
            $table->string('kode_brand');
            $table->string('type')->nullable();
            $table->string('serialnumber')->nullable();
            $table->integer('jml_fasilitas')->default(1);
            $table->string('status')->nullable();
            $table->integer('uawal')->nullable();
            $table->integer('uakhir')->nullable();
            $table->unsignedBigInteger('milik')->nullable();
            $table->foreign('milik')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listfasilitas');
    }
};
