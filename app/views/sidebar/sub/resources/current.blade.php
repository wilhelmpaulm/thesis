<?php $resources = Resource::all(); ?>
<?php $resources_history = Resource_history::where("user_id", "=", Auth::user()->id)->where("status", "=", "Approved")->orWhere("status", "=", "Received")->get(); ?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-exchange"></i> Current Resources</h3>
    </div>
    <div id="userResource"  class="list-group" >
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
                            <i class="fa fa-sort"></i> <i class="fa fa-list-alt"></i>
                        </button>
                        <button class="btn btn-default sort" type="button" data-sort="list_division">
                            <i class="fa fa-sort"></i> <i class="fa fa-check"></i>
                        </button>
                    </span>

                </div>
            </div>
            <div style="height: 450px; overflow-y: auto">
                <ul class="list list-unstyled    ">
                    @foreach($resources_history as $r)
                    <?php $res = Resource::find($r->resource_id); ?>
                    <li style="">
                        <a  id=""href="#" data-toggle="modal" data-target="#user_resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link ">




                            <h4 class=" list_name ">{{$res->name}} ({{$r->amount}} pc/s.) </h4>
                            <p class="list_division label label-primary"> {{$res->division}}</p>
                            @if($r->status == 'Approved')<p class="label label-success list_status"><i class="fa fa-check"></i> 
                                @elseif($r->status == 'Disapproved')<p class="label label-danger list_status"><i class="fa fa-times"></i> 
                                @elseif($r->status == 'Pending' || $r->status == "Received")<p class="label label-warning list_status"><i class="fa fa-clock-o"></i> 
                                @endif
                                {{$r->status}}</p>
                            <p class="label label-default list_category">
                                @if($res->category == 'Gadget')<i class="fa fa-gamepad"></i> 
                                @elseif($res->category == 'Money')<i class="fa fa-money"></i> 
                                @elseif($res->category == 'Vehicle')<i class="fa fa-truck"></i> 
                                @elseif($res->category == 'Person')<i class="fa fa-user"></i> 
                                @elseif($res->category == 'Equipment')<i class="fa fa-cogs"></i> 
                                @endif
                                {{$res->category}}</p>
                            @if(Time::toNum($r->date_due)< Time::getDateTodayInt())<p class="list_created_at label label-danger"> 
                                @elseif(Time::toNum($r->date_due) == Time::getDateTodayInt())<p class="list_created_at label label-warning"> 
                                @else<p class="list_created_at label label-info"> 
                                @endif
                                START {{$r->date_requested}} - END {{$r->date_due}}</p>


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
                <div class="col-md-2">

                    <p>{{$resource->details}}</p>
                    <p class="label label-primary">{{$resource->category}}</p>
                    <p class="label label-info">{{$resource->status}}</p>
                    <p class="label label-default">{{$resource->division}}</p>
                </div>
                <div class="col-md-7">
                    <?php $history = Resource_history::where("resource_id", "=", $resource->id)->get(); ?>
                    <?php $case = Kase::find($rh->case_id); ?>

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
                            @if($h->id == $rh->id)<tr class="info">
                                @else <tr class="">    
                                @endif
                                <?php $u = User::find($h->user_id)?>
                            
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
                <div class="col-md-3">
                    @if(Time::toNum($rh->date_due)< Time::getDateTodayInt() || $rh->status == "Received")
                    <form method="POST" action="{{URL::to('resource_histories/return/'.$rh->id)}}">
                        <!--passed-->
                        @elseif(Time::toNum($rh->date_requested) <= Time::getDateTodayInt())
                        <form method="POST" action="{{URL::to('resource_histories/receive/'.$rh->id)}}">
                            <!--pwede pa-->
                            @else
                            <!--LOLOLOL-->
                            @endif
                            <p>Requested for:</p>
                            <p>{{$case->name}}</p>
                            <p>Date Requested:</p>
                            <p>{{$rh->date_requested}}</p>
                            <p>Date Due:</p>
                            <p>{{$rh->date_due}}</p>
                            <p>Amount:</p>
                            <p>{{$rh->amount}}</p>

                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group btn-group-sm">
                                    @if(Time::toNum($rh->date_due)< Time::getDateTodayInt())
                                    <button type="submit" class="btn btn-danger">Return / Cancel</button>
                                    @elseif($rh->status == "Received" || Time::toNum($rh->date_due)== Time::getDateTodayInt())
                                    <button type="submit" class="btn btn-warning">Return / Cancel</button>
                                    <!--passed-->
                                    @elseif(Time::toNum($rh->date_requested) <= Time::getDateTodayInt())
                                    <button type="submit" class="btn btn-primary">Receive</button>
                                    <!--pwede pa-->
                                    @else
                                    <!--LOLOLOL-->
                                    @endif
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                        </form>
                </div>

            </div>


            @endforeach





            <script>
                var options = {
                    valueNames: ['list_name', 'list_division', 'list_created_at', 'list_category'],
                    //        plugins: [ListFuzzySearch()]
                };


                $(".table").dataTable();

                var resList = new List('userResource', options);

                //    $.fn.modal.defaults.maxHeight = function(){
                // subtract the height of the modal header and footer
                //    return $(window).height() - 165; 
                //}

            </script>
