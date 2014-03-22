<?php

class Case_formsController extends BaseController {

	/**
	 * Case_form Repository
	 *
	 * @var Case_form
	 */
	protected $case_form;

	public function __construct(Case_form $case_form)
	{
		$this->case_form = $case_form;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$case_forms = $this->case_form->all();

		return View::make('case_forms.index', compact('case_forms'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('case_forms.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Case_form::$rules);

		if ($validation->passes())
		{
			$this->case_form->create($input);

			return Redirect::route('case_forms.index');
		}

		return Redirect::route('case_forms.create')
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
		$case_form = $this->case_form->findOrFail($id);

		return View::make('case_forms.show', compact('case_form'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$case_form = $this->case_form->find($id);

		if (is_null($case_form))
		{
			return Redirect::route('case_forms.index');
		}

		return View::make('case_forms.edit', compact('case_form'));
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
		$validation = Validator::make($input, Case_form::$rules);

		if ($validation->passes())
		{
			$case_form = $this->case_form->find($id);
			$case_form->update($input);

			return Redirect::route('case_forms.show', $id);
		}

		return Redirect::route('case_forms.edit', $id)
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
		$this->case_form->find($id)->delete();

		return Redirect::route('case_forms.index');
	}

}
