<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntrocentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introcenters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intro');
            $table->text('description');
            $table->string('image');
            $table->string('hotline');
            $table->string('timeopen');
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
        Schema::dropIfExists('introcenters');
    }
}
