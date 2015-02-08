<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('albums.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('albums.create');
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
	 * @param  Album $album
	 * @return Response
	 */
	public function show(Artist $artist, Album $album)
	{
		return view('albums.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Artist $artist
	 * @param  Album $album
	 * @return Response
	 */
	public function edit(Artist $artist, Album $album)
	{
		return view('albums.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Artist $artist
	 * @param  Album $album
	 * @return Response
	 */
	public function update(Artist $artist, Album $album)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Artist $artist
	 * @param  Album $album
	 * @return Response
	 */
	public function destroy(Artist $artist, Album $album)
	{
		//
	}

}
