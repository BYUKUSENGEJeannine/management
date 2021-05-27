<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administration_tables', function (Blueprint $table) {
            $table->id();
            $table->String("fname", 30);
            $table->String("lname", 30);
            $table->String("username", 30);
            $table->String("password", 30);
            $table->String("category", 30);
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
        Schema::dropIfExists('administration_tables');
    }
}
