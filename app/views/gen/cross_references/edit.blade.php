@extends('layouts.scaffold')

@section('main')

<h1>Edit Cross_reference</h1>
{{ Form::model($cross_reference, array('method' => 'PATCH', 'route' => array('cross_references.update', $cross_reference->id))) }}
	<ul>
        <li>
            {{ Form::label('reference_id', 'Reference_id:') }}
            {{ Form::input('number', 'reference_id') }}
        </li>

        <li>
            {{ Form::label('tags_id', 'Tags_id:') }}
            {{ Form::input('number', 'tags_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('cross_references.show', 'Cancel', $cross_reference->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
