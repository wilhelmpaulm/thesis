<?php

class Coordination_membersController extends BaseController {

	/**
	 * Coordination_member Repository
	 *
	 * @var Coordination_member
	 */
	protected $coordination_member;

	public function __construct(Coordination_member $coordination_member)
	{
		$this->coordination_member = $coordination_member;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$coordination_members = $this->coordination_member->all();

		return View::make('coordination_members.index', compact('coordination_members'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('coordination_members.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Coordination_member::$rules);

		if ($validation->passes())
		{
			$this->coordination_member->create($input);

			return Redirect::route('coordination_members.index');
		}

		return Redirect::route('coordination_members.create')
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
		$coordination_member = $this->coordination_member->findOrFail($id);

		return View::make('coordination_members.show', compact('coordination_member'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$coordination_member = $this->coordination_member->find($id);

		if (is_null($coordination_member))
		{
			return Redirect::route('coordination_members.index');
		}

		return View::make('coordination_members.edit', compact('coordination_member'));
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
		$validation = Validator::make($input, Coordination_member::$rules);

		if ($validation->passes())
		{
			$coordination_member = $this->coordination_member->find($id);
			$coordination_member->update($input);

			return Redirect::route('coordination_members.show', $id);
		}

		return Redirect::route('coordination_members.edit', $id)
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
		$this->coordination_member->find($id)->delete();

		return Redirect::route('coordination_members.index');
	}

}
