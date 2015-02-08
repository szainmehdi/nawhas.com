<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('albums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->index();
			$table->string('slug')->index();
			$table->text('description');
			$table->integer('year_islamic');
			$table->date('release_date');
			$table->integer('artist_id')->unsigned()->index();
			$table->foreign('artist_id')->references('id')->on('artists')
			    ->onUpdate('cascade')
			    ->onDelete('cascade');
			$table->softDeletes();
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
		Schema::table('albums', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}
