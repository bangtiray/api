<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempDetailJtcare extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_detail_casplan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('participant_name', 191);
            $table->string('jk', 191);
            $table->string('tempat', 191);
            $table->date('tgl_lahir');
            $table->string('nip', 191);
            $table->string('plan', 10);
            $table->integer('unit_price');
            $table->integer('user_id');
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
        Schema::dropIfExists('temp_detail_casplan');
    }
}
