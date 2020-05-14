<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('ci')->unique();
            $table->string('contact');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type',['user','admin']);
            $table->boolean('active');
            $table->text('address');
            $table->string('notice');
            $table->rememberToken();
            $table->timestamps();

 /*  
            $table->bigIncrements('id');
            $table->string('last_name');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('type',['user','admin']);
            $table->boolean('active');
            $table->string('contact');
            $table->text('address');
            $table->rememberToken();
            $table->timestamps();
 */


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
