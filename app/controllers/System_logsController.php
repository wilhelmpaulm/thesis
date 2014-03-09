<?php

class System_logsController extends BaseController {

	/**
	 * System_log Repository
	 *
	 * @var System_log
	 */
	protected $system_log;

	public function __construct(System_log $system_log)
	{
		$this->system_log = $system_log;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$system_logs = $this->system_log->all();

		return View::make('system_logs.index', compact('system_logs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('system_logs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, System_log::$rules);

		if ($validation->passes())
		{
			$this->system_log->create($input);

			return Redirect::route('system_logs.index');
		}

		return Redirect::route('system_logs.create')
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
		$system_log = $this->system_log->findOrFail($id);

		return View::make('system_logs.show', compact('system_log'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$system_log = $this->system_log->find($id);

		if (is_null($system_log))
		{
			return Redirect::route('system_logs.index');
		}

		return View::make('system_logs.edit', compact('system_log'));
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
		$validation = Validator::make($input, System_log::$rules);

		if ($validation->passes())
		{
			$system_log = $this->system_log->find($id);
			$system_log->update($input);

			return Redirect::route('system_logs.show', $id);
		}

		return Redirect::route('system_logs.edit', $id)
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
		$this->system_log->find($id)->delete();

		return Redirect::route('system_logs.index');
	}

}
