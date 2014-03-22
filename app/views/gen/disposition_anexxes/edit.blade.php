@extends('layouts.scaffold')

@section('main')

<h1>Edit Disposition_anexx</h1>
{{ Form::model($disposition_anexx, array('method' => 'PATCH', 'route' => array('disposition_anexxes.update', $disposition_anexx->id))) }}
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
			{{ link_to_route('disposition_anexxes.show', 'Cancel', $disposition_anexx->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
