<?php

class Transmital_anexxesController extends BaseController {

	/**
	 * Transmital_anexx Repository
	 *
	 * @var Transmital_anexx
	 */
	protected $transmital_anexx;

	public function __construct(Transmital_anexx $transmital_anexx)
	{
		$this->transmital_anexx = $transmital_anexx;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$transmital_anexxes = $this->transmital_anexx->all();

		return View::make('transmital_anexxes.index', compact('transmital_anexxes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('transmital_anexxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Transmital_anexx::$rules);

		if ($validation->passes())
		{
			$this->transmital_anexx->create($input);

			return Redirect::route('transmital_anexxes.index');
		}

		return Redirect::route('transmital_anexxes.create')
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
		$transmital_anexx = $this->transmital_anexx->findOrFail($id);

		return View::make('transmital_anexxes.show', compact('transmital_anexx'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$transmital_anexx = $this->transmital_anexx->find($id);

		if (is_null($transmital_anexx))
		{
			return Redirect::route('transmital_anexxes.index');
		}

		return View::make('transmital_anexxes.edit', compact('transmital_anexx'));
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
		$validation = Validator::make($input, Transmital_anexx::$rules);

		if ($validation->passes())
		{
			$transmital_anexx = $this->transmital_anexx->find($id);
			$transmital_anexx->update($input);

			return Redirect::route('transmital_anexxes.show', $id);
		}

		return Redirect::route('transmital_anexxes.edit', $id)
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
		$this->transmital_anexx->find($id)->delete();

		return Redirect::route('transmital_anexxes.index');
	}

}
