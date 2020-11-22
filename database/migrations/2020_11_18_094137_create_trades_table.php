<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('deposit_id');
            $table->bigInteger('user_id');
            $table->string('trade_type')->default('buy');
            $table->string('currency_pair');
            $table->integer('duration')->default(1);
            $table->integer('profit');
            $table->boolean('is_win')->default(true);
            $table->decimal('traded_amount', 11, 2)->nullable();
            $table->decimal('opening_price', 11, 2)->nullable();
            $table->decimal('closing_price', 11, 2)->nullable();
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
        Schema::dropIfExists('trades');
    }
}
