<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Case List</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Agent</th>
                    <th>Date Reported</th>
                    <th>Date Assigned</th>
                    <th>Update at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cases as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>
                        @if($c->status == "Ongoing")<p class="label label-primary">
                        @elseif($c->status == "Pending")<p class="label label-warning">
                        @elseif($c->status == "Non-viable")<p class="label label-default">
                        @else<p class="label label-danger">
                        @endif
                        {{$c->status}}</p></td>
                    <td>
                        @if($c->status == "Pending")<a href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-pending/'.$c->id)}}">
                        @elseif($c->status == "Ongoing")<a href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-ongoing/'.$c->id)}}">
                        @elseif($c->status == "Non-viable")<a href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-non-viable/'.$c->id)}}">
                        @else<a href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-closed/'.$c->id)}}">
                        @endif
                        
                        {{$c->name}}</a></td>
                    <td>
                        <?php $case_type_tags = Case_type_tag::where("case_id", "=", $c->id)->get();?>
                        @foreach($case_type_tags as $ctt)
                        <p class="label label-info">
                            {{$ctt->type}}
                        </p> 
                        @endforeach
                        
                    </td>
                    <td>{{$c->agent_id}}</td>
                    <td>{{$c->date_reported}}</td>
                    <td>{{$c->date_assigned}}</td>
                    <td>{{$c->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<script>
   $(document).ready( function () {
	$('table').dataTable( {
//		"sDom": 'W<"clear">lfrtip'
	} );
} );
</script>