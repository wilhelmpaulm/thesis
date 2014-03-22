@extends('layouts.scaffold')

@section('main')

<h1>Edit Coordination_member</h1>
{{ Form::model($coordination_member, array('method' => 'PATCH', 'route' => array('coordination_members.update', $coordination_member->id))) }}
	<ul>
        <li>
            {{ Form::label('agency', 'Agency:') }}
            {{ Form::text('agency') }}
        </li>

        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('coordination_members.show', 'Cancel', $coordination_member->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
