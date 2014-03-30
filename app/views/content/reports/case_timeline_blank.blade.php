<?php 
    $case = Kase::find($case_id);
    $case_evidences = Case_evidence::where("case_id", "=", $case_id)->get();
    $case_subjects = Case_subject::where("case_id", "=", $case_id)->get();
    $case_type_tags = Case_type_tag::where("case_id", "=", $case_id)->get();
    $case_victims = Case_victim::where("case_id", "=", $case_id)->get();
    $evidence_recordings = DB::table('case_evidences')->where("case_evidences.case_id", "=", $case_id)->where("case_evidences.type", "=", "Recording")->join('evidence_recordings', 'case_evidences.evidence_id', '=', 'evidence_recordings.id')->get();
    $evidence_pictures = DB::table('case_evidences')->where("case_evidences.case_id", "=", $case_id)->where("case_evidences.type", "=", "Picture")->join('evidence_pictures', 'case_evidences.evidence_id', '=', 'evidence_pictures.id')->get();
    $evidence_videos = DB::table('case_evidences')->where("case_evidences.case_id", "=", $case_id)->where("case_evidences.type", "=", "Video")->join('evidence_videos', 'case_evidences.evidence_id', '=', 'evidence_videos.id')->get();
    $evidence_documents = DB::table('case_evidences')->where("case_evidences.case_id", "=", $case_id)->where("case_evidences.type", "=", "Document")->join('evidence_documents', 'case_evidences.evidence_id', '=', 'evidence_documents.id')->get();
    $evidence_objects = DB::table('case_evidences')->where("case_evidences.case_id", "=", $case_id)->where("case_evidences.type", "=", "Object")->join('evidence_objects', 'case_evidences.evidence_id', '=', 'evidence_objects.id')->get();
    $case_observations = Case_observation::where("case_id", "=", $case_id)->get();
    $case_keys = Case_key::where("case_id", "=", $case_id)->get();
    $case_requirements = Case_requirement::where("case_id", "=", $case_id)->get();
    $case_resources = Resource_history::where("case_id", "=", $case_id)->where("status", "=", "Approved")->orWhere("status", "=", "Received")->orWhere("status", "=", "Returned")->get();


?>
<?php $complaint = Complaint::find($case->complaint_id); ?>
<?php $logs = System_log::where("case_id", "=", $case->id)->orderBy("created_at", "desc")->get(); ?>
<?php $forms = Case_form::where("case_id", "=", $case->id)->orderBy("created_at", "desc")->get(); ?>


<?php
$dateLoop = [];

foreach ($case_observations as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}

foreach($evidence_videos as $co){
    if(!in_array($co->created_at, $dateLoop)){
        array_push($dateLoop, $co->created_at);
    }
}
foreach($evidence_pictures as $co){
    if(!in_array($co->created_at, $dateLoop)){
        array_push($dateLoop, $co->created_at);
    }
}
foreach ($evidence_documents as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}
foreach($evidence_recordings as $co){
    if(!in_array($co->created_at, $dateLoop)){
        array_push($dateLoop, $co->created_at);
    }
}
foreach($evidence_objects as $co){
    if(!in_array($co->created_at, $dateLoop)){
        array_push($dateLoop, $co->created_at);
    }
}

//var_dump($evidence_pictures);
?>


