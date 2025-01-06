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
        Schema::create('regusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('adress');
            $table->integer('phonenumber');
            $table->string('email');
            $table->string('password');
            $table->date('dateofbirth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regusers');
    }
};
