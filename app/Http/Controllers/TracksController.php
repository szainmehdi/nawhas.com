<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Track;
use Illuminate\Http\Request;

class TracksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('tracks.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tracks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Artist $artist
	 * @param  Track $track
	 * @return Response
	 */
	public function show(Artist $artist, Track $track)
	{
		return view('tracks.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Artist $artist
	 * @param  Track $track
	 * @return Response
	 */
	public function edit(Artist $artist, Track $track)
	{
		return view('tracks.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Artist $artist
	 * @param  Track $track
	 * @return Response
	 */
	public function update(Artist $artist, Track $track)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Artist $artist
	 * @param  Track $track
	 * @return Response
	 */
	public function destroy(Artist $artist, Track $track)
	{
		//
	}

}
