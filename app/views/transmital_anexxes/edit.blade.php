@extends('layouts.scaffold')

@section('main')

<h1>Edit Transmital_anexx</h1>
{{ Form::model($transmital_anexx, array('method' => 'PATCH', 'route' => array('transmital_anexxes.update', $transmital_anexx->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('transmital_anexxes.show', 'Cancel', $transmital_anexx->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
