<?php
$case = Kase::find($t->case_id);

$agent = User::find($t->agent_id);
$date = new DateTime($t->date);
$dc = new DateTime($case->date_commited);
$chief = User::where("division", "=", $agent->division)->where("job_title", "=", "Chief")->first();
$c_victims = Case_victim::where("case_id", "=", $t->case_id)->get();
$c_subjects = Case_subject::where("case_id", "=", $t->case_id)->get();
$c_natures = Case_type_tag::where("case_id", "=", $t->case_id)->get();

$case_form = Case_form::where("form_type", "=", "Transmital")->where("form_id", "=", $t->id)->first();
?>

<html>
    <title>
        Disposition Report
    </title>

    {{HTML::style("css/bootstrap.min.css")}}
    <!--    {{HTML::style("css/ColumnFilterWidgets.css")}}
            {{HTML::style("css/morris.css")}}
             Bootstrap core CSS 
            {{HTML::style("css/daterangepicker-bs3.css")}}
            {{HTML::style("css/bootstrap-datetimepicker.css")}}
            {{HTML::style("css/fullcalendar.print.css")}}
            {{HTML::style("css/fullcalendar.css")}}
            {{HTML::style("css/dtable3.css")}}
            {{HTML::style("css/dataTables.css")}}
            {{HTML::style("css/bootstrap-tagsinput.css")}}
            {{HTML::style("css/bootstrap-modal-bs3patch.css")}}
            {{HTML::style("css/bootstrap-modal.css")}}
            {{HTML::style("css/bootstrap-select.css")}}
            {{HTML::style("css/bootstrap-datetimepicker.css")}}
            {{HTML::style("css/font-awesome.css")}}
            {{HTML::style("css/wilhelmpaulm.css")}}
            {{HTML::style("css/timeline.css")}}
            {{HTML::style("css/nv.d3.css")}}
            {{HTML::style("css/printer.css")}}
            {{HTML::style("css/wilhelm-panel.css")}}
    
    
    
            {{HTML::script("js/raphael.js")}}
            {{HTML::script("js/jquery.js")}}
            {{HTML::script("js/morris.js")}}
            {{HTML::script("js/moment.js")}}
            {{HTML::script("js/bootstrap-tagsinput.js")}}
            {{HTML::script("js/daterangepicker.js")}}
            {{HTML::script("js/dataTables.min.js")}}
            {{HTML::script("js/bootstrap3-typeahead.js")}}
            {{HTML::script("js/typeahead.js")}}
            {{HTML::script("js/dtable3.js")}}
            {{HTML::script("js/fullcalendar.js")}}
            {{HTML::script("js/bootstrap.min.js")}}
            {{HTML::script("js/bootstrap-modalmanager.js")}}
            {{HTML::script("js/bootstrap-modal.js")}}
            {{HTML::script("js/bootstrap-datetimepicker.min.js")}}
            {{HTML::script("js/bootstrap-select.js")}}
            {{HTML::script("js/list.js")}}
            {{HTML::script("js/list.fuzzysearch.min.js")}}
            {{HTML::script("js/d3.v3.js")}}
            {{HTML::script("js/nv.d3.js")}}
            {{HTML::script("js/colorbrewer.js")}}
            {{HTML::script("js/highcharts/highcharts.js")}}
            {{HTML::script("js/highcharts/modules/data.js")}}
            {{HTML::script("js/highcharts/modules/exporting.js")}}
            {{HTML::script("js/ColumnFilterWidgets.js")}}-->
    <style>
        .indent {
            padding-left: 30px;

        }
        .indent2 {
            padding-left: 60px;

        }

    </style>

    <body>
        <div style="width: 800px; margin-left: 5px; " class="">
            <br>
            <img  src="{{URL::asset('nbi/forms/images/nbi_header.png')}}" height="90" width="380" style="margin: auto; display: block">
            <br>
          

            <div style="margin:20px">
                <p>{{$date->format("d F Y")}}</p>
                <h4>{{$t->to}}</h4>
                <h4>{{$t->heading}}</h4>
                <br>
                <p class=""><strong>Sir,</strong></p>
                
                <p class="indent"><strong>{{$t->introduction}}</strong></p>
                <br>
                <h4>RECOMMENDED FOR PROSECUTION:</h4>
                <br>
                @foreach($c_subjects as $s)
                <?php $a = Client_address::where("client_id", "=", $s->id)->first(); ?>
                <p class="indent">{{$s->first_name." ".$s->last_name}} with known address at {{$a->street." ".$a->city." ".$a->manila}}</p>
                @endforeach
                <br>
                
                @if($case_form->status != "Approved")
                <p style="font-size: 50px; color: #e82924;">This form is {{$case_form->status}}</p>
                @endif
                <h4>COMPLAINANT/VICTIM:</h4>
                <br>
                <?php $a = Client_address::where("client_id", "=", $case->complainant_id)->first(); ?>
                <?php $s = Client::find($case->complainant_id); ?>
                
                <p class="indent">{{$s->first_name." ".$s->last_name}} with known address at {{$a->street." ".$a->city." ".$a->manila}}</p>
                @foreach($c_victims as $s)
                <?php $a = Client_address::where("client_id", "=", $s->id)->first(); ?>
                <p class="indent">{{$s->first_name." ".$s->last_name}} with known address at {{$a->street." ".$a->city." ".$a->manila}}</p>
                @endforeach
                <br>
                <h4> WHEN COMMITTED</h4>
                <br>
                <p class="indent">{{$dc->format("d F Y")}}</p>
                <br>
                <h4>WHERE COMMITTED</h4>
                <br>
                 <?php $a = Case_address::where("case_id", "=", $case->id)->first(); ?>
                <p class="indent">{{$a->street." ".$a->city." ".$a->manila}}</p>
                <br>
                <h4>HOW COMMITTED:</h4>
                <br>
                <p class="indent">{{$t->how}}</p>
                <br>
                <p >Submitted are the following documents in support of our recommendation, to wit:</p>
                <h4>  ANNEXES</h4>
                <br>
                @foreach($t_anexxes as $a)
                <h4>      <span class="indent " style="text-align: left">Annex {{$a->letter}}</span> <span class="indent">-</span> <span class="indent " style="text-align: right">{{$a->title}}  </span> </h4>
                @endforeach
                <br>
                <br>
                {{$t->closing}}	
                <br>
                <br>
                <br>
                <br>
                <br>
                <p>Very truly yours,</p>
                <br>
                <br>
                  <p><strong>Atty. NONNATUS CAESAR R. ROJAS</strong></p>
                    <p class="">Director</p>
                <br>
                <br>
                <br>
                   BY:
                <br>
                <br>
                <br>
                    <!--<p><strong>{{strtoupper($agent->first_name." ".$agent->middle_name." ".$agent->last_name)}}</strong></p>-->
                    <p><strong>Atty. EDMUNDO T. ARUGAY</strong></p>
                    <p class="">Deputy Director, Special Investigation Services</p>
            </div>
        </div>
    </body>
</html>	