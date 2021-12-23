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
            $table->bigIncrements('id');
            $table->string('ptype');
            $table->string('pname');
            $table->string('pleader');
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('duration')->nullable();
            $table->string('cost')->nullable();
            $table->string('client')->nullable();
            $table->string('stage')->nullable();
            $table->string('status')->nullable();
            $table->string('member1')->nullable();
            $table->string('member2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Project');
    }
}
