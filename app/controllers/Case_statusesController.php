<?php

class Case_statusesController extends BaseController {

	/**
	 * Case_status Repository
	 *
	 * @var Case_status
	 */
	protected $case_status;

	public function __construct(Case_status $case_status)
	{
		$this->case_status = $case_status;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$case_statuses = $this->case_status->all();

		return View::make('case_statuses.index', compact('case_statuses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('case_statuses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Case_status::$rules);

		if ($validation->passes())
		{
			$this->case_status->create($input);

			return Redirect::route('case_statuses.index');
		}

		return Redirect::route('case_statuses.create')
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
		$case_status = $this->case_status->findOrFail($id);

		return View::make('case_statuses.show', compact('case_status'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case_status = $this->case_status->find($id);

		if (is_null($case_status))
		{
			return Redirect::route('case_statuses.index');
		}

		return View::make('case_statuses.edit', compact('case_status'));
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
		$validation = Validator::make($input, Case_status::$rules);

		if ($validation->passes())
		{
			$case_status = $this->case_status->find($id);
			$case_status->update($input);

			return Redirect::route('case_statuses.show', $id);
		}

		return Redirect::route('case_statuses.edit', $id)
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
		$this->case_status->find($id)->delete();

		return Redirect::route('case_statuses.index');
	}

}
