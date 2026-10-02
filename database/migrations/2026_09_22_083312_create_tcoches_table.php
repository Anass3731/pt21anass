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
        Schema::create('tcoches', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->string('bastidor', 17)->primarykey();
            $table->string('marca', 50);
            $table->integer('anys')->unsigned();
             });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcoches');
    }
};
