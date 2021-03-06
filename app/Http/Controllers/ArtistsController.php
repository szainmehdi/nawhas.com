<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('artists.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('artists.create');
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
	 * @return Response
	 */
	public function show(Artist $artist)
	{
		return view('artists.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function edit(Artist $artist)
	{
		return view('artists.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function update(Artist $artist)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Artist $artist
	 * @return Response
	 */
	public function destroy(Artist $artist)
	{
		//
	}

}
