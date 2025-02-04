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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(null);
            $table->float('price')->default(0);
            $table->integer('unite')->default(0);
            // $table->timestamps();
        });
        DB::statement("ALTER TABLE product ADD [created_at] datetimeoffset(7) ");
        DB::statement("ALTER TABLE product ADD [updated_at] datetimeoffset(7) ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
