<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemoteClassTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remote_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('disciplines_id');
            $table->date('date');
            $table->integer('quantity');
            $table->text('content');
            $table->integer('type');
            $table->string('plataform',50);
            $table->timestamps();
            $table->foreign('disciplines_id')->references('id')->on('disciplines');	

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Aula');
    }
}
