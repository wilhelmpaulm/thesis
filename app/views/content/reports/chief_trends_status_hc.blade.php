<?php
$all_cases = Kase::orderBy("date_reported", "desc")->take(30)->get();

$all_case_types = Case_type_tag::where("type", "=", "Rape")->get();
$dates = [];
$cases = [];
//$case_types = [];
//foreach ($all_cases as $ac) {
//    if (!in_array($ac->date_reported, $dates)) {
//        array_push($dates, $ac->date_reported);
//    }
//}
foreach ($all_case_types as $act) {
    if (!in_array($act->case_id, $cases)) {
        array_push($cases, $act->case_id);
    }
}

foreach($cases as $c){
    array_push($dates,Kase::find($c)->date_reported);
}

asort($dates);
?>



<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">Case type trends</h3>
    </div>
    <div class="panel-body">
        <div id="container" class="zoom-100" style="">
           
        </div>
        <br>
        <br>
        <hr>
        
        <br>
        <br>
        <table id="datatable" class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    
                    <th></th>
                    <th>Ongoing</th>
                    <th>Non-viable</th>
                    <th>Unfinished</th>
                    <th>Finished</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach($dates as $d)
                <?php
                    $ongoing_cases = Kase::where("status", "=", "Ongoing")->where("date_reported", "=", $d)->get();
                    $nonviable_cases = Kase::where("status", "=", "Non-viable")->where("date_reported", "=", $d)->get();
                    $unfinished_cases = Kase::where("status", "=", "Closed_Unfinished")->where("date_reported", "=", $d)->get();
                    $finished_cases = Kase::where("status", "=", "Closed_Finished")->where("date_reported", "=", $d)->get();
                    
                ?>
                <tr>
                    <th>{{$d." "}}</th>
                    <td>{{$ongoing_cases->count()}}</td>
                    <td>{{$nonviable_cases->count()}}</td>
                    <td>{{$unfinished_cases->count()}}</td>
                    <td>{{$finished_cases->count()}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


<script>
 $(function () {
    $('#container').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'line'
        },
        title: {
            text: 'Case type report'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Number of cases'
            }
        },
        plotOptions: {
                series: {
//                    stacking: 'normal'
                }
            },
         tooltip: {
//                formatter: function() {
//                    return '<b>'+ this.point.name +'</b><br/>'+
//                        this.series.name +': '+ this.y +'<br/>'+
//                        'Total: '+ this.point.stackTotal;
//                }
            shared:true
            }
    });
});
</script>


<script>
//    $(".selectpicker").selectpicker();

</script>