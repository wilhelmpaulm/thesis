<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-key"></i> Case Keys</p>
        <span class="btn-group btn-group-sm pull-right">
             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addCaseKey">
                <i class="fa fa-plus"></i> 
            </button>
             @endif
        </span>
    </div>
    <div class="panel-body">
        <table class="table  table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Key</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($case_keys as $ck)
                <tr  class="clickable" >
                    <td>{{$ck->id}}</td>
                    <td>{{$ck->owner}} </td>
                    <td>{{$ck->key}}</td>
                    <td>@if($ck->status == "Active")<p class="label label-success">
                            @else<p class="label label-danger">
                            @endif
                            
                            {{$ck->status}}</p></td>
                    <td>
                        <div class="btn-group btn-group-sm pull-right pull-right">
                             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editCaseKey_{{$ck->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@foreach($case_keys as $ck)
<div id="editCaseKey_{{$ck->id}}" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Case Key</h4>
        </div>
        <form action="{{URL::to('case_keys/update/'.$ck->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                <label>Enter Key Owner</label>
                <input class="form-control" type="text" name="owner" value="{{$ck->owner}}">
                <label>Key </label>
                <input disabled="" class="form-control" type="text" name="owner" value="{{$ck->key}}">
                <label>Status</label>
                <select name="status" class="form-control">
                    
                    <option>Active</option>
                    <option>Deactivated</option>
                </select>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>
@endforeach

<div id="addCaseKey" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Case Key</h4>
        </div>
        <form action="{{URL::to('case_keys/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                <label>Enter Key Owner</label>
                <input class="form-control" type="text" name="owner">
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->


