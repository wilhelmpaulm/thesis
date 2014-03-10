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
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Timeline</h3>
    </div>
    <div class="panel-body" style="height:500px; overflow: auto">
        <ul class="timeline">
            @foreach($dateLoop as $dl)
            <li class="timeline-inverted">
                <div class="timeline-badge "><i class="fa fa-calendar"></i></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$dl}}</h4>
                    </div>
                    <div class="timeline-body">
                        <!--<p>Mu num gostis.</p>-->
                    </div>
                </div>
            </li>





            @for($i = 0; $i < count($case_observations); $i++)

            @if($dl == $case_observations[$i]['created_at']) 
            @if($i % 2 == 0 ) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-pencil"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">Case Observation</h4>
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

            @if($dl == $evidence_recordings[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-music"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$evidence_recordings[$i]->title}}</h4>
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

            @if($dl == $evidence_objects[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-cogs"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$evidence_objects[$i]->title}}</h4>
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

            @if($dl == $evidence_documents[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-file"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$evidence_documents[$i]->title}}</h4>
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

            @if($dl == $evidence_pictures[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-picture-o"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$evidence_pictures[$i]->title}}</h4>
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

            @if($dl == $evidence_videos[$i]->created_at) 
            @if($i % 2 == 0 && $i != 0) 
            <li class="timeline-inverted">
                @else
            <li>
                @endif
                @if($i == 0)
                <div class="timeline-badge info"><i class="fa fa-video-camera"></i></div>
                @endif
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="timeline-title">{{$evidence_videos[$i]->title}}</h4>
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