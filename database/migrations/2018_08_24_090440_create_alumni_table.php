<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('surname');
            $table->string('name');
            $table->date('birthdate');
			$table->string('handicapnumber');
			$table->string('insurancenumber');
			$table->string('socialsecuritycoverage');
			$table->string('handicaptype');
			$table->string('handicapdegree');
			$table->date('handicapcardenddate');
			$table->date('insurancecardenddate');
			$table->string('telephonenumber');
			$table->string('identitycardnumber');
			$table->string('mothersname');
			$table->string('fathersname');
			$table->date('entrydate');
			$table->date('exitdate');
			$table->string('comment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni');
    }
}
