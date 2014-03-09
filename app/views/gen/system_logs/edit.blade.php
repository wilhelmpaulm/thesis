@extends('layouts.scaffold')

@section('main')

<h1>Edit System_log</h1>
{{ Form::model($system_log, array('method' => 'PATCH', 'route' => array('system_logs.update', $system_log->id))) }}
	<ul>
        <li>
            {{ Form::label('user_id', 'User_id:') }}
            {{ Form::input('number', 'user_id') }}
        </li>

        <li>
            {{ Form::label('reference_id', 'Reference_id:') }}
            {{ Form::input('number', 'reference_id') }}
        </li>

        <li>
            {{ Form::label('table', 'Table:') }}
            {{ Form::text('table') }}
        </li>

        <li>
            {{ Form::label('type', 'Type:') }}
            {{ Form::text('type') }}
        </li>

        <li>
            {{ Form::label('action', 'Action:') }}
            {{ Form::text('action') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('system_logs.show', 'Cancel', $system_log->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
