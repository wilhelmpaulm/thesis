<?php $resources = Resource::all(); ?>
<?php $resources_history = Resource_history::where("status", "=", "Approved")->where("user_id", "=", Auth::user()->id)->get(); ?>
<div   class="list-group" >
    <div class="">
        <div class="list-group-item">
            <div class="input-group input-group-sm">
                <input type="text" class="search form-control " placeholder="Search...">
                <span class="input-group-btn ">
                    <button class="btn btn-default sort" type="button" data-sort="list_name">
                        <i class="fa fa-sort"></i> A
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                        <i class="fa fa-sort"></i> #
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_category">
                        <i class="fa fa-sort"></i> Category
                    </button>
                </span>

            </div>
        </div>
        <div style="height: 450px; overflow-y: auto">
            <ul class="list list-unstyled    ">
                @foreach($resources_history as $r)
                <?php $res = Resource::find($r->resource_id); ?>
                <li style="">
                    <a  id=""href="#" data-toggle="modal" data-target="#user_resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                        <h4 class=" list_name ">{{$res->name}} ({{$r->amount}} pc/s.) </h4>
                        <p class="list_created_at label label-primary"> {{$res->division}}</p>
                            @if($r->status == 'Approved')<p class="label label-success list_status"><i class="fa fa-check"></i> 
                            @elseif($r->status == 'Disapproved')<p class="label label-danger list_status"><i class="fa fa-times"></i> 
                            @elseif($res->category == 'Pending')<p class="label label-warning list_status"><i class="fa fa-clock-o"></i> 
                            @endif
                            {{$r->status}}</p>
                        <p class="label label-default list_category">
                            @if($res->category == 'Gadget')<i class="fa fa-gamepad"></i> 
                            @elseif($res->category == 'Money')<i class="fa fa-money"></i> 
                            @elseif($res->category == 'Vehicle')<i class="fa fa-truck"></i> 
                            @elseif($res->category == 'Person')<i class="fa fa-user"></i> 
                            @endif
                            {{$res->category}}</p>
                        <p class="list_created_at label label-info"> <i class="fa fa-calendar"></i> {{$r->date_requested}} - {{$r->date_due}}</p>


                    </a>
                </li>
                @endforeach
            </ul>
        </div>


    </div>
</div>




@foreach($resources_history as $rh)
<?php $resource = Resource::find($rh->id); ?>
<div class="modal fade  container" id="user_resource_{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">{{$resource->name}}</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-2">

                    <p>{{$resource->details}}</p>
                    <p class="label label-primary">{{$resource->category}}</p>
                    <p class="label label-info">{{$resource->status}}</p>
                    <p class="label label-default">{{$resource->division}}</p>
                </div>
                <div class="col-md-7">
                    <?php $history = Resource_history::where("resource_id", "=", $resource->id)->get(); ?>
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
                            <tr>
                                <td>{{$h->user_id}}</td>
                                <td>{{$h->amount}}</td>
                                <td>{{$h->status}}</td>
                                <td>{{$h->date_requested}}</td>
                                <td>{{$h->date_due}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-md-3">
                    <form method="POST" action="{{URL::to('resource_histories/request')}}">
                        <div class="form-group ">
                            <input type="hidden" name="resource_id" value="{{$r->id}}">
                            <label >Case</label>
                            <select name="case_id" class="form-control">
                                @foreach($cases as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            <label >Date Requested</label>
                            <input class="form-control" type="date" value="{{$r->date_requested}}" name="date_requested">
                            <label >Date Due</label>
                            <input class="form-control" type="date" value="{{$r->date_due}}" name="date_due">
                            <label >Amount</label>
                            <input class="form-control" min="1" max="{{$r->amount}}"  type="number" value="1" name="amount">
                        </div>
                </div>


            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
            </form>
        </div>
    </div>

</div>


@endforeach





<script>
    var options = {
        valueNames: ['list_name', 'list_status', 'list_category'],
        //        plugins: [ListFuzzySearch()]
    };


        $(".table").dataTable();

    var resList = new List('userResource', options);

    //    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
    //    return $(window).height() - 165; 
    //}

</script>
