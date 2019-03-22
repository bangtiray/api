<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailCasplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_casplan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id', 191);
            $table->string('participant_name', 191);
            $table->string('plan', 10);
            $table->integer('unit_price');
            $table->binary('resource');
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
        Schema::dropIfExists('detail_casplan');
    }
}
