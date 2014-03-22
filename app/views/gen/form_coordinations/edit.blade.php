@extends('layouts.scaffold')

@section('main')

<h1>Edit Form_coordination</h1>
{{ Form::model($form_coordination, array('method' => 'PATCH', 'route' => array('form_coordinations.update', $form_coordination->id))) }}
	<ul>
        <li>
            {{ Form::label('=case_id', '=case_id:') }}
            {{ Form::input('number', '=case_id') }}
        </li>

        <li>
            {{ Form::label('agent_id', 'Agent_id:') }}
            {{ Form::input('number', 'agent_id') }}
        </li>

        <li>
            {{ Form::label('area', 'Area:') }}
            {{ Form::text('area') }}
        </li>

        <li>
            {{ Form::label('time', 'Time:') }}
            {{ Form::text('time') }}
        </li>

        <li>
            {{ Form::label('date', 'Date:') }}
            {{ Form::text('date') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('form_coordinations.show', 'Cancel', $form_coordination->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
