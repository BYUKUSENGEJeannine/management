<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmugandaTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umuganda_tables', function (Blueprint $table) {
            $table->id();
            $table->String("fname", 30);
            $table->String("lname", 30);
            $table->String("contact", 10)->unique();
            $table->String("id-no", 30)->unique();


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
        Schema::dropIfExists('umuganda_tables');
    }
}
