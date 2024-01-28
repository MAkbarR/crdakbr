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
        Schema::create('fcts', function (Blueprint $table) {
            $table->id();
            $table->string('k_hjn');
            $table->string('angin');
            $table->string('gel_tg');
            $table->string('arus');
            $table->string('fctr');
            $table->string('arh_angin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fcts');
    }
};
