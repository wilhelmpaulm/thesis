<?php

class Case_keysController extends BaseController {

	/**
	 * Case_key Repository
	 *
	 * @var Case_key
	 */
	protected $case_key;

	public function __construct(Case_key $case_key)
	{
		$this->case_key = $case_key;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$case_keys = $this->case_key->all();

		return View::make('case_keys.index', compact('case_keys'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('case_keys.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Case_key::$rules);

		if ($validation->passes())
		{
			$this->case_key->create($input);

			return Redirect::route('case_keys.index');
		}

		return Redirect::route('case_keys.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$case_key = $this->case_key->findOrFail($id);

		return View::make('case_keys.show', compact('case_key'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case_key = $this->case_key->find($id);

		if (is_null($case_key))
		{
			return Redirect::route('case_keys.index');
		}

		return View::make('case_keys.edit', compact('case_key'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Case_key::$rules);

		if ($validation->passes())
		{
			$case_key = $this->case_key->find($id);
			$case_key->update($input);

			return Redirect::route('case_keys.show', $id);
		}

		return Redirect::route('case_keys.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->case_key->find($id)->delete();

		return Redirect::route('case_keys.index');
	}

}
