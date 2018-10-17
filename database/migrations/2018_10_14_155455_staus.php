<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Staus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status',function (Blueprint $table) 
            {
                $table->increments('id');
                $table->float('temp-cold');
                $table->float('temp-room');
                $table->float('v-clod');
                $table->float('i-clod');
                $table->float('i-hot');
                $table->float('performance');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
