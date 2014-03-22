<?php

class Disposition_anexxesController extends BaseController {

	/**
	 * Disposition_anexx Repository
	 *
	 * @var Disposition_anexx
	 */
	protected $disposition_anexx;

	public function __construct(Disposition_anexx $disposition_anexx)
	{
		$this->disposition_anexx = $disposition_anexx;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$disposition_anexxes = $this->disposition_anexx->all();

		return View::make('disposition_anexxes.index', compact('disposition_anexxes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('disposition_anexxes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Disposition_anexx::$rules);

		if ($validation->passes())
		{
			$this->disposition_anexx->create($input);

			return Redirect::route('disposition_anexxes.index');
		}

		return Redirect::route('disposition_anexxes.create')
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
		$disposition_anexx = $this->disposition_anexx->findOrFail($id);

		return View::make('disposition_anexxes.show', compact('disposition_anexx'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$disposition_anexx = $this->disposition_anexx->find($id);

		if (is_null($disposition_anexx))
		{
			return Redirect::route('disposition_anexxes.index');
		}

		return View::make('disposition_anexxes.edit', compact('disposition_anexx'));
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
		$validation = Validator::make($input, Disposition_anexx::$rules);

		if ($validation->passes())
		{
			$disposition_anexx = $this->disposition_anexx->find($id);
			$disposition_anexx->update($input);

			return Redirect::route('disposition_anexxes.show', $id);
		}

		return Redirect::route('disposition_anexxes.edit', $id)
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
		$this->disposition_anexx->find($id)->delete();

		return Redirect::route('disposition_anexxes.index');
	}

}
