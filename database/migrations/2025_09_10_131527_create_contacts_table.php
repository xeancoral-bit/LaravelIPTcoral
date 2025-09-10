<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');      // Name of the person
            $table->string('email');     // Email address
            $table->string('phone');     // Phone number
            $table->string('subject');   // Subject line
            $table->text('message');     // Message body
            $table->timestamps();        // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
