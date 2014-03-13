<?php
$case_types = Case_type::all();
$t =[];
$d1 = "";
$d2 = "";

if(Input::get("type")!= null){
    $t = Input::get("type");
    $d1 = Input::get("date_start");
    $d2 = Input::get("date_end");
}


?>

<div class="row ">
    <div class="col-md-12">
        <div class="panel panel-black">
            <div class="panel-heading">
                <h3 class="panel-title">Case Status Per Type </h3>
            </div>
            <form>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Case Type</label>
                            <select  name="type[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                                @foreach($case_types as $ct)
                                @if(in_array($ct->type, $t))
                                <option selected="" value="{{$ct->type}}">{{$ct->type}}</option>
                                @else
                                <option value="{{$ct->type}}">{{$ct->type}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Date Start</label>
                            <input type="date" name="date_start" value="{{$d1}}" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label>Date End</label>
                            <input type="date" name="date_end" value="{{$d2}}" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="panel-footer clearfix hidden-print">
                    <div class="btn-group btn-group-sm pull-right">
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div> 
<div class="row ">
    @foreach($agents as $a)
    <?php
    $cases = Kase::where("agent_id", "=", $a->id)->get();
    $caseStatus = [];
//    foreach ($agent_cases as $ac) {
//        array_push($caseStatus, $ac->status);
//    }
//    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//        $cases = Kase::where("agent_id", "=", $a->id)->get();
//        
//    }
    if (count(Input::get("type")) != null) {
        $date1 = Time::toNum(Input::get("date_start"));
        $date2 = Time::toNum(Input::get("date_end"));
        foreach ($cases as $c) {
            $datex = Time::toNum($c->date_assigned);
            if ($date1 <= $datex && $date2 >= $datex) {
                $types = Case_type_tag::where("case_id", "=", $c->id)->get();

                foreach ($types as $t) {
                    if (in_array($t->type, Input::get("type"))) {
                        array_push($caseStatus, $c->status);
                    }
                }
            }
        }
    }
    $caseStatusCount = array_count_values($caseStatus);
    ?>

    <script>


        console.log("this is shoot");</script>



    <div class="col-md-6" style="">
        <div class="panel panel-black ">
            <div class="panel-heading">
                <h3 class="panel-title">{{$a->last_name.", ".$a->first_name}} </h3>
            </div>
            <div class="panel-body " style="height: fit-content">

                <div class="text-center " >
                    @if(count($caseStatus) == 0)
                    <h4 >No Case/s Found</h4>
                    @else
                    <svg id="status{{$a->id}}" class="mypiechart zoom-100" style="display: block"></svg>
                    @endif
                </div>

            </div>
        </div>
    </div>

    <script>
        //    $("#types10930191").hide();

        nv.addGraph(function() {


            var testdata2 = [
                    @foreach($caseStatusCount as $key => $value)
            {key: "{{$value." ".$key}}", y: {{$value}}},
                @endforeach
        ];
                var width = $("#status{{$a->id}}").width(),
                height = $("#status{{$a->id}}").parent().height()*2;
        var chart2 = nv.models.pieChart()
                .x(function(d) {
                    return d.key
                })
                .y(function(d) {
                    return d.y
                })
                .color(d3.scale.category10().range())
                .width(width)
                .donut(true)
                .height(height);
        d3.select("#status{{$a->id}}")
                .datum(testdata2)
                .transition().duration(1200)
                .attr('width', width)
                .attr('height', height)
                .call(chart2);
        chart.dispatch.on('stateChange', function(e) {
            nv.log('New State:', JSON.stringify(e));
        });
                return chart;
        });
                //$("#types10930191").show();
    </script>


    @endforeach
</div>



<script>
    $(".selectpicker").selectpicker();

</script>


