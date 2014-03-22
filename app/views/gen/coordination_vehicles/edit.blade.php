@extends('layouts.scaffold')

@section('main')

<h1>Edit Coordination_vehicle</h1>
{{ Form::model($coordination_vehicle, array('method' => 'PATCH', 'route' => array('coordination_vehicles.update', $coordination_vehicle->id))) }}
	<ul>
        <li>
            {{ Form::label('vehicle', 'Vehicle:') }}
            {{ Form::text('vehicle') }}
        </li>

        <li>
            {{ Form::label('model', 'Model:') }}
            {{ Form::text('model') }}
        </li>

        <li>
            {{ Form::label('plate_no', 'Plate_no:') }}
            {{ Form::text('plate_no') }}
        </li>

        <li>
            {{ Form::label('color', 'Color:') }}
            {{ Form::text('color') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('coordination_vehicles.show', 'Cancel', $coordination_vehicle->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
