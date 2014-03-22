<?php
$case_types = Case_type::all();
?>


<!--<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">Report options</h3>
    </div>
    <div class="panel-body">
        
    </div>
</div>-->




@foreach($agents as $a)
<?php
$case_nums = [];
$agent_cases = Kase::where("agent_id", "=", $a->id)->where("status", "!=", "Pending")->get();


$ongoing_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Ongoing")->get();
$nonviable_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Non-viable")->get();
$unfinished_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_Unfinished")->get();
$finished_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_Finished")->get();

foreach ($agent_cases as $ac) {
    if (!in_array($ac->id, $case_nums)) {
        array_push($case_nums, $ac->id);
    }
}
?>




<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">{{$a->last_name.", ".$a->first_name}}</h3>
    </div>
    <div class="panel-body">
        @if($agent_cases->count() != 0)


        <div class="row">
            <div class="col-md-12 " >
                @if($agent_cases->count() != 0)
                <div id="3container{{$a->id}}" class="" ></div>
                @else
                <div class="text-center lead">
                    <p>No cases found</p>
                </div>
                @endif
<br>
                <br>
                <hr>
                <br>
                <br>

                <table id="3datatable{{$a->id}}" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>total</th>
                            <th>Ongoing</th>
                            <th>Non-viable</th>
                            <th>Finished</th>
                            <th>Unfinished</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($case_types as $ct)
                        <?php
                        $num = 0;
                        $ongoing = 0;
                        $nonviable = 0;
                        $finished = 0;
                        $unfinished = 0;
                        foreach ($case_nums as $cn) {
                            $case_tag = Case_type_tag::where("case_id", "=", $cn)->first();
                            if ($case_tag->type == $ct->type) {
                                $cas = Kase::find($cn);
                                $num++;


                                if ($cas->status == "Ongoing") {
                                    $ongoing++;
                                }
                                if ($cas->status == "Non-viable") {
                                    $nonviable++;
                                }
                                if ($cas->status == "Closed_Unfinished") {
                                    $unfinished++;
                                }
                                if ($cas->status == "Closed_Finished") {
                                    $finished++;
                                }
                            }
                        }
                        ?>
                        @if($num!= 0)
                        <tr>
                            <th>{{$ct->type}}</th>
                            <td>{{$num}}</td>
                            <td>{{$ongoing}}</td>
                            <td>{{$nonviable}}</td>
                            <td>{{$finished}}</td>
                            <td>{{$unfinished}}</td>
                        </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="row ">
            <div class="col-md-6 ">
                <!--style="min-width: 310px; height: 400px; margin: 0 auto"-->

                @if($agent_cases->count() != 0)
                <div id="container{{$a->id}}" ></div>
                @else
                <div class="text-center lead">
                    <p>No cases found</p>
                </div>
                @endif
                <br>
                <br>
                <hr>
                <br>
                <br>

                <table id="datatable{{$a->id}}" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Number of cases</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>Ongoing</th>
                            <td>{{$ongoing_cases->count()}}</td>
                        </tr>
                        <tr>
                            <th>Finished</th>
                            <td>{{$finished_cases->count()}}</td>
                        </tr>
                        <tr>
                            <th>Unfinished</th>
                            <td>{{$unfinished_cases->count()}}</td>
                        </tr>
                        <tr>
                            <th>Non-viable</th>
                            <td>{{$nonviable_cases->count()}}</td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="col-md-6 ">
                <!--ENDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
                <!--ENDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->
                <!--ENDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD-->

                @if($agent_cases->count() != 0)
                <div id="2container{{$a->id}}" ></div>
                @else
                <div class="text-center lead">
                    <p>No cases found</p>
                </div>
                @endif

                <br>
                <br>
                <hr>
                <br>
                <br>
                <table id="2datatable{{$a->id}}" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Number of cases</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($case_types as $ct)
                        <?php
                        $num = 0;
                        foreach ($case_nums as $cn) {
                            $case_tag = Case_type_tag::where("case_id", "=", $cn)->first();
                            if ($case_tag->type == $ct->type) {
                                $num++;
                            }
                        }
                        ?>
                        @if($num!= 0)
                        <tr>
                            <th>{{$ct->type}}</th>
                            <td>{{$num}}</td>
                        </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>


            </div>

        </div>
        @else    
        <div class="text-center lead">
            <p>No cases found</p>
        </div> 
        @endif
    </div>

</div>

<script>


    $(function() {
        $('#container{{$a->id}}').highcharts({
            data: {
                table: document.getElementById('datatable{{$a->id}}')
            },
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Case type ratio'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Number of cases'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        format: '<b>{point.name}</b>: <br>{point.y}'
                    },
//                    startAngle: -90,
//                    endAngle: 90,
//                    center: ['50%', '75%'],
                    showInLegend: true
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });
    $(function() {
        $('#2container{{$a->id}}').highcharts({
            data: {
                table: document.getElementById('2datatable{{$a->id}}')
            },
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Case type ratio'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Number of cases'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        format: '<b>{point.name}</b>: <br>{point.y}'
                    },
//                    startAngle: -90,
//                    endAngle: 90,
//                    center: ['50%', '75%'],
                    showInLegend: true
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });
    $(function() {
        $('#3container{{$a->id}}').highcharts({
            data: {
                table: document.getElementById('3datatable{{$a->id}}')
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Case status and type cobination'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Number of cases'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        format: '<b>{point.name}</b>: <br>{point.y}'
                    },
//                    startAngle: -90,
//                    endAngle: 90,
//                    center: ['50%', '75%'],
                    showInLegend: true
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                            this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });

//$("table").dataTable();
</script>


@endforeach

<script>
    $("table").dataTable();
</script>