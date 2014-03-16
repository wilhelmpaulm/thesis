@foreach($agents as $a)
<?php
$agent_cases = Kase::where("agent_id", "=", $a->id)->get();

$ongoing_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Ongoing")->get();
$nonviable_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Non-viable")->get();
$unfinished_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_unfinished")->get();
$finished_cases = Kase::where("agent_id", "=", $a->id)->where("status", "=", "Closed_finished")->get();


?>




<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">{{$a->last_name.", ".$a->first_name}}</h3>
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-md-4">
                <!--style="min-width: 310px; height: 400px; margin: 0 auto"-->
                
                @if($agent_cases->count() != 0)
                <div id="container{{$a->id}}" ></div>
                @else
                <div class="text-center lead">
                    <p>No cases found</p>
                </div>
                @endif
                
                
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
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>

<script>


    $(function() {
        $('#container{{$a->id}}').highcharts({
            data: {
                table: document.getElementById('datatable{{$a->id}}')
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Case status ratio'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Units'
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