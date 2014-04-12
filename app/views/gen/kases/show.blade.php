<?php $case_observations = Case_observation::where("case_id", "=", $case->id)->get(); ?>
<?php $case_keys = Case_key::where("case_id", "=", $case->id)->get(); ?>
<?php $case_requirements = Case_requirement::where("case_id", "=", $case->id)->get(); ?>
<?php $case_resources = Resource_history::where("case_id", "=", $case->id)->where("status", "=", "Approved")->orWhere("status", "=", "Received")->orWhere("status", "=", "Returned")->get(); ?>
<?php $complaint = Complaint::find($case->complaint_id); ?>
<?php $logs = System_log::where("case_id", "=", $case->id)->orderBy("created_at", "desc")->get(); ?>
<?php $forms = Case_form::where("case_id", "=", $case->id)->orderBy("created_at", "desc")->get(); ?>
<?php 
    $ctags = [];
foreach($case_type_tags as $ctt){
        array_push($ctags, $ctt->type);
        
    }

?>
<?php $typetags = Case_type::all(); ?>

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evidence <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#recording" data-toggle="tab">Recordings</a></li>
                        <li><a href="#photo" data-toggle="tab">Pictures</a></li>
                        <li><a href="#video" data-toggle="tab">Videos</a></li>
                        <li><a href="#document" data-toggle="tab">Documents</a></li>
                        <li><a href="#object" data-toggle="tab">Objects</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clients <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#victims" data-toggle="tab">Victims</a></li>
                        <li><a href="#subjects" data-toggle="tab">Subjects</a></li>
                        <li><a href="#keys" data-toggle="tab">Generated Keys</a></li>
                        <li><a href="#requests" data-toggle="tab">Case Requirements</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#form" data-toggle="tab">Forms</a></li>
                        <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
                        <li><a href="#activity" data-toggle="tab">Activity log</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        @if($case->division == Auth::user()->division)
                        @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                        <li><a href="#" data-toggle="modal" data-target="#editDetails">Edit Details</a></li>
                        <!--<li><a href="#">Set Permissions</a></li>-->
                        @endif
                        @if($case->status == "Pending" && ("Chief" == Auth::user()->job_title|| "Executive_Officer" == Auth::user()->job_title))
                        <li><a href="#" data-toggle="modal" data-target="#caseSet">Set Case</a></li>
                        @endif
                        @if($case->status == "Ongoing" && $case->agent_id == Auth::user()->id)
                        <li><a href="#" data-toggle="modal" data-target="#caseClose">Close Case</a></li>
                        @endif
                        @if($case->status != "Ongoing" && ("Chief" == Auth::user()->job_title|| "Executive_Officer" == Auth::user()->job_title))
                        <li><a href="#" data-toggle="modal" data-target="#caseReopen">Reopen Case</a></li>
                        @endif
                        @if(Auth::user()->job_title == "Chief" || Auth::user()->job_title == "Executive_Officer")
                        <li><a href="#" data-toggle="modal" data-target="#caseReassign">Reassign Case</a></li>
                        @endif
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div>



    <!-- Tab panes -->





    <div class="tab-content">
        <div class="tab-pane active" id="details">



            <div class="panel panel-black">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$case->name}}</h3>
                </div>
                <div class="panel-body">
                    <!--                    <div class="row">
                                            <div class="col-lg-3">
                                                <h4>Date Reported</h4>
                                                <p>{{$complaint->date_reported}}</p>
                                                <h4>Date Committed</h4>
                                                <p>{{$complaint->date_commited}}</p>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4>Narration of Facts</h4>
                                                <p>{{$complaint->narration}}</p>
                                            </div>
                                            
                                            <div class="col-lg-3">
                                                @if($complaint->agency_reported == "")
                                                
                                                @else
                                                <h4>Agency Reported</h4>
                                                <p>{{$complaint->agency_reported}}</p>
                                                <h4>Details</h4>
                                                <p>{{$complaint->agency_report_details}}</p>
                                                @endif
                                            </div>
                                            <div class="col-lg-3">
                                                 @if($complaint->considerations== "")
                                                
                                                @else
                                                <h4>Considerations</h4>
                                                <p>{{$complaint->considerations}}</p>
                                                @endif
                                            </div>
                    
                    
                                        </div>-->


                    <table class="table table-hover table-striped">

                        <tbody>
                            <tr>
                                <td><strong>Date Assigned</strong></th>
                                <td>{{$case->date_reported}}</th>
                            </tr>  
                            <tr>
                                <td><strong>Agent Assigned</strong></th>
                                <td>
                                    <?php $a = User::find($case->agent_id); ?>
                                    <p>{{$a->id}}</p>
                                    <p>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</p>
                                    </th>
                            </tr>

                            <tr>
                                <td><strong>Date Reported</strong></th>
                                <td>{{$complaint->date_reported}}</th>
                            </tr>
                            <tr>
                                <td><strong>Date Committed</strong></td>
                                <td>{{$complaint->date_commited}}</td>
                            </tr>
                            <tr>
                                <td><strong>Case Type</strong></th>
                                <td>
                                    @foreach($case_type_tags as $ctt)
                                    {{$ctt->type}} /
                                    @endforeach
                                    </th>
                            </tr>

                            <tr>
                                <td><strong>Details</strong></th>
                                <td>{{$case->details}}</th>
                            </tr>
                            <tr>
                                <td><strong>Complainant</strong></th>
                                <td>
                                    <?php $complainant = Client::find($case->complainant_id); ?>
                                    <p>{{$complainant->last_name.", ".$complainant->first_name." ".$complainant->middle_name}}</p>
                                    <p>@if(strlen($complainant->birthdate) == 10)
                                        {{Time::getAge($complainant->birthdate)}} years old
                                        @endif
                                    </p>

                                    <p><strong>Sex:</strong> {{$complainant->sex}} </p>
                                    <p><strong>Birthdate: </strong> {{$complainant->birthdate}} </p>
                                    <p><strong>Civil Status:</strong> {{$complainant->civil_status}} </p>
                                    <p><strong>Citizenship:</strong> {{$complainant->citizenship}}  </p>
                                    <p><strong>Occupation: </strong>{{$complainant->occupation}} </p>
                                    </th>
                            </tr>


                            <tr>
                                <td><strong>Narration</strong></td>
                                <td>{{$complaint->narration}}</td>
                            </tr>
                            <tr>
                                <td><strong>Considerations</strong></td>
                                <td>{{$complaint->considerations}}</td>
                            </tr>
                            <tr>
                                <td><strong>Agency Reported</strong></td>
                                <td>{{$complaint->agency_reported}}</td>
                            </tr>
                            <tr>
                                <td><strong>Agency Reported Details</strong></td>
                                <td>{{$complaint->agency_report_details}}</td>
                            </tr>
                        </tbody>
                    </table>


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
            @include("content.reports.case_logs")
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
        <div class="tab-pane" id="form">

            @include("gen.case_forms.show")
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




