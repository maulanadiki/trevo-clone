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
        Schema::create('kembali', function (Blueprint $table) {
            $table->id();
            $table->string('id_sewa');
            $table->date('Pengembalian');
            $table->string('hari');
            $table->string('grantotal');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kembali');
    }
};
