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
       Schema::create('perangkat', function (Blueprint $table) {
    $table->id('id_perangkat');
    $table->foreignId('region_id')->nullable()->constrained('region')->nullOnDelete();
    $table->foreignId('site_id')->nullable()->constrained('site')->nullOnDelete();
    $table->foreignId('jenisperangkat_id')->nullable()->constrained('jenis_perangkat')->nullOnDelete();
    $table->foreignId('brandperangkat_id')->nullable()->constrained('brand_perangkat')->nullOnDelete();
    $table->string('kode_brand');
    $table->string('type');
    $table->string('no_rack')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perangkat');
    }
};
