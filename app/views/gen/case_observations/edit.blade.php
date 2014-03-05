@extends('layouts.scaffold')

@section('main')

<h1>Edit Case_observation</h1>
{{ Form::model($case_observation, array('method' => 'PATCH', 'route' => array('case_observations.update', $case_observation->id))) }}
	<ul>
        <li>
            {{ Form::label('observation', 'Observation:') }}
            {{ Form::textarea('observation') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('case_observations.show', 'Cancel', $case_observation->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
