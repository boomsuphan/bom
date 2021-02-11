<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_name')->nullable();
            $table->date('create_at')->nullable();
            $table->date('success_at')->nullable();
            $table->date('number_of_machines')->nullable();
            $table->string('support')->nullable();
            $table->string('Customer')->nullable();
            $table->string('sale')->nullable();
            $table->string('project_status')->nullable();
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
        Schema::dropIfExists('project');
    }
}
