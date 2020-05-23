<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            
            
            $table->bigIncrements('id');
            $table->text('homecode');
            $table->text('homedesc');
            $table->string('homeimg1')->nullable();
            $table->string('homeimg2')->nullable();
            $table->string('homeimg3')->nullable();
            $table->string('homeimg4')->nullable();
            $table->string('homeimg5')->nullable();
            $table->string('homedir')->nullable();
            $table->string('hometelf')->nullable();
            $table->string('homeemail')->nullable();
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
        Schema::dropIfExists('homes');
    }
}
