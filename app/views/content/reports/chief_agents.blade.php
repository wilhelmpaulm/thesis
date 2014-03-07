@foreach($agents as $a)
<?php
$agent_cases = Kase::where("agent_id", "=", $a->id)->get();
$caseTypes = [];
foreach ($agent_cases as $ac) {
    $case_tags = Case_type_tag::where("case_id", "=", $ac->id)->get();
    $ctx = "";
    for($i = 0; $i< count($case_tags); $i++) {
        if($i != 0){
        $ctx .= "/ ";
            
        }
        $ctx =$ctx.$case_tags[$i]->type." ";
    }
    if($ctx != ""){
    array_push($caseTypes, $ctx);
    }
}
$caseTypesCount = array_count_values($caseTypes);

//    var_dump(array_unique($caseTypes));
//    var_dump($caseTypes);
?>





<div class="row ">
    <div class="col-md-4">
        <h2>{{$a->last_name.", ".$a->first_name}}</h2>
    </div>
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">

    </div>
</div>

@endforeach