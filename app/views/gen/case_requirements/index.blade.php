@extends('layouts.scaffold')

@section('main')

<h1>All Case_requirements</h1>

<p>{{ link_to_route('case_requirements.create', 'Add new case_requirement') }}</p>

@if ($case_requirements->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Case_id</th>
				<th>Status</th>
				<th>Requirement</th>
				<th>Date_requested</th>
				<th>Date_due</th>
				<th>Date_received</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($case_requirements as $case_requirement)
				<tr>
					<td>{{{ $case_requirement->case_id }}}</td>
					<td>{{{ $case_requirement->status }}}</td>
					<td>{{{ $case_requirement->requirement }}}</td>
					<td>{{{ $case_requirement->date_requested }}}</td>
					<td>{{{ $case_requirement->date_due }}}</td>
					<td>{{{ $case_requirement->date_received }}}</td>
                    <td>{{ link_to_route('case_requirements.edit', 'Edit', array($case_requirement->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_requirements.destroy', $case_requirement->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no case_requirements
@endif

@stop