<div class="modal fade" id="caseSet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Case set to non-viable</h4>
        </div>
        <form action="{{URL::to("cases/close/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>Password</label>
                <input class="form-control" name="password" type="password">
                <label>Reason for closing</label>
                <textarea class="form-control" name="reason" rows="4" cols="20"></textarea>
                <label>Status</label>
                <select class="form-control" name="status">
                    <option>Non-viable</option>
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
<div class="modal fade" id="caseClose" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Close Case</h4>
        </div>
        <form action="{{URL::to("cases/close/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>Password</label>
                <input class="form-control" name="password" type="password">
                <label>Reason for closing</label>
                <textarea class="form-control" name="reason" rows="4" cols="20"></textarea>
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
        <?php $aaa = User::find($case->agent_id); ?>
        @if($aaa->status != "Active")
        <div class=" text-center">
            <hr>
            <p class="lead">The current assigned agents is {{$aaa->status}}</p>
            <p class="lead">Please assign a new agent for the case.</p>
            <hr>
        </div>
        <form action="{{URL::to("cases/reassign/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>password</label>
                <input class="form-control" name="password" type="password">
                <label>Agent</label>
                <select class="form-control" name="agent_id">
                    @foreach(User::where("division", "=", Auth::user()->division)->where("job_title", "!=", "Secretary")->where("status", "=", "Active")->get() as $a)
                    <option>{{$a->id." ".$a->last_name.", ".$a->first_name}}</option>
                    @endforeach
                </select>
                <label>Reason for Assignment</label>
                <textarea name="details" class="form-control" rows="20" cols="20"></textarea>
                 <label for="type">Case Type</label>
                <select name="type[]" class="selectpicker form-control " multiple data-live-search="true" >
                    @foreach($typetags as $t)
                    @if(in_array($t->type, $ctags))
                    <option value="{{$t->type}}" selected="">{{$t->type}}</option>
                    @else
                    <option value="{{$t->type}}" >{{$t->type}}</option>
                    @endif
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

        @else
        <form action="{{URL::to("cases/reopen/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>password</label>
                <input class="form-control" name="password" type="password">
                <label>Reason for Re-opening</label>
                <textarea name="details" class="form-control" rows="20" cols="20"></textarea>
                 <label for="type">Case Type</label>
                <select name="type[]" class="selectpicker form-control " multiple data-live-search="true" >
                    @foreach($typetags as $t)
                    @if(in_array($t->type, $ctags))
                    <option value="{{$t->type}}" selected="">{{$t->type}}</option>
                    @else
                    <option value="{{$t->type}}" >{{$t->type}}</option>
                    @endif
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
        @endif
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
                    @foreach(User::where("division", "=", Auth::user()->division)->where("job_title", "!=", "Secretary")->where("status", "=", "Active")->get() as $a)
                    
                    <option>{{$a->id." ".$a->last_name.", ".$a->first_name}}</option>
                    
                    @endforeach
                </select>
                <label>Reason for Assignment</label>
                <textarea name="details" class="form-control" rows="20" cols="20"></textarea>
                 <label for="type">Case Type</label>
                <select name="type[]" class="selectpicker form-control " multiple data-live-search="true" >
                    @foreach($typetags as $t)
                    @if(in_array($t->type, $ctags))
                    <option value="{{$t->type}}" selected="">{{$t->type}}</option>
                    @else
                    <option value="{{$t->type}}" >{{$t->type}}</option>
                    @endif
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

