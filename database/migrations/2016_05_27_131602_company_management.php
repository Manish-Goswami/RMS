<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('company_management',function(Blueprint $table){

            $table->increments('id');
            $table->string('company_name');
            $table->string('company_person_name');
            $table->string('company_email');
            $table->integer('company_contact_no');
            $table->text('company_address');
            $table->text('company_country');
            $table->text('company_state');
            $table->text('company_city');
            
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
        Schema::drop('company_management');
    }
}
