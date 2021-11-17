<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summits', function (Blueprint $table) {
            $table->id();
            $table->string('gname');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('phone');
            $table->string('gmail');
            $table->string('varsity');
            $table->string('trid');
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
        Schema::dropIfExists('summits');
    }
}
