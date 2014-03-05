<?php $agents = User::where("division", "=", Auth::user()->division)->where("job_title", "!=", "Secretary")->get(); ?>

<div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i> {{Auth::user()->division}} Agents</h3>
            </div>
            <div  id="agent_list" class="list-group" >
                <div class="list-group-item ">
                    <div class="input-group custom-search-form input-group-sm">
                        <input type="text" class="search form-control " placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default sort" type="button" data-sort="list_name">
                                <i class="fa fa-sort-alpha-asc"></i>
                            </button>
                            <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                                <i class="fa fa-sort-numeric-asc"></i>
                            </button>
                        </span>

                    </div>
                </div>

                <div style="height: 450px; overflow-y:auto">

                    <ul class="list list-unstyled    ">
                        @foreach($agents as $a)
                        <li><a  id="" data-toggle="modal" data-target="#agent_details_{{$a->id}}" class="list-group-item c_link">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{URL::asset('nbi/agent/picture/'.$a->file_picture)}}" width="100%" class="img-rounded">
                                    </div>
                                    <div class="col-lg-8">
                                        <h4 class="list-group-item-heading list_name ">{{$a->last_name.", ".$a->first_name}}</h4>
                                        <p class="list-group-item-text ">{{$a->id}}</p>
                                        <p class="list-group-item-text list_details">{{$a->job_title}}</p>
                                        <!--<p class=" list_created_at text-muted">{{$a->created_at}}</p>-->
                                    </div>
                                </div>

                            </a></li>
                        @endforeach
                    </ul>

                </div>

            </div>
        </div>
    </div>


    @foreach($agents as $a)
    <?php
    $contacts = User_contact::where("user_id", "=", $a->id)->get();
    $languages = User_language::where("user_id", "=", $a->id)->get();
//$ucs_similar = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Ongoing")->get();
    $ucs_ongoing = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Ongoing")->get();
    $ucs_nonviable = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Non-viable")->get();
    $ucs_pending = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Pending")->get();
    $ucs_unfinished = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_Unfinished")->get();
    $ucs_finished = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_Finished")->get();
    $ucs = Kase::where("agent_id", "=", $a->id)->where("status", "!=", "Pending")->get();

    $criteria = [
        "agent_id" => $a->id,
        "cases_held" => $ucs->count(),
        "cases_ongoing" => $ucs_ongoing->count(),
        "cases_finished" => $ucs_finished->count(),
    ];

    array_push($aCom, $criteria);
    ?>
    <div class="modal fade container" id="agent_details_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{$a->last_name.", ".$a->first_name}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-1">
                        <img src="{{URL::asset('nbi/agent/picture/'.$a->file_picture)}}" width="100%" class="img-rounded">
                    </div>
                    <div class="col-lg-3">
                        <h4>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</h4>
                        <p>{{$a->id}}</p>
                        <p>{{$a->division}}</p>
                        <p>{{$a->job_title}}</p>

                        @foreach($contacts as $c)
                        @if($c->type == "Email")<p class=""><i class="fa fa-envelope"></i> 
                            @elseif($c->type == "Mobile")<p class=""><i class="fa fa-phone"></i> 
                            @endif {{$c->contact}}</p>
                        @endforeach
                    </div>
                    <div class="col-lg-2">
                        <h4>Languages Spoken</h4>
                        @foreach($languages as $l)
                        <p class="">- {{$l->language}}</p>
                        @endforeach

                    </div>
                    <div class="col-lg-6">
                        <h4 class="">Cases Breakdown</h4>
                        <div class="progress progress-striped active">
                            <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: {{($ucs_ongoing->count()    /$ucs->count())*100}}%">
                                <span class="">{{round($ucs_ongoing->count()    /$ucs->count(), 2)*100}}%</span>
                            </div>
                            <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: {{($ucs_finished->count()    /$ucs->count())*100}}%">
                                <span class="">{{round($ucs_finished->count()    /$ucs->count(),2)*100}}%</span>
                            </div>
                            <div class="progress-bar progress-bar-warning"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: {{($ucs_unfinished->count()    /$ucs->count())*100}}%">
                                <span class="">{{round($ucs_unfinished->count()    /$ucs->count(), 2)*100}}%</span>
                            </div>
                            <div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: {{($ucs_nonviable->count()    /$ucs->count())*100}}%">
                                <span class="">{{round($ucs_nonviable->count()    /$ucs->count(),2)*100}}%</span>
                            </div>
                        </div>
                        <p class="label label-primary">Ongoing </p>
                        <p  class="label label-success">Closed Finished </p>
                        <p class="label label-warning">Closed Unfinished </p>
                        <p class="label label-info">Closed Non-viable </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="">Ongoing {{$ucs_ongoing->count()}}/{{$ucs->count()}} </p>
                                <p  class="">Closed Finished {{$ucs_finished->count()}}/{{$ucs->count()}}</p>

                            </div>
                            <div class="col-md-6">
                                <p class="">Closed Unfinished {{$ucs_unfinished->count()}}/{{$ucs->count()}}</p>
                                <p class="">Closed Non-viable {{$ucs_nonviable->count()}}/{{$ucs->count()}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{URL::to('cases/assign/'.$case->id)}}" method="POST">
                    <input type="hidden" value="{{$a->id}}" name="agent_id">
                    <span class="btn-group btn-group-sm ">
                        <button  class="btn btn-primary">Assign Case</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <script>
        var options = {
            valueNames: ['list_name', 'list_created_at', 'list_details']
        };

        var agentList = new List('agent_list', options);


    </script>
    <div class="col-lg-6">
        @include("sidebar.sub.cases.agent_summary")


    </div>
</div>