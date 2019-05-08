<?php

class WpusersController extends \BaseController {

	/**
	 * Display a listing of wpusers
	 *
	 * @return Response
	 */
	public function index()
	{
		$wpusers = Wpuser::all();

		return View::make('wpusers.index', compact('wpusers'));
	}

	/**
	 * Show the form for creating a new wpuser
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('wpusers.create');
	}

	/**
	 * Store a newly created wpuser in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Wpuser::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Wpuser::create($data);

		return Redirect::route('wpusers.index');
	}

	/**
	 * Display the specified wpuser.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$wpuser = Wpuser::findOrFail($id);

		return View::make('wpusers.show', compact('wpuser'));
	}

	/**
	 * Show the form for editing the specified wpuser.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$wpuser = Wpuser::find($id);

		return View::make('wpusers.edit', compact('wpuser'));
	}

	/**
	 * Update the specified wpuser in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$wpuser = Wpuser::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Wpuser::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$wpuser->update($data);

		return Redirect::route('wpusers.index');
	}

	/**
	 * Remove the specified wpuser from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Wpuser::destroy($id);

		return Redirect::route('wpusers.index');
	}

}
