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
        Schema::create('applyes', function (Blueprint $table) {
            $table->id();

            $table->string('user_id') ;
            $table->string('ofert_id');
            $table->string('state');
            $table->string('commets');
            $table->string('favorite');
            
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
        Schema::dropIfExists('applyes');
    }
};
