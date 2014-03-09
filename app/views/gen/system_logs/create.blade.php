@extends('layouts.scaffold')

@section('main')

<h1>Create System_log</h1>

{{ Form::open(array('route' => 'system_logs.store')) }}
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


