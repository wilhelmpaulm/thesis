<?php $case_observations = Case_observation::where("user_id", "=", $case->agent_id)->where("case_id", "=", $case->id)->get(); ?>
<?php $case_keys = Case_key::where("case_id", "=", $case->id)->get(); ?>
<?php $case_requirements = Case_requirement::where("case_id", "=", $case->id)->get(); ?>
<?php $case_resources = Resource_history::where("case_id", "=", $case->id)->where("status", "=", "Approved")->orWhere("status", "=", "Received")->orWhere("status", "=", "Returned")->get(); ?>

<div id="content">
    <div class="navbar navbar-default ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand"href="#details" data-toggle="tab">Case No. 555{{$case->id}}</a>-->
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#details" data-toggle="tab">Case No. {{$case->id}}</a></li>
                <li class=""><a href="#observations" data-toggle="tab">Observations</a></li>
                <li><a href="#res" data-toggle="tab">Resources</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evidences <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#recording" data-toggle="tab">Recording</a></li>
                        <li><a href="#photo" data-toggle="tab">Pictures</a></li>
                        <li><a href="#video" data-toggle="tab">Video</a></li>
                        <li><a href="#document" data-toggle="tab">Document</a></li>
                        <li><a href="#object" data-toggle="tab">Object</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clients <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#victims" data-toggle="tab">Victims</a></li>
                        <li><a href="#subjects" data-toggle="tab">Subjects</a></li>
                        <li><a href="#keys" data-toggle="tab">Generated Keys</a></li>
                        <li><a href="#requests" data-toggle="tab">Requested Documents</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#activity" data-toggle="tab">Activity log</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Edit Details</a></li>
                        <li><a href="#">Set Permissions</a></li>
                        @if($case->status == "Ongoing")
                        <li><a href="#" data-toggle="modal" data-target="#caseClose">Close Case</a></li>
                        @endif
                        @if($case->status != "Ongoing")
                        <li><a href="#" data-toggle="modal" data-target="#caseReopen">Reopen Case</a></li>
                        @endif
                        @if(Auth::user()->job_title == "Chief")
                        <li><a href="#" data-toggle="modal" data-target="#caseReassign">Reassign Case</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div>



    <!-- Tab panes -->





    <div class="tab-content">
        <div class="tab-pane active" id="details">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$case->name}}</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <h4>Date Assigned</h4>
                            <p>{{$case->date_assigned}}</p>
                        </div>
                        <div class="col-lg-3">
                            <h4>Details</h4>
                            <p>{{$case->details}}</p>
                        </div>
                        <div class="col-lg-3">
                            <h4>Complainant</h4>
                            <?php $complainant = Client::find($case->complainant_id); ?>
                            <p>{{$complainant->last_name.", ".$complainant->first_name}}</p>
                            <p>{{$complainant->gender}}</p>
                        </div>
                        <div class="col-lg-3">
                            <h4>Date Assigned</h4>
                            <p>{{$case->date_assigned}}</p>
                        </div>


                    </div>
                </div>
            </div>


        </div>
        <!--PICTURES TABLE-->  
        <div class="tab-pane" id="observations">
            @include("gen.case_observations.show")

        </div>



        <div class="tab-pane" id="recording">
            @include("gen.evidence_recordings.show")

        </div>
        <!--PICTURES TABLE-->  
        <div class="tab-pane" id="photo">
            @include("gen.evidence_pictures.show")
        </div>
        <!--VIDEOS TABLE-->  
        <div class="tab-pane" id="video">
            @include("gen.evidence_videos.show")
        </div>
        <!--DOCUMENTS TABLE-->  
        <div class="tab-pane" id="document">
            @include("gen.evidence_documents.show")
        </div>
        <!--OBJECT TABLE-->
        <div class="tab-pane" id="object">
            @include("gen.evidence_objects.show")
        </div>

        <div class="tab-pane" id="victims">
            @include("gen.case_victims.show")
        </div>
        <div class="tab-pane" id="subjects">
            @include("gen.case_subjects.show")
        </div>
        <div class="tab-pane" id="timeline">
            @include("content.reports.case_timeline")
        </div>
        <div class="tab-pane" id="activity">
            <!--ACTIVITY HERE-->
        </div>
        <div class="tab-pane" id="keys">
            @include("gen.case_keys.show")
            <!--ACTIVITY HERE-->
        </div>
        <div class="tab-pane" id="requests">
            @include("gen.case_requirements.show")
            <!--ACTIVITY HERE-->
        </div>
        <div class="tab-pane" id="res">
            @include("gen.resources.show")
        </div>

    </div>




</div>

<script>

//    alert("mega fox");

//    alert("mega fox");
//    
//    $("table").removeClass("table");
//    var xx = ["<td>asdasd</td>","<td>asdasd</td>","<td>asdasd</td>","<td>asdasd</td>","<td>asdasd</td>"];
//    $("table tbody").append("<tr><td>asdasd</td><td>asdasd</td><td>asdasd</td><td>asdasd</td><td>asdasd</td></tr>")
//    $("#trd tbody").append($("#trd").html());
//    alert($("#trd").html());
//    dt.fnDraw();
//    $(".table").dataTable();

//    $("table").removeClass("table");
//    
//    $(".table").dataTable();
//    $("table").addClass("table");
    $(".table").dataTable();

    var url = document.location.toString();
    if (url.match('#')) {
        $(' a[href=#' + url.split('#')[1] + ']').tab('show');
    }

// Change hash for page-reload
//    $('a').on('shown', function(e) {
//        window.location.hash = e.target.hash;
//    });
</script>




<div class="modal fade" id="caseClose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Close Case</h4>
        </div>
        <form action="{{URL::to("cases/close/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>password</label>
                <input class="form-control" name="password" type="text">
                {{Auth::user()->password}}
                <label>Status</label>
                <select class="form-control" name="status">
                    <option>Non-viable</option>
                    <option>Closed_Unfinished</option>
                    <option>Closed_Finished</option>
                </select>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm pull-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="caseReopen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Reopen Case</h4>
        </div>
        <form action="{{URL::to("cases/reopen/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>password</label>
                <input class="form-control" name="password" type="password">

            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm pull-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="caseReassign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Reassign Case</h4>
        </div>
        <form action="{{URL::to("cases/reassign/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>password</label>
                <input class="form-control" name="password" type="password">
                <label>Agent</label>
                <select class="form-control" name="agent_id">
                    @foreach(User::where("division", "=", Auth::user()->division)->get() as $a)
                    <option>{{$a->id." ".$a->last_name.", ".$a->first_name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm pull-right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>