@extends('layouts.scaffold')

@section('main')

<h1>All Coordination_vehicles</h1>

<p>{{ link_to_route('coordination_vehicles.create', 'Add new coordination_vehicle') }}</p>

@if ($coordination_vehicles->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Vehicle</th>
				<th>Model</th>
				<th>Plate_no</th>
				<th>Color</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($coordination_vehicles as $coordination_vehicle)
				<tr>
					<td>{{{ $coordination_vehicle->vehicle }}}</td>
					<td>{{{ $coordination_vehicle->model }}}</td>
					<td>{{{ $coordination_vehicle->plate_no }}}</td>
					<td>{{{ $coordination_vehicle->color }}}</td>
                    <td>{{ link_to_route('coordination_vehicles.edit', 'Edit', array($coordination_vehicle->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('coordination_vehicles.destroy', $coordination_vehicle->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no coordination_vehicles
@endif

@stop
