<?php
$case_types = Case_type::all();
$t = [];
$d1 = "";
$d2 = "";
$locations_get = [];

if (Input::get("type") != null) {
    $t = Input::get("type");
    $locations_get = Input::get("locations");
    $d1 = Input::get("date_start");
    $d2 = Input::get("date_end");
}
$locations = [];
$cases = Kase::all();
$case_addresses = Case_address::all();

foreach($case_addresses as $ca){
    if(!in_array($ca->city, $locations)){
        array_push($locations, $ca->city);
    }
}



?>

<div class="row ">
    <div class="col-md-12">
        <div class="panel panel-black">
            <div class="panel-heading">
                <h3 class="panel-title">Case Trends</h3>
            </div>
            <form>
                <div class="panel-body ">
                    <div class="row">
                        <div class="col-lg-3">
                            <label>Location</label>
                            <select  name="locations[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                                @foreach($locations as $ct)
                                @if(in_array($ct, $locations_get))
                                <option selected="" value="{{$ct}}">{{$ct}}</option>
                                @else
                                <option value="{{$ct}}">{{$ct}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3">
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
                        <div class="col-lg-3">
                            <label>Date Start</label>
                            <input type="date" name="date_start" value="{{$d1}}" class="form-control">
                        </div>
                        <div class="col-lg-3">
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




    <div class="col-md-12" style="">
        <div class="panel panel-black ">
            <div class="panel-heading">
                <h3 class="panel-title">Case Trend Results</h3>
            </div>
            <div class="panel-body " >

                <div class="text-center " >
                    <div id="line-example" class="zoom-100" ></div>
                </div>

            </div>
        </div>
    </div>
    <?php
        $dates = [];
            
        
    
    ?>
    <?php
        $dates = [];
        foreach($cases as $c){
            if(!in_array($c->date_reported, $dates) && $c->date_reported >= $d1 && $c->date_reported <= $d2){
               foreach(Case_type_tag::where("case_id", "=", $c->id)->get() as $ct){
                   if(in_array($ct->type, $t)){
                       array_push($dates, $c->date_reported);
                   }
               }
            }
        }
        array_push($dates, $d1);
        array_push($dates, $d2);
        sort($dates);
//        var_dump($dates);
    ?>
    <script>
        Morris.Bar({
            element: 'line-example',
            data: [
                @foreach($locations as $l)
                    {y: '{{str_replace(" ", "_", $l)}}',
                        <?php $case_locations = Case_addresses::where("city", "=", $l)->get();?>
                        @foreach($case_locations as $cl)
                        <?php $numCase = 0;?>
                            
                            
                            
                        @endforeach
                @endforeach
//                {y: '2012', a: 100, b: 90}
//                {y: '2012', c: 100, b: 90}
            ],
            xkey: 'y',
            grid: false,
            continuousLine: true,
            smooth: true,
//            pointSize: 20,
//            ymax: "auto",
//            ynum: "auto",
//            xLabels: '30min',
//            stacked: true,
            ykeys: [
                @foreach($t as $type)
                '{{str_replace(" ","_",$type)}}',
                @endforeach
            ],
            labels: [
                @foreach($t as $type)
                '{{str_replace(" ","_",$type)}}',
                @endforeach
            ]
        });
    </script>


</div>



<script>
    $(".selectpicker").selectpicker();

</script>