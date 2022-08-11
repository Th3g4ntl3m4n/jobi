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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();

            
            $table->string('user_id') ;
            $table->string('jobtitle');
            $table->string('jobcategory');
            $table->string('companyname');
            $table->string('companyemail');
            $table->string('companyweb');
            $table->string('companylocation');
            $table->string('jobtype');            
            $table->string('jobtags');            
            $table->string('jobsalary');
            $table->string('jobexperience');
            $table->string('jobdescription');
            $table->string('applybefore');
            $table->string('requirements');
            
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
        Schema::dropIfExists('offers');
    }
};
