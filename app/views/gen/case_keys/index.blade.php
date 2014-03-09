@extends('layouts.scaffold')

@section('main')

<h1>All Case_keys</h1>

<p>{{ link_to_route('case_keys.create', 'Add new case_key') }}</p>

@if ($case_keys->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Case_id</th>
				<th>Status</th>
				<th>Key</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($case_keys as $case_key)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no case_keys
@endif

@stop