<?php
rsort($dateLoop);
//var_dump($dateLoop);
?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">{{$case->name}} Timeline</h3>
    </div>
    <div class="panel-body" style="height:500px; overflow: auto">
        <ul class="timeline">
            @foreach($dateLoop as $dl)
            <li class="timeline-inverted">
                <div class="timeline-badge info"><i class="fa fa-calendar"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$dl}}</h4>
                    </div>
                    <div class="timeline-body">
                        <!--<p>Mu num gostis.</p>-->
                    </div>
                </div>
            </li>





            @for($i = 0; $i < count($logs); $i++)

            @if($dl == $logs[$i]['created_at']) 
            @if($i % 2 == 0 ) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-carrot"><i class="fa fa-list"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Case action</h4>
                    </div>
                    <div class="timeline-body">
                        <p>{{$logs[$i]['action']}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$logs[$i]["created_at"]}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->

            @for($i = 0; $i < count($case_observations); $i++)
            <div class="modal fade" id="case_obeservations{{$case_observations[$i]['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Case Observation</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$case_observations[$i]['user_id']}}</p>
                            
                            <h4>Observation</h4>
                            <p>{{$case_observations[$i]['observation']}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
            </div>




            @if($dl == $case_observations[$i]['created_at']) 
            @if($i % 2 == 0 ) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-alizarin"><i class="fa fa-pencil"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a   data-toggle="modal" data-target="#case_obeservations{{$case_observations[$i]['id']}}">    <h4 class="timeline-title">Case Observation</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$case_observations[$i]['observation']}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$case_observations[$i]["created_at"]}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->

            @for($i = 0; $i < count($evidence_recordings); $i++)
            
            <div class="modal fade" id="evidence_recordings{{$evidence_recordings[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Recording</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$evidence_recordings[$i]->user_id}}</p>
                            
                            <h4>Title</h4>
                            <p>{{$evidence_recordings[$i]->title}}</p>
                            <h4>Details</h4>
                            <p>{{$evidence_recordings[$i]->details}}</p>
                            <h4>Owner</h4>
                            <p>{{$evidence_recordings[$i]->owner}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            @if($dl == $evidence_recordings[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-blue" ><i class="fa fa-music"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a data-toggle="modal" data-target="#evidence_recordings{{$evidence_recordings[$i]->id}}"><h4 class="timeline-title">{{$evidence_recordings[$i]->title}} Recording</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$evidence_recordings[$i]->details}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$evidence_recordings[$i]->created_at}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor



            <!--ENDLOOP-->
            <!--ENDLOOP-->
            @for($i = 0; $i < count($evidence_objects); $i++)
            <div class="modal fade" id="evidence_objects{{$evidence_objects[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Recording</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$evidence_objects[$i]->user_id}}</p>
                            
                            <h4>Title</h4>
                            <p>{{$evidence_objects[$i]->title}}</p>
                            <h4>Details</h4>
                            <p>{{$evidence_objects[$i]->details}}</p>
                            <p>{{$evidence_objects[$i]->length}} / {{$evidence_objects[$i]->width}} / {{$evidence_objects[$i]->height}}</p>
                            <h4>Owner</h4>
                            <p>{{$evidence_objects[$i]->owner}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
            </div>
             
            

            @if($dl == $evidence_objects[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-emerald"><i class="fa fa-cogs"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                       <a  data-toggle="modal" data-target="#evidence_objects{{$evidence_objects[$i]->id}}"> <h4 class="timeline-title">{{$evidence_objects[$i]->title}} Object</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$evidence_objects[$i]->details}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$evidence_objects[$i]->created_at}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->
            <!--ENDLOOP-->
            @for($i = 0; $i < count($evidence_documents); $i++)
             <div class="modal fade" id="evidence_documents{{$evidence_documents[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Recording</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$evidence_documents[$i]->user_id}}</p>
                            
                            <h4>Title</h4>
                            <p>{{$evidence_documents[$i]->title}}</p>
                            <h4>Details</h4>
                            <p>{{$evidence_documents[$i]->details}}</p>
                            <h4>Version</h4>
                            <p>ver. {{$evidence_documents[$i]->version}}</p>
                            <h4>Owner</h4>
                            <p>{{$evidence_documents[$i]->owner}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
            </div>
            

            @if($dl == $evidence_documents[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-teal"><i class="fa fa-file"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a   data-toggle="modal" data-target="#evidence_documents{{$evidence_documents[$i]->id}}">      <h4 class="timeline-title">{{$evidence_documents[$i]->title}} Document</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$evidence_documents[$i]->details}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$evidence_documents[$i]->created_at}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->
            <!--ENDLOOP-->


            <!--ENDLOOP-->
            <!--ENDLOOP-->
            @for($i = 0; $i < count($evidence_pictures); $i++)
             <div class="modal fade" id="evidence_pictures{{$evidence_pictures[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Recording</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$evidence_pictures[$i]->user_id}}</p>
                            
                            <h4>Title</h4>
                            <p>{{$evidence_pictures[$i]->title}}</p>
                            <h4>Details</h4>
                            <p>{{$evidence_pictures[$i]->details}}</p>
                            <h4>Owner</h4>
                            <p>{{$evidence_pictures[$i]->owner}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
            </div>
             
            
            

            @if($dl == $evidence_pictures[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-magenta"><i class="fa fa-picture-o"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a  data-toggle="modal" data-target="#evidence_pictures{{$evidence_pictures[$i]->id}}">      <h4 class="timeline-title">{{$evidence_pictures[$i]->title}} Picture</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$evidence_pictures[$i]->details}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$evidence_pictures[$i]->created_at}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->
            <!--ENDLOOP-->

            <!--ENDLOOP-->
            <!--ENDLOOP-->
            @for($i = 0; $i < count($evidence_videos); $i++)
             <div class="modal fade" id="evidence_videos{{$evidence_videos[$i]->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Recording</h4>
                        </div>
                        <div class="modal-body">
                            <h4>Added by</h4>
                            <p>{{$evidence_videos[$i]->user_id}}</p>
                            
                            <h4>Title</h4>
                            <p>{{$evidence_videos[$i]->title}}</p>
                            <h4>Details</h4>
                            <p>{{$evidence_videos[$i]->details}}</p>
                            <h4>Owner</h4>
                            <p>{{$evidence_videos[$i]->owner}}</p>
                        </div>
                        <div class="modal-footer">
                            <span class="btn-group btn-group-sm pull-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </span>
                        </div>
                    </div>
            </div>
            
            

            @if($dl == $evidence_videos[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                <div class="timeline-badge bg-nephritis" ><i class="fa fa-video-camera"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <a data-toggle="modal" data-target="#evidence_videos{{$evidence_videos[$i]->id}}">     <h4 class="timeline-title">{{$evidence_videos[$i]->title}} Video</h4></a>
                    </div>
                    <div class="timeline-body">
                        <p>{{$evidence_videos[$i]->details}}</p>
                        <p><small class="text-muted label label-info"><i class="fa fa-clock-o"></i> {{$evidence_videos[$i]->created_at}}</small></p>
                    </div>
                </div>
            </li>
            @endif
            @endfor

            <!--ENDLOOP-->
            <!--ENDLOOP-->


            <!--ENDLOOP-->
            @endforeach


        </ul>
    </div>
</div>



<!--
<li>
    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
    <div class="timeline-panel">
        <div class="timeline-heading">
            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
        </div>
        <div class="timeline-body">
            <p>Mussum ip num gostis.</p>
        </div>
    </div>
</li>
<li class="timeline-inverted">
    <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
    <div class="timeline-panel">
        <div class="timeline-heading">
            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
        </div>
        <div class="timeline-body">
            <p>Mu num gostis.</p>
        </div>
    </div>
</li>
-->
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