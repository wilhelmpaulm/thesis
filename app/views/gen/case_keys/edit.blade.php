@extends('layouts.scaffold')

@section('main')

<h1>Edit Case_key</h1>
{{ Form::model($case_key, array('method' => 'PATCH', 'route' => array('case_keys.update', $case_key->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('case_keys.show', 'Cancel', $case_key->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
