@extends('layouts.scaffold')

@section('main')

<h1>Edit Case_status</h1>
{{ Form::model($case_status, array('method' => 'PATCH', 'route' => array('case_statuses.update', $case_status->id))) }}
	<ul>
        <li>
            {{ Form::label('status', 'Status:') }}
            {{ Form::text('status') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('case_statuses.show', 'Cancel', $case_status->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
