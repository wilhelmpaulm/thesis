@extends('layouts.scaffold')

@section('main')

<h1>Create Coordination_member</h1>

{{ Form::open(array('route' => 'coordination_members.store')) }}
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


