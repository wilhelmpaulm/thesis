<?php
$case_types = Case_type::all();
$case_statuses = ["Ongoing", "Pending", "Closed_Finished", "Closed_Unfinished", "Non-viable"];
$case_type_get = [];
$case_status_get = [];
$locations = [];
$locations_get = [];
$date1 = "";
$date2 = "";

foreach (Case_address::all() as $ca) {
    if (!in_array($ca->city, $locations)) {
        array_push($locations, $ca->city);
    }
}

if (Input::get("type") != null && Input::get("status") != null && Input::get("location") != null) {
    $locations_get = Input::get("location");


    $case_status_get = Input::get("status");

    $case_type_get = Input::get("type");


    $date1 = Input::get("date_start");
    $date2 = Input::get("date_end");
}

    if($date1 ==""){
        $date1 = "1999-01-01";
    }
    if($date2 ==""){
        $date2 = "2014-01-01";
    }



    if (count($locations_get) == 0) {
        $locations_get = $locations;
    }
    if (count($case_status_get) == 0) {
        $case_status_get = ["Ongoing", "Pending", "Closed_Finished", "Closed_Unfinished", "Non-viable"];
    }
   
?>


<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Choices</h3>
    </div>
    <form>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-3">
                    <label>Case Type</label>
                    <select  name="type[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                        @foreach($case_types as $ct)
                        @if(in_array($ct->type, $case_type_get))
                        <option selected="" value="{{$ct->type}}">{{$ct->type}}</option>
                        @else
                        <option value="{{$ct->type}}">{{$ct->type}}</option>
                        @endif
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <label>Case Status</label>
                    <select  name="status[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                        @foreach($case_statuses as $cs)
                        @if(in_array($cs, $case_status_get))
                        <option selected="" value="{{$cs}}">{{$cs}}</option>
                        @else
                        <option value="{{$cs}}">{{$cs}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3">
                    <label>Location</label>
                    <select  name="location[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                        @foreach($locations as $l)
                        @if(in_array($l, $locations_get))
                        <option selected="" value="{{$l}}">{{$l}}</option>
                        @else
                        <option value="{{$l}}">{{$l}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3">
                    <label>Date Start</label>
                    <input type="date" name="date_start" value="{{$date1}}" class="form-control">
                </div>
                <div class="col-lg-3">
                    <label>Date End</label>
                    <input type="date" name="date_end" value="{{$date2}}" class="form-control">
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

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Locations Report</h3>
    </div>
    <div class="panel-body">
        <div id="container" class="zoom-100"  style="min-width: 310px; margin: 0 auto"></div>
    </div>
</div>


<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Case Breakdown</h3>
    </div>
    <div class="panel-body">

        <table id="datatable" class="table table-condensed">
            <thead>
                <tr>
                    <th></th>
                    @foreach($case_type_get as $ct)
                    <th>{{$ct}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($locations_get as $l)
                <tr>
                    <th>{{$l}}</th>
                    @foreach($case_type_get as $ct)
                    <?php $cnum = 0; ?>
                    <?php $case_types = Case_type_tag::where("type", "=", $ct)->get(); ?>
                    @foreach($case_types as $c)
                    <?php $case_ad = Case_address::find($c->case_id); ?>
                    <?php $case = Kase::where("id", "=", $c->case_id)->whereIn("status", $case_status_get)->first(); ?>
                    @if($case != null)
                    @if($case_ad->city == $l && $case->date_assigned >= $date1 && $case->date_assigned <= $date2)
                    <?php $cnum++; ?>
                    @endif
                    @endif
                    @endforeach
                    <td>{{$cnum}}</td>
                    @endforeach
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



<script>
    $(function() {
        $('#container').highcharts({
            data: {
                table: document.getElementById('datatable')
            },
            chart: {
                type: 'column'//column, bar, line, pie, area, scatter
            },
            title: {
                text: 'Number of Cases Grouped via City'
            },
            subtitle: {
                text: '{{$date1.' - '.$date2}}'
            },
            xAxis: {
//                allowDecimals: false,
                title: {
                    text: 'Cities Selectes'
                }
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Number of Cases'
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
</script>


<script>
    $(".selectpicker").selectpicker();

</script>
