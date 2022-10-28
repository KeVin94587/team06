<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateEmperorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emperors', function (Blueprint $table) {
            $table->id()->unsigned()->nullable(false)->comment('編號');
            $table->string('emperor_name')->nullable(false)->comment('皇帝');
            
            $table->foreignId('dynasty_id')->unsigned()->nullable(false)->comment('朝代編號(外部鍵)');
            $table->foreign('dynasty_id')
                ->references('id')->on('dynasties')
                ->onDelete('cascade');
                
            $table->integer('emperor_life')->unsigned()->nullable(true)->comment('壽命');
            $table->integer('emperor_start_year')->nullable(true)->comment('登基年');
            $table->integer('emperor_end_year')->nullable(false)->comment('退位年');

            
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
        Schema::dropIfExists('emperors');
    }
}
