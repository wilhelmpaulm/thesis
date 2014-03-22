@extends('layouts.scaffold')

@section('main')

<h1>All Transmital_anexxes</h1>

<p>{{ link_to_route('transmital_anexxes.create', 'Add new transmital_anexx') }}</p>

@if ($transmital_anexxes->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Letter</th>
				<th>Title</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($transmital_anexxes as $transmital_anexx)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no transmital_anexxes
@endif

@stop
