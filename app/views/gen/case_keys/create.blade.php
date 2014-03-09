@extends('layouts.scaffold')

@section('main')

<h1>Create Case_key</h1>

{{ Form::open(array('route' => 'case_keys.store')) }}
	<ul>
        <li>
            {{ Form::label('case_id', 'Case_id:') }}
            {{ Form::text('case_id') }}
        </li>

        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

        <li>
            {{ Form::label('key', 'Key:') }}
            {{ Form::text('key') }}
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


