@extends('layouts.scaffold')

@section('main')

<h1>All Coordination_members</h1>

<p>{{ link_to_route('coordination_members.create', 'Add new coordination_member') }}</p>

@if ($coordination_members->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Agency</th>
				<th>Name</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($coordination_members as $coordination_member)
				<tr>
					<td>{{{ $coordination_member->agency }}}</td>
					<td>{{{ $coordination_member->name }}}</td>
                    <td>{{ link_to_route('coordination_members.edit', 'Edit', array($coordination_member->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('coordination_members.destroy', $coordination_member->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no coordination_members
@endif

@stop
