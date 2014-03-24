<?php
$case_types = Case_type::all();
$sexes = Sex::all();
$sexes_get = [];
$t = [];
$d1 = "";
$d2 = "";
$allMale = 0;
$allFemale = 0;

if (Input::get("type") != null) {
    $sexes_get = Input::get("sexes");
    $t = Input::get("type");
    $d1 = Input::get("date_start");
    $d2 = Input::get("date_end");
}


$cases = Kase::all();
?>
<style>
    #legend {
        height: 50px;
        background: rgba(127, 127, 127, 0.5)
    }
    #legend span {
        display: inline-block;
        padding: 15px 30px;
        position: relative;
    }
    #legend span:after {
        padding-left: 4px;
        content: '\00a0\00a0\00a0\00a0\00a0\00a0';
    text-decoration: line-through;
    }
</style>
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
                            <label>Sex</label>
                            <select  name="sexes[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                                @foreach($sexes as $s)
                                @if(in_array($s->sex, $sexes_get))
                                <option selected="" value="{{$s->sex}}">{{$s->sex}}</option>
                                @else
                                <option value="{{$s->sex}}">{{$s->sex}}</option>
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
            <div class="panel-body" >
                
                <div class="" style="">
                    <div class="zoom-100" id="line-example" ></div>
                    <div class="" id="legend" ></div>
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
    


</div>
<script>
        $(function() {
       var chart = Morris.Bar({
            element: 'line-example',
            barColors: ['blue', 'green'],
            data: [
                @foreach($t as $type)
                    {y: '{{str_replace(" ","_",$type)}}',
                        <?php $male = 0;?>
                        <?php $female = 0;?>
                        @foreach($cases as $c)
                            @foreach(Case_type_tag::where("case_id", "=", $c->id)->get() as $ct)
                                @if($type == $ct->type)
                                    @foreach(Case_subject::where("case_id","=", $c->id)->get() as $cv)
                                        @if(Client::find($cv->id)->sex == "Male")
                                            <?php $male++;?>
                                            <?php $allMale++;?>
                                        @elseif(Client::find($cv->id)->sex == "Female")
                                            <?php $female++;?>
                                            <?php $allFemale++;?>
                                        @endif    
                                    @endforeach
                                @endif    
                            @endforeach
                        @endforeach
                        @if(in_array("Male", $sexes_get))
                        Male: {{$male}},
                        @endif    
                        @if(in_array("Female", $sexes_get))
                        Female : {{$female}}
                        @endif   
                        },
                @endforeach
//                {y: 'LOLOL', Male: 54, Female: 90}
//                {y: '2012', c: 100, b: 90}
            ],
            xkey: 'y',
            
            grid: true,
//            continuousLine: true,
//            smooth: true,
//            pointSize: 20,
//            ymax: "auto",
//            ynum: "auto",
//            xLabels: '30min',
//            stacked: true,
            ykeys: [
                @if(in_array("Male", $sexes_get))
                "Male",
                @endif    
                @if(in_array("Female", $sexes_get))
                "Female"
                @endif   
            ],
            labels: [
                @if(in_array("Male", $sexes_get))
                "Male",
                @endif    
                @if(in_array("Female", $sexes_get))
                "Female"
                @endif   
            ],
            hideHover: 'auto',
            resize: true
        });
var allSex = [{{$allMale}}, {{$allFemale}}];        
chart.options.labels.forEach(function(label, i){
    var legendItem = $('<span></span>').text(label +" total : "+ allSex[i]).css('color', chart.options.barColors[i]);
    $('#legend').append(legendItem);
        });
        });
        
        

        
        
        
        
    </script>


<script>
    $(".selectpicker").selectpicker();
    
</script>

