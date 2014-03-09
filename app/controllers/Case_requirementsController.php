<?php

class Case_requirementsController extends BaseController {

	/**
	 * Case_requirement Repository
	 *
	 * @var Case_requirement
	 */
	protected $case_requirement;

	public function __construct(Case_requirement $case_requirement)
	{
		$this->case_requirement = $case_requirement;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$case_requirements = $this->case_requirement->all();

		return View::make('case_requirements.index', compact('case_requirements'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('case_requirements.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Case_requirement::$rules);

		if ($validation->passes())
		{
			$this->case_requirement->create($input);

			return Redirect::route('case_requirements.index');
		}

		return Redirect::route('case_requirements.create')
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
		$case_requirement = $this->case_requirement->findOrFail($id);

		return View::make('case_requirements.show', compact('case_requirement'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case_requirement = $this->case_requirement->find($id);

		if (is_null($case_requirement))
		{
			return Redirect::route('case_requirements.index');
		}

		return View::make('case_requirements.edit', compact('case_requirement'));
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
		$validation = Validator::make($input, Case_requirement::$rules);

		if ($validation->passes())
		{
			$case_requirement = $this->case_requirement->find($id);
			$case_requirement->update($input);

			return Redirect::route('case_requirements.show', $id);
		}

		return Redirect::route('case_requirements.edit', $id)
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
		$this->case_requirement->find($id)->delete();

		return Redirect::route('case_requirements.index');
	}

}
