<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('disability')->nullable(false)->after('sex');
            $table->string('guardian_first_name')->after('disability');
            $table->string('guardian_surname')->after('guardian_first_name');
            $table->string('guardian_sex')->after('guardian_surname');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['disability', 'guardian_first_name', 'guardian_surname', 'guardian_sex']);
        });
    }
}
