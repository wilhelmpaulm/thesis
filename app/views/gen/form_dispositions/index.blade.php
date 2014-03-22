@extends('layouts.scaffold')

@section('main')

<h1>All Form_coordinations</h1>

<p>{{ link_to_route('form_coordinations.create', 'Add new form_coordination') }}</p>

@if ($form_coordinations->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>=case_id</th>
				<th>Agent_id</th>
				<th>Area</th>
				<th>Time</th>
				<th>Date</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($form_coordinations as $form_coordination)
				<tr>
					<td>{{{ $form_coordination->=case_id }}}</td>
					<td>{{{ $form_coordination->agent_id }}}</td>
					<td>{{{ $form_coordination->area }}}</td>
					<td>{{{ $form_coordination->time }}}</td>
					<td>{{{ $form_coordination->date }}}</td>
                    <td>{{ link_to_route('form_coordinations.edit', 'Edit', array($form_coordination->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('form_coordinations.destroy', $form_coordination->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no form_coordinations
@endif

@stop
