<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("registration_number")->nullable(false);
            $table->string("first_name", 30)->nullable(false);
            $table->string("surname", 30)->nullable(false);
            $table->date("birth_date")->nullable(false);
            $table->string("sex", 1)->nullable(false);
            $table->string("guardian_phone_number")->nullable();
            $table->string("address", 30)->nullable(false);
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
        Schema::dropIfExists('students');
    }
}
