<?php

class WppostsController extends BaseController {

	/**
	 * Display a listing of wpposts
	 *
	 * @return Response
	 */
	public function index()
	{
		$wpposts = Wppost::orderBy('ID','DESC')->get();//all(); //where('post_status', '=','publish')->get();

		return View::make('wpposts.index', compact('wpposts'));
	}

	/**
	 * Show the form for creating a new wppost
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('wpposts.create');
	}

	/**
	 * Store a newly created wppost in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Wppost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Wppost::create($data);

		return Redirect::route('wpposts.index');
	}

	/**
	 * Display the specified wppost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$wppost = Wppost::findOrFail($id);

		return View::make('wpposts.show', compact('wppost'));
	}

	/**
	 * Show the form for editing the specified wppost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$wppost = Wppost::find($id);

		return View::make('wpposts.edit', compact('wppost'));
	}

	/**
	 * Update the specified wppost in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$wppost = Wppost::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Wppost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$wppost->update($data);

		return Redirect::route('wpposts.index');
	}

	/**
	 * Remove the specified wppost from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Wppost::destroy($id);

		return Redirect::route('wpposts.index');
	}

}
