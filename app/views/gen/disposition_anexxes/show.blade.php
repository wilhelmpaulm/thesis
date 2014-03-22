@extends('layouts.scaffold')

@section('main')

<h1>Show Disposition_anexx</h1>

<p>{{ link_to_route('disposition_anexxes.index', 'Return to all disposition_anexxes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Letter</th>
				<th>Title</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $disposition_anexx->letter }}}</td>
					<td>{{{ $disposition_anexx->title }}}</td>
                    <td>{{ link_to_route('disposition_anexxes.edit', 'Edit', array($disposition_anexx->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('disposition_anexxes.destroy', $disposition_anexx->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
