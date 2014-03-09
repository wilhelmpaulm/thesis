@extends('layouts.scaffold')

@section('main')

<h1>Create Case_requirement</h1>

{{ Form::open(array('route' => 'case_requirements.store')) }}
	<ul>
        <li>
            {{ Form::label('case_id', 'Case_id:') }}
            {{ Form::input('number', 'case_id') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('requirement', 'Requirement:') }}
            {{ Form::textarea('requirement') }}
        </li>

        <li>
            {{ Form::label('date_requested', 'Date_requested:') }}
            {{ Form::text('date_requested') }}
        </li>

        <li>
            {{ Form::label('date_due', 'Date_due:') }}
            {{ Form::text('date_due') }}
        </li>

        <li>
            {{ Form::label('date_received', 'Date_received:') }}
            {{ Form::text('date_received') }}
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


