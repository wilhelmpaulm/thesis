<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-clipboard"></i> Case Requirements</p>
        <span class="btn-group btn-group-sm pull-right">
            @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addCaseRequirement">
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
                    <th>Requirement</th>
                    <th>Date Requested</th>
                    <th>Date Due</th>
                    <th>Date Received</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($case_requirements as $cq)

                <tr  class="clickable" >
                    <td>{{$cq->id}}</td>
                    <td>{{$cq->requirement}} </td>
                    <td>{{$cq->date_requested}}</td>
                    <td>{{$cq->date_due}}</td>
                    <td>{{$cq->date_received}}</td>
                    <td>@if($cq->status == "Active")<p class="label label-success">
                            @else<p class="label label-danger">
                            @endif

                            {{$cq->status}}</p></td>
                    <td>
                        @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                        <div class="btn-group btn-group-sm pull-right pull-right">

                            <button class="btn btn-warning"data-toggle="modal" data-target="#editCaseRequirement_{{$cq->id}}"><i class="fa fa-wrench"></i></button>
                        </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@foreach($case_requirements as $cq)
<div id="editCaseRequirement_{{$cq->id}}" class="modal  fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Case Subject</h4>
        </div>
        <form action="{{URL::to('case_requirements/update/'.$cq->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                <label>Requirements</label>
                <input class="form-control" type="text" name="requirement" value="{{$cq->requirement}}">
                <div class="row">
                    <div class="col-md-6">
                        <label>Date Requested</label>
                        <input class="form-control" type="date" name="date_requested" value="{{$cq->date_requested}}">
                        <label>Date Due</label>
                        <input class="form-control" type="date" name="date_due" value="{{$cq->date_due}}">
                    </div>
                    <div class="col-md-6">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option>Active</option>
                            <option>Deactivated</option>
                        </select>
                        <label>Date Received</label>
                        <input class="form-control" type="date" name="date_received" value="{{$cq->date_received}}">
                    </div>
                </div>
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

<div id="addCaseRequirement" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Case Requirements</h4>
        </div>
        <form action="{{URL::to('case_requirements/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                <!--                <label>Requirements</label>-->
                                <!--<input class="form-control" type="text" name="requirement">-->
                <label>Requirements</label>
                <div class="row">
                    <div class="col-md-4">
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        
                    </div>
                    <div class="col-md-4">
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        
                    </div>
                    <div class="col-md-4">
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        <label class="btn btn-default btn-sm btn-block">
                            <input class="" type="checkbox" name="requirement[]" value="Medico-legal"> Medico-legal
                        </label>
                        <br>
                        
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <label>Date Requested</label>
                        <input class="form-control" type="date" name="date_requested">
                    </div>
                    <div class="col-md-3">
                        <label>Date Due</label>
                        <input class="form-control" type="date" name="date_due">
                    </div>
                </div>
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


