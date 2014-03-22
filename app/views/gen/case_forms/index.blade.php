@extends('layouts.scaffold')

@section('main')

<h1>All Case_forms</h1>

<p>{{ link_to_route('case_forms.create', 'Add new case_form') }}</p>

@if ($case_forms->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Case_id</th>
				<th>Form_id</th>
				<th>Form_type</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($case_forms as $case_form)
				<tr>
					<td>{{{ $case_form->case_id }}}</td>
					<td>{{{ $case_form->form_id }}}</td>
					<td>{{{ $case_form->form_type }}}</td>
                    <td>{{ link_to_route('case_forms.edit', 'Edit', array($case_form->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_forms.destroy', $case_form->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no case_forms
@endif

@stop
