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
            $table->string('email');
            $table->string('password');
            $table->string('username')->nullable();
            $table->string('ration_id')->nullable();
            $table->string('brash_no')->nullable();
            $table->string('police_id_no')->nullable();
            $table->string('nid')->nullable();
            $table->string('group')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->integer('designation_id')->nullable();
            $table->string('designation_name')->nullable();
            $table->text('address')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('unit_name')->nullable();
            $table->string('division')->nullable();
            $table->string('working_area')->nullable();
            $table->string('previous_working_area')->nullable();
            $table->string('family_member')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('user_pic')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->date('date_of_leave')->nullable();
            $table->string('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
