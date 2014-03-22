<?php
$all_cases = Kase::orderBy("date_reported", "desc")->take(200)->get();
$all_case_types = Case_type_tag::all()->take(5);
$dates = [];
$cases = [];
$case_types = [];

//foreach ($all_cases as $ac) {
//    if (!in_array($ac->date_reported, $dates)) {
//        array_push($dates, $ac->date_reported);
//    }
//}
foreach ($all_case_types as $act) {
    if (!in_array($act->type, $case_types)) {
        array_push($case_types, $act->type);
    }
     if (!in_array($act->case_id, $cases)) {
        array_push($cases, $act->case_id);
    }
}


foreach ($cases as $c) {
    $cas = Kase::find($c);
     if (!in_array($cas->date_reported, $dates)) {
        array_push($dates, $cas->date_reported);
    }
}

?>



<div class="panel panel-black ">
    <div class="panel-heading">
        <h3 class="panel-title">Case type trends</h3>
    </div>
    <div class="panel-body">
        <div id="container" class="zoom-100" >
            
            
            
            
            
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
                    @foreach($case_types as $ct)
                    <th>{{$ct}}</th>
                    @endforeach  
                </tr>
            </thead>
            <tbody>
                @foreach($dates as $d)
                <tr>
                    <th>{{$d." "}}</th>
                    @foreach($case_types as $ct)
                        <?php
                        $num = 0;
                        //                                $cases = Kase::where("date_reported", "=", $d)->get();
                        $cases = DB::table('kases')
                                ->join('case_type_tags', 'kases.id', '=', 'case_type_tags.case_id')
                                ->where('kases.date_reported', "=", $d)
                                ->where('case_type_tags.type', "=", $ct)
                                ->get();
                        $num += count($cases);        
                                
                        ?>
                    <td>{{$num}}</td>
                    @endforeach  
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
            type: 'column'
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