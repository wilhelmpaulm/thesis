@extends('layouts.scaffold')

@section('main')

<h1>All System_logs</h1>

<p>{{ link_to_route('system_logs.create', 'Add new system_log') }}</p>

@if ($system_logs->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>User_id</th>
				<th>Reference_id</th>
				<th>Table</th>
				<th>Type</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($system_logs as $system_log)
				<tr>
					<td>{{{ $system_log->user_id }}}</td>
					<td>{{{ $system_log->reference_id }}}</td>
					<td>{{{ $system_log->table }}}</td>
					<td>{{{ $system_log->type }}}</td>
					<td>{{{ $system_log->action }}}</td>
                    <td>{{ link_to_route('system_logs.edit', 'Edit', array($system_log->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('system_logs.destroy', $system_log->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no system_logs
@endif

@stop
