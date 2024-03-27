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
        Schema::create('companies' , function (Blueprint $table) {
            $table ->id();
            $table->timestamps();
            $table->string('Cnom');
            $table->string('email');
            $table->string('website');
            $table->string('adress');
            
            
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
