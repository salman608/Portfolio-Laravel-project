<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyselvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myselves', function (Blueprint $table) {
          $table->bigIncrements('id');
                         $table->string('phone');
                         $table->string('email');
                         $table->string('address');
                         $table->string('facebook');
                         $table->string('linkedin');
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
        Schema::dropIfExists('myselves');
    }
}
