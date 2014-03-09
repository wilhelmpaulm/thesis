@extends('layouts.scaffold')

@section('main')

<h1>Edit Case_requirement</h1>
{{ Form::model($case_requirement, array('method' => 'PATCH', 'route' => array('case_requirements.update', $case_requirement->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('case_requirements.show', 'Cancel', $case_requirement->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
