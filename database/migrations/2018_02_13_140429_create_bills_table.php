<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('engineer_id')->index()->unsigned();
            $table->tinyInteger('bill_type')->unsigned();
            $table->integer('customer_id')->index()->unsigned();
            $table->string('type');
            $table->string('error');
            $table->string('in');
            $table->string('out');
            $table->string('cost');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('bills');
    }
}
