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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->timestamps();
        });
        DB::statement("ALTER TABLE users ADD [created_at] datetimeoffset(7) ");
        DB::statement("ALTER TABLE users ADD [updated_at] datetimeoffset(7) ");
        DB::statement("ALTER TABLE users ADD [email_verified_at] datetimeoffset(7) NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
