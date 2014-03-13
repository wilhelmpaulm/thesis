@foreach($agents as $a)
<?php
$agent_cases = Kase::where("agent_id", "=", $a->id)->get();
$caseStatus = [];
$caseTypes = [];
foreach ($agent_cases as $ac) {
    $case_tags = Case_type_tag::where("case_id", "=", $ac->id)->get();
    $ctx = "";
    for ($i = 0; $i < count($case_tags); $i++) {
        if ($i != 0) {
            $ctx .= "/ ";
        }
        $ctx = $ctx . $case_tags[$i]->type . " ";
    }
    if ($ctx != "") {
        array_push($caseTypes, $ctx);
    }
}
foreach ($agent_cases as $ac) {
    array_push($caseStatus, $ac->status);
}


$caseTypesCount = array_count_values($caseTypes);
$caseStatusCount = array_count_values($caseStatus);

//    var_dump(array_unique($caseTypes));
//    var_dump($caseTypes);
?>




<div class="panel panel-black ">
  <div class="panel-heading">
    <h3 class="panel-title">{{$a->last_name.", ".$a->first_name}}</h3>
  </div>
  <div class="panel-body">
<div class="row ">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <legend>Case Types</legend>
        <div id="types_donut{{$a->id}}" style="height: 300px;"></div>
    </div>
    <div class="col-md-4">
        <legend>Case Status</legend>
        <div id="status_donut{{$a->id}}" style="height: 300px;"></div>

    </div>
</div>
</div>
</div>



<script >
    
    
    Morris.Donut({
    element: 'types_donut{{$a->id}}',
            data: [
                    @foreach($caseTypesCount as $label => $value)
            {label: "{{$label}}", value: {{$value}} },
                    @endforeach
            ],
            colors : ["#66c2a5","#fc8d62","#8da0cb","#e78ac3","#a6d854","#ffd92f","#e5c494","#b3b3b3"]

    });
            Morris.Donut({
            element: 'status_donut{{$a->id}}',
                    data: [
                            @foreach($caseStatusCount as $label => $value)
                    {label: "{{$label}}", value: {{$value}} },
                            @endforeach
                    ],
                    colors : colorbrewer.Spectral[11]

            });
</script>

@endforeach