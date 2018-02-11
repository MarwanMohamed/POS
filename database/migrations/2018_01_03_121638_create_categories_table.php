<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('cat_id');
			$table->string('cat_image')->nullable();
			$table->string('cat_name',1000);
			$table->string('cat_desc', 6000)->nullable();
			$table->integer('parent_cat_id')->default(0);
			$table->integer('min_price')->default(0);
			$table->integer('max_price')->default(0);
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
		Schema::drop('categories');
	}

}
