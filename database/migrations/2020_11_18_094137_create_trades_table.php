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
            $table->bigInteger('user_id');
            $table->string('order_type');
            $table->string('currency_pair');
            $table->decimal('buy_at', 11, 2)->nullable();
            $table->decimal('profit', 11, 2)->nullable();
            $table->decimal('item_price', 11, 2)->nullable();
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
