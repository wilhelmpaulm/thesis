@extends('layouts.scaffold')

@section('main')

<h1>Create Tag</h1>

{{ Form::open(array('route' => 'tags.store')) }}
	<ul>
        <li>
            {{ Form::label('reference_id', 'Reference_id:') }}
            {{ Form::input('number', 'reference_id') }}
        </li>

        <li>
            {{ Form::label('table', 'Table:') }}
            {{ Form::text('table') }}
        </li>

        <li>
            {{ Form::label('tags', 'Tags:') }}
            {{ Form::textarea('tags') }}
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


