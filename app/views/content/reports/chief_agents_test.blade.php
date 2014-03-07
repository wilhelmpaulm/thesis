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
<script>

  
console.log("this is shoot");

</script>




<div class="row ">
    <div class="col-md-4">
        <h2>{{$a->last_name.", ".$a->first_name}}</h2>
    </div>
    <div class="col-md-4">
        <svg id="types{{$a->id}}" class="mypiechart"></svg>
    </div>
    <div class="col-md-4">

    </div>
</div>

<script>
nv.addGraph(function() {
    
    var testdata = [
     @foreach($caseTypesCount as $key => $value)
     {key: "{{$value." ".$key}}", y: {{$value}}}, 
        
     @endforeach
  ];
  
    var testdata2 = [
     @foreach($caseTypesCount as $key => $value)
     {key: "{{$value." ".$key}}", y: {{$value}}}, 
        
     @endforeach
  ];
  
  
//    console.log("this cray");
    
    
    var width = 450,
        height = 450;

    var chart = nv.models.pieChart()
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

    chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

    return chart;
});

nv.addGraph(function() {

    var width = 500,
        height = 500;

    var chart = nv.models.pieChart()
        .x(function(d) { return d.key })
        //.y(function(d) { return d.value })
        //.labelThreshold(.08)
        //.showLabels(false)
        .color(d3.scale.category10().range())
        .width(width)
        .height(height)
        .donut(true);

    chart.pie
        .startAngle(function(d) { return d.startAngle/2 -Math.PI/2 })
        .endAngle(function(d) { return d.endAngle/2 -Math.PI/2 });

      //chart.pie.donutLabelsOutside(true).donut(true);

      d3.select("#test2")
          //.datum(historicalBarChart)
          .datum(testdata)
        .transition().duration(1200)
          .attr('width', width)
          .attr('height', height)
          .call(chart);

    return chart;
});

</script>
@endforeach