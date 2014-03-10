@extends('layouts.scaffold')

@section('main')

<h1>All Form_subpoenas</h1>

<p>{{ link_to_route('form_subpoenas.create', 'Add new form_subpoena') }}</p>

@if ($form_subpoenas->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Case_id</th>
				<th>Agent_id</th>
				<th>Location</th>
				<th>Time</th>
				<th>Date_requested</th>
				<th>Date_signed</th>
				<th>Chief</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($form_subpoenas as $form_subpoena)
				<tr>
					<td>{{{ $form_subpoena->case_id }}}</td>
					<td>{{{ $form_subpoena->agent_id }}}</td>
					<td>{{{ $form_subpoena->location }}}</td>
					<td>{{{ $form_subpoena->time }}}</td>
					<td>{{{ $form_subpoena->date_requested }}}</td>
					<td>{{{ $form_subpoena->date_signed }}}</td>
					<td>{{{ $form_subpoena->chief }}}</td>
                    <td>{{ link_to_route('form_subpoenas.edit', 'Edit', array($form_subpoena->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('form_subpoenas.destroy', $form_subpoena->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no form_subpoenas
@endif

@stop
