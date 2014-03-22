<?php

class Coordination_vehiclesController extends BaseController {

	/**
	 * Coordination_vehicle Repository
	 *
	 * @var Coordination_vehicle
	 */
	protected $coordination_vehicle;

	public function __construct(Coordination_vehicle $coordination_vehicle)
	{
		$this->coordination_vehicle = $coordination_vehicle;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$coordination_vehicles = $this->coordination_vehicle->all();

		return View::make('coordination_vehicles.index', compact('coordination_vehicles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('coordination_vehicles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Coordination_vehicle::$rules);

		if ($validation->passes())
		{
			$this->coordination_vehicle->create($input);

			return Redirect::route('coordination_vehicles.index');
		}

		return Redirect::route('coordination_vehicles.create')
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
		$coordination_vehicle = $this->coordination_vehicle->findOrFail($id);

		return View::make('coordination_vehicles.show', compact('coordination_vehicle'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$coordination_vehicle = $this->coordination_vehicle->find($id);

		if (is_null($coordination_vehicle))
		{
			return Redirect::route('coordination_vehicles.index');
		}

		return View::make('coordination_vehicles.edit', compact('coordination_vehicle'));
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
		$validation = Validator::make($input, Coordination_vehicle::$rules);

		if ($validation->passes())
		{
			$coordination_vehicle = $this->coordination_vehicle->find($id);
			$coordination_vehicle->update($input);

			return Redirect::route('coordination_vehicles.show', $id);
		}

		return Redirect::route('coordination_vehicles.edit', $id)
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
		$this->coordination_vehicle->find($id)->delete();

		return Redirect::route('coordination_vehicles.index');
	}

}
