<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('roles',function(Blueprint $table){
            $table->increments('role_id');
            $table->string('role_name');
            $table->string('description');
            $table->integer('default')->default(0);
            $table->integer('can_delete')->default(0);
            $table->text('login_destination');
            $table->text('default_context');
            $table->integer('deleted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('roles');
    }
}
