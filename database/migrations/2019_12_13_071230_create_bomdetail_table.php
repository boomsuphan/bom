<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBomdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bomdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qty')->nullable();
            $table->text('remark')->nullable();
            $table->string('in stock')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('bom_id')->nullable();
            $table->integer('part_id')->nullable();
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
        Schema::dropIfExists('bomdetail');
    }
}
