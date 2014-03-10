@extends('layouts.scaffold')

@section('main')

<h1>Edit Form_subpoena</h1>
{{ Form::model($form_subpoena, array('method' => 'PATCH', 'route' => array('form_subpoenas.update', $form_subpoena->id))) }}
	<ul>
        <li>
            {{ Form::label('case_id', 'Case_id:') }}
            {{ Form::input('number', 'case_id') }}
        </li>

        <li>
            {{ Form::label('agent_id', 'Agent_id:') }}
            {{ Form::input('number', 'agent_id') }}
        </li>

        <li>
            {{ Form::label('location', 'Location:') }}
            {{ Form::text('location') }}
        </li>

        <li>
            {{ Form::label('time', 'Time:') }}
            {{ Form::text('time') }}
        </li>

        <li>
            {{ Form::label('date_requested', 'Date_requested:') }}
            {{ Form::text('date_requested') }}
        </li>

        <li>
            {{ Form::label('date_signed', 'Date_signed:') }}
            {{ Form::text('date_signed') }}
        </li>

        <li>
            {{ Form::label('chief', 'Chief:') }}
            {{ Form::text('chief') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('form_subpoenas.show', 'Cancel', $form_subpoena->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
