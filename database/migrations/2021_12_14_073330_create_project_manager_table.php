<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_manager', function (Blueprint $table) {
            $table->bigIncrements('pmID');
            $table->bigInteger('id')->unsigned()->index()->nullable();
            $table->foreign('id')->references('pmID')->on('users');
            $table->string('ptype');
            $table->string('pname');
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
        Schema::table('project_manager', function (Blueprint $table) {
            $table->dropForeign('id');
            $table->dropColumn('id');
        });
    }
}
