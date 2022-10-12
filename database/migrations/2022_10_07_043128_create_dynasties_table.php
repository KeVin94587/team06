<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynastiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynasties', function (Blueprint $table) {
            $table->id()->unsigned()->nullable(false)->comment('編號');
            $table->string('dynasty_name')->nullable(false)->comment('朝代');
            $table->smallInteger('dynasty_start_year')->nullable(false)->comment('起始年');
            $table->smallInteger('dynasty_end_year')->nullable(false)->comment('結束年');
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
        Schema::dropIfExists('dynasties');
    }
}
