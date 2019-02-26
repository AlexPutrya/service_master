<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('repairs')) {
            Schema::create('repairs', function (Blueprint $table) {
                $table->increments('id');
                $table->date('register_date');
                $table->date('end_date')->nullable();
                $table->string('status');
                $table->string('client');
                $table->string('phone');
                $table->string('device');
                $table->string('serial')->nullable();
                $table->string('complect')->nullable();
                $table->string('defect')->nullable();
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
        
        Schema::dropIfExists('repairs');
    }
}
