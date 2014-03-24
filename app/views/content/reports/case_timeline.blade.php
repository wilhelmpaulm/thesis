<?php
$dateLoop = [];



foreach ($logs as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}

foreach ($case_observations as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}

foreach ($evidence_videos as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}
foreach ($evidence_pictures as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}
foreach ($evidence_documents as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}
foreach ($evidence_recordings as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
        array_push($dateLoop, $co->created_at);
    }
}
foreach ($evidence_objects as $co) {
    if (!in_array($co->created_at, $dateLoop)) {
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
        <h3 class="panel-title">Timeline</h3>
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