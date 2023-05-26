<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->string('email', 255);
            $table->string('phone', 255);
            $table->string('website', 255);
            $table->text('remarks');
            $table->string('description', 255);
            $table->tinyInteger('approved');
            $table->timestamps();
        });
        
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->timestamps();
        });
        
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('streetnr', 255);
            $table->string('codecity', 255);
            $table->timestamps();
        });

        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('content', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop tables in reverse order
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('locations');
    }
};
