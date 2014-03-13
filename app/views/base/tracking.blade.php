@extends("layouts.base3")
@section("main")
<?php
$key = "";
if (Input::get("key") != null) {
    $key = Input::get("key");
}
?>



<div class="panel panel-black c-black">
    <div class="panel-heading">
        <h3 class="panel-title">Case Tracking</h3>
    </div>
    <form>
        <div class="panel-body">
            <label>Enter tracking number </label>
            <input type="text" name="key" placeholder="" class="form-control" value="{{$key}}">
        </div>
        <div class="panel-footer clearfix">
            <span class="btn-group btn-group-sm pull-right">
                <button class="btn btn-primary">Submit</button>
            </span>
        </div>
    </form>
</div>


@if(Input::get("key")!=null)
<?php $case_key = Case_key::where("key", "=", $key)->first(); ?>

@if($case_key !=null)

<?php $case_requirements = Case_requirement::where("case_id", "=", $case_key->case_id)->get(); ?>
<?php $case = Kase::find($case_key->case_id); ?>



<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">{{$case_key->owner." - ".$case->name}}</h3>
    </div>
    <div class="panel-body c-black">
        
        @if($case_key->status == "Active")
         <table class="table table-condensed table-bordered ">
            <thead>
                <tr>
                    <th width="50%">Requirement</th>
                    <th>Requested</th>
                    <th>Due</th>
                    <th>Received</th>
                    <th>Status</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($case_requirements as $cq)
                <tr  class="" >
                    <td>{{$cq->requirement}} </td>
                    <td><p class="label label-info">{{$cq->date_requested}}</p></td>
                    <td><p class="label label-info">{{$cq->date_due}}</p></td>
                    <td><p class="label label-info">{{$cq->date_received}}</p></td>
                    <td>@if($cq->status == "Active")<p class="label label-warning">
                            @else<p class="label label-success">
                            @endif
                            {{$cq->status}}</p></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="lead">Your key has been deactivated please contact your assigned agent</p>
        @endif
     </div>
</div>
@endif
@endif


<script>
$("table").dataTable();

</script>

@stop