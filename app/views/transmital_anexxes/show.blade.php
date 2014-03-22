@extends('layouts.scaffold')

@section('main')

<h1>Show Transmital_anexx</h1>

<p>{{ link_to_route('transmital_anexxes.index', 'Return to all transmital_anexxes') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Letter</th>
				<th>Title</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $transmital_anexx->letter }}}</td>
					<td>{{{ $transmital_anexx->title }}}</td>
                    <td>{{ link_to_route('transmital_anexxes.edit', 'Edit', array($transmital_anexx->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('transmital_anexxes.destroy', $transmital_anexx->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
