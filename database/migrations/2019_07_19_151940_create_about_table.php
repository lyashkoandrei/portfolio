<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 70)->nullable();
            $table->string('surname', 70)->nullable();
            $table->string('tel', 20)->nullable();
            $table->string('email', 70);
            $table->string('address', 70);
            $table->string('linkedin', 70);
            $table->string('github', 70);
            $table->string('twitter', 70);
            $table->string('facebook', 70);
            $table->string('stackoverflow', 70);
            $table->string('color', 70);
            $table->text('description')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
