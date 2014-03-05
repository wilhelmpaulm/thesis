@extends('layouts.scaffold')

@section('main')

<h1>All Case_observations</h1>

<p>{{ link_to_route('case_observations.create', 'Add new case_observation') }}</p>

@if ($case_observations->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Observation</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($case_observations as $case_observation)
				<tr>
					<td>{{{ $case_observation->observation }}}</td>
                    <td>{{ link_to_route('case_observations.edit', 'Edit', array($case_observation->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('case_observations.destroy', $case_observation->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no case_observations
@endif

@stop
