<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casplan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('order_id', 191);
            $table->string('transaction_id', 191);
            $table->string('payment_code', 191);
            $table->string('payment_type', 191);
            $table->integer("gross_amount");
            $table->string('time');
            $table->string('status');
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
        Schema::dropIfExists('casplan');
    }
}
