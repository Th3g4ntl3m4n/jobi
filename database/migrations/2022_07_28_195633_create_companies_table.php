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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('phone');
            $table->string('city');
            $table->string('country');
            $table->string('web');
            $table->string('address');
            $table->string('description');
            $table->string('NumeroEmpleados');
            $table->string('Category');
            $table->string('Experiencia');
            $table->string('nit');

            $table->string('NombreRepresentante');
            $table->string('CargoRepresentante');
            $table->string('EmailRepresentante');
            $table->string('MovilRepresentante');
            $table->string('FijoRepresentante');


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
        Schema::dropIfExists('companies');
    }
};
