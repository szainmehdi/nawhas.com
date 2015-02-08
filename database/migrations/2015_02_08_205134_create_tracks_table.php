<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tracks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->index();
			$table->string('slug')->index();
			$table->integer('album_id')->unsigned()->index();
			$table->foreign('album_id')->references('id')->on('albums')
			    ->onUpdate('cascade')
			    ->onDelete('cascade');
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
		Schema::table('tracks', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}
