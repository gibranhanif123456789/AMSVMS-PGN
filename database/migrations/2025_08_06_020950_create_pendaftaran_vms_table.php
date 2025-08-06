<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran_vms', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noktp');
            $table->string('region');
            $table->string('alamat');
            $table->string('perusahaan')->nullable();
            $table->string('bagian')->nullable();
            $table->string('tujuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran_vms');
    }
};