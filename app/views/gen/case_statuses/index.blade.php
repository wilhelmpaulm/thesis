@extends('layouts.scaffold')

@section('main')

<h1>All Case_statuses</h1>

<p>{{ link_to_route('case_statuses.create', 'Add new case_status') }}</p>

@if ($case_statuses->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Status</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($case_statuses as $case_status)
				<tr>
					<td>{{{ $case_status->status }}}</td>
                    <td>{{ link_to_route('case_statuses.edit', 'Edit', array($case_status->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_statuses.destroy', $case_status->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no case_statuses
@endif

@stop
