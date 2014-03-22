@extends('layouts.scaffold')

@section('main')

<h1>Create Coordination_vehicle</h1>

{{ Form::open(array('route' => 'coordination_vehicles.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


