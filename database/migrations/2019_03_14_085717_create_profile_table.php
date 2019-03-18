<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('profiles')) {
            Schema::create('profiles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('org_name')->nullable();
                $table->string('adress')->nullable();
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->string('drfo_code')->nullable();
                $table->string('bank_name')->nullable();
                $table->string('mfo')->nullable();
                $table->string('bank_acount_number')->nullable();
                $table->integer('owner')->unsigned();
                $table->foreign('owner')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
