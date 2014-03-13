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

<script>


    console.log("this is shoot");</script>



<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">{{$a->last_name.", ".$a->first_name}}</h3>
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-md-4">
                <!--<h2>{{$a->last_name.", ".$a->first_name}}</h2>-->
            </div>
            <div class="col-md-4">
                <svg id="types{{$a->id}}" class="mypiechart"></svg>
            </div>
            <div class="col-md-4">
                <svg id="status{{$a->id}}" class="mypiechart"></svg>
            </div>
        </div>
    </div>
</div>

<script>
//    $("#types10930191").hide();

            nv.addGraph(function() {

            var testdata = [
                    @foreach($caseTypesCount as $key => $value)
            {key: "{{$value." ".$key}}", y: {{$value}}},
                    @endforeach
            ];
                    var testdata2 = [
                            @foreach($caseStatusCount as $key => $value)
                    {key: "{{$value." ".$key}}", y: {{$value}}},
                            @endforeach
                  ];
//    console.log("this cray");


                    var width = 445,
                    height = 445;
                    
                    var chart = nv.models.pieChart()
                    .x(function(d) { return d.key })
                    .y(function(d) { return d.y })
                    .color(d3.scale.category10().range())
                    .width(width)
                    .donut(true)
                    .height(height);
                    var chart2 = nv.models.pieChart()
                    .x(function(d) { return d.key })
                    .y(function(d) { return d.y })
                    .color(d3.scale.category10().range())
                    .width(width)
                    .donut(true)
                    .height(height);
            
                    d3.select("#types{{$a->id}}")
                    .datum(testdata)
                    .transition().duration(1200)
                    .attr('width', width)
                    .attr('height', height)
                    .call(chart);
            
            
                    d3.select("#status{{$a->id}}")
                    .datum(testdata2)
                    .transition().duration(1200)
                    .attr('width', width)
                    .attr('height', height)
                    .call(chart2);
                    chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });
                    return chart;
                    });
//$("#types10930191").show();
</script>


@endforeach