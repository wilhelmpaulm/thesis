<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-table"></i> Case Resources</p>
        
    </div>
    <div class="panel-body">
        <table class="table  table-condensed table-bordered table-striped">
            <thead>
                <tr>
                    <th>category</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Amount</th>
                    <th>Date Requested</th>
                    <th>Date Due</th>
                    <th>Date Returned</th>
                </tr>
            </thead>
            <tbody>
                @foreach($case_resources as $cq)
                <?php $r = Resource::find($cq->resource_id);?>
                <tr  class="clickable" >
                    <td>{{$r->category}}</td>
                    <td>{{$r->name}}</td>
                    <td>@if($cq->status == "Active")<p class="label label-success">
                            @else<p class="label label-warning">
                            @endif
                            {{$cq->status}}</p></td>
                    <td>{{$cq->amount}}</td>
                    <td>{{$cq->date_requested}}</td>
                    <td>{{$cq->date_due}}</td>
                    <td>{{$cq->date_returned}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>