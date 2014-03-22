@extends('layouts.scaffold')

@section('main')

<h1>Edit Case_form</h1>
{{ Form::model($case_form, array('method' => 'PATCH', 'route' => array('case_forms.update', $case_form->id))) }}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('case_forms.show', 'Cancel', $case_form->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