<div class="modal fade" id="editDetails" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Details</h4>
        </div>
        <form action="{{URL::to("cases/details/".$case->id)}}" method="post">
            <div class="modal-body">
                <label>Password</label>
                <input class="form-control" name="password" type="password">
                <label>Details</label>
                <textarea name="details" class="form-control" rows="20" cols="20">{{$case->details}}</textarea>
                
                <label for="type">Case Type</label>
                <select name="type[]" class="selectpicker form-control " multiple data-live-search="true" multiple >
                    @foreach($typetags as $t)
                    @if(in_array($t->type, $ctags))
                    <option value="{{$t->type}}" selected="">{{$t->type}}</option>
                    @else
                    <option value="{{$t->type}}" >{{$t->type}}</option>
                    @endif
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


<script>
    var table = "";
    var reference_id = "";

    $(".addCross").on("click", function() {
        table = $(this).data("table");
        reference_id = $(this).data("reference_id");
        $(".cross_reference_id").val(reference_id);
        $(".cross_table").val(table);
    });

</script>
<?php
$case_id = $case->id;
?>

<div id="addCross" class="modal fade container" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Cross References</h4>
        </div>

        <div class="modal-body">
            @include("gen.cross_references.create")
        </div>
        <div class="modal-footer">
            <span class="btn-group btn-group-sm">

                <!--<button type="" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </span>
        </div>
    </div>
</div>
<script>
$(".selectpicker").selectpicker();
</script>