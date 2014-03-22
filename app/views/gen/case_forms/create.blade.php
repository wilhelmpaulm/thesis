@extends('layouts.scaffold')

@section('main')

<h1>Create Case_form</h1>

{{ Form::open(array('route' => 'case_forms.store')) }}
	<ul>
        <li>
            {{ Form::label('case_id', 'Case_id:') }}
            {{ Form::input('number', 'case_id') }}
        </li>

        <li>
            {{ Form::label('form_id', 'Form_id:') }}
            {{ Form::input('number', 'form_id') }}
        </li>

        <li>
            {{ Form::label('form_type', 'Form_type:') }}
            {{ Form::text('form_type') }}
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


