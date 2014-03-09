@extends('layouts.scaffold')

@section('main')

<h1>Show System_log</h1>

<p>{{ link_to_route('system_logs.index', 'Return to all system_logs') }}</p>

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
	</tbody>
</table>

@stop
