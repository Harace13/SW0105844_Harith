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
        Schema::create('Project', function (Blueprint $table) {
            $table->bigIncrements('projID');
            $table->bigInteger('pmID')->unsigned()->index()->nullable();
            $table->foreign('pmID')->references('projID')->on('project_managers');
            $table->string('projName');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('Duration');
            $table->string('Cost');
            $table->string('client');
            $table->string('stage');
            $table->string('status');
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
