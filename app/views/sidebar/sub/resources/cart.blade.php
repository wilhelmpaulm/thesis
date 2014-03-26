<?php $resources = Resource::all(); ?>
<?php $resources_history = Resource_history::where("status", "=", "Pending")->where("user_id", "=", Auth::user()->id)->get(); ?>
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bell"></i> Pending Resource Requests</h3>
    </div>
    <div   class="list-group" id="listli">
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




                            <h4 class=" list_name ">{{$res->name}}</h4>
                            <p class="label label-info list_status">{{$r->status}}</p>
                            <p class="label label-default list_category">{{$res->category}}</p>
                            <p class="list_created_at label label-info">{{$res->created_at}}</p>


                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>




@foreach($resources_history as $rh)
<?php $resource = Resource::find($rh->resource_id); ?>
<div class="modal fade  container" id="user_resource_{{$rh->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">{{$resource->name}}</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <p>{{$resource->details}}</p>
                    <p class="label label-primary">{{$resource->category}}</p>
                    <p class="label label-info">{{$resource->status}}</p>
                    <p class="label label-default">{{$resource->division}}</p>
                    <hr>
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
                <div class="col-md-4">
                    <form method="POST" action="{{URL::to('resource_histories/update/'.$rh->id)}}">
                        <div class="form-group ">
                            <input type="hidden" name="resource_id" value="{{$r->id}}">
                            <label >Case</label>
                            <select name="case_id" class="form-control">
                                @foreach($cases as $c)
                                @if($rh->case_id == $c->id)
                                <option selected="" value="{{$c->id}}">{{$c->name}}</option>
                                @else
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endif
                                @endforeach
                            </select>
                            <label >Date Requested</label>
                            <input class="form-control" type="date" value="{{$rh->date_requested}}" name="date_requested">
                            <label >Date Due</label>
                            <input class="form-control" type="date" value="{{$rh->date_due}}" name="date_due">
                            <label >Details</label>
                            <textarea name="details" class="form-control" rows="4" cols="20">{{$rh->details}}</textarea>
                            <label >Amount</label>
                            <input class="form-control" min="1" max="{{$r->amount}}"  type="number" value="{{$rh->amount}}" name="amount">
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

    var xList = new List('listli', options);

    //    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
    //    return $(window).height() - 165; 
    //}

</script>
