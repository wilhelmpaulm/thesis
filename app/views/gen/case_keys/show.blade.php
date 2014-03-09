@extends('layouts.scaffold')

@section('main')

<h1>Show Case_key</h1>

<p>{{ link_to_route('case_keys.index', 'Return to all case_keys') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Case_id</th>
				<th>Status</th>
				<th>Key</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $case_key->case_id }}}</td>
					<td>{{{ $case_key->status }}}</td>
					<td>{{{ $case_key->key }}}</td>
                    <td>{{ link_to_route('case_keys.edit', 'Edit', array($case_key->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_keys.destroy', $case_key->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
