@extends('layouts.scaffold')

@section('main')

<h1>Create Transmital_anexx</h1>

{{ Form::open(array('route' => 'transmital_anexxes.store')) }}
	<ul>
        <li>
            {{ Form::label('letter', 'Letter:') }}
            {{ Form::text('letter') }}
        </li>

        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
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


