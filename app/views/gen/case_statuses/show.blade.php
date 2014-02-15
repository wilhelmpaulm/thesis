@extends('layouts.scaffold')

@section('main')

<h1>Show Case_status</h1>

<p>{{ link_to_route('case_statuses.index', 'Return to all case_statuses') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Status</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $case_status->status }}}</td>
                    <td>{{ link_to_route('case_statuses.edit', 'Edit', array($case_status->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_statuses.destroy', $case_status->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
