@extends('layouts.scaffold')

@section('main')

<h1>All Cross_references</h1>

<p>{{ link_to_route('cross_references.create', 'Add new cross_reference') }}</p>

@if ($cross_references->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Reference_id</th>
				<th>Tags_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($cross_references as $cross_reference)
				<tr>
					<td>{{{ $cross_reference->reference_id }}}</td>
					<td>{{{ $cross_reference->tags_id }}}</td>
                    <td>{{ link_to_route('cross_references.edit', 'Edit', array($cross_reference->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('cross_references.destroy', $cross_reference->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no cross_references
@endif

@stop
