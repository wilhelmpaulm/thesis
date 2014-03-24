<?php $resources = Resource::where("division", "=", Auth::user()->division)->get() ?>

<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <h3 class="panel-title">{{Auth::user()->division}} Agents</h3>

        @if(Auth::user()->job_title == "Chief")
        <span class="btn-group btn-group-sm pull-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#addResource"><i class="fa fa-plus"></i></button>
        </span>
        @endif
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>details</th>
                    <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($resources as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>@if($a->status == "Available")<p class="label label-success">
                            @elseif($a->status == "On Leave")<p class="label label-warning">
                            @elseif($a->status == "Unavailable" || $a->status == "Inactive"  || $a->status == "Deceased")<p class="label label-danger">
                            @endif
                            {{$a->status}}</p></td>
                    <td>{{$a->category}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->details}}</td>
                    <td>{{$a->amount}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#viewAgent_{{$a->id}}"><i class="fa fa-eye"></i></button>
                            @if(Auth::user()->job_title == "Chief")
                            <button class="btn btn-warning" data-toggle="modal" data-target="#agent_{{$a->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>


@foreach($resources as $a)

<div class="modal  fade" id="agent_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update {{$a->name}} information</h4>
        </div>
        <form action="{{URL::to('resources/update/'.$a->id)}}" method="post">
            <div class="modal-body">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required="true" value="{{$a->name}}">
                <label>Amount</label>
                <input type="number" name="amount" class="form-control" required="true" value="{{$a->amount}}">
                <label>Category</label>
                <select name="category" class="form-control" required="true">
                    @foreach(Resource_category::all() as $rc)
                    @if($rc->name == $a->category)
                    <option selected="" value="{{$rc->name}}">{{$rc->name}}</option>
                    @else
                    <option value="{{$rc->name}}">{{$rc->name}}</option>
                    @endif
                    @endforeach
                </select>
                <label>Details</label>
                <textarea name="details" class="form-control" required="" rows="4" cols="20">{{$a->details}}</textarea>
                <label>Status</label>
                <select name="status" class="form-control" required="true">
                    <option>Available</option>
                    <option>Unavailable</option>
                </select>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm pull-right">
                      <button id="destroy_{{$a->id}}" type="button" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form >
    </div>
</div>

<div class="modal container  fade" id="viewAgent_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update {{$a->name}} information</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-md-2">

                    <p>{{$a->details}}</p>
                    <p class="label label-primary">{{$a->category}}</p>
                    <p class="label label-info">{{$a->status}}</p>
                    <p class="label label-default">{{$a->division}}</p>
                </div>
                <div class="col-md-10">
                    <?php $history = Resource_history::where("resource_id", "=", $a->id)->get(); ?>
                    <?php $cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get(); ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Borrowed by</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date Requested</th>
                                <th>Date Due</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($history as $h)
                           <?php $u = User::find($h->user_id)?>
                            <tr>
                                <td>{{$u->last_name.", ".$u->first_name}}</td>
                                <td>{{$h->amount}}</td>
                                <td>{{$h->status}}</td>
                                <td>{{$h->date_requested}}</td>
                                <td>{{$h->date_due}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
               


            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm pull-right">
              
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $("#destroy_{{$a->id}}").on("click", function() {
        $.post("{{URL::to('resources/destroy/'.$a->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach


<div class="modal  fade" id="addResource" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add resource</h4>
        </div>
        <form action="{{URL::to('resources/store')}}" method="post">
            <div class="modal-body">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required="true" value="">
                <label>Amount</label>
                <input type="number" name="amount" class="form-control" required="true" value="">
                <label>Category</label>
                <select name="category" class="form-control" required="true">
                    @foreach(Resource_category::all() as $rc)
                    <option value="{{$rc->name}}">{{$rc->name}}</option>
                    @endforeach
                </select>
                <label>Details</label>
                <textarea name="details" class="form-control" required="" rows="4" cols="20"></textarea>
                <label>Status</label>
                <select name="status" class="form-control" required="true">
                    <option>Available</option>
                    <option>Unavailable</option>
                </select>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm pull-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form >
    </div>
</div>