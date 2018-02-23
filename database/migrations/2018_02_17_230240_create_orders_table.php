<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_number');
            $table->integer('customer_id')->index();
            $table->integer('num_per_unit');
            $table->integer('cost_per_unit');
            $table->integer('t_cost_per_one');
            $table->integer('item_id');
            $table->integer('paied_bill');
            $table->integer('need_bill')->nullable();
            $table->boolean('end')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
