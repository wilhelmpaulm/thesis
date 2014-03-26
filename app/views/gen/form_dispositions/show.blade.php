<?php
$case = Kase::find($d->case_id);

$agent = User::find($d->agent_id);

$chief = User::where("division", "=", $agent->division)->where("job_title", "=", "Chief")->first();
$c_victims = Case_victim::where("case_id", "=", $d->case_id)->get();
$c_subjects = Case_subject::where("case_id", "=", $d->case_id)->get();
$c_natures = Case_type_tag::where("case_id", "=", $d->case_id)->get();


$case_form = Case_form::where("form_type", "=", "Disposition")->where("form_id", "=", $d->id)->first();

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
            <br>

            <div id="" style="text-align:center; font-size:30px;"> DISPOSITION REPORT</div>

            <br>
            <br>

            <div style="margin:20px">
                <table border="2" class="text-center"  style="width: 100%; border: #000; border-style: double" >
                    <tbody>
                        <tr>
                            <td colspan="" width='25%' style="border: #000; border-style: double" >
                                <h4>CASE ID</h4>
                                {{$case->id}}
                            </td>
                            <td style=" border: #000; border-style: double" >
                                <h4>Date Assigned</h4>
                                {{$case->date_assigned}}
                                <h4>Date Reported</h4>
                                {{$case->date_reported}}

                            </td>
                            <td style=" border: #000; border-style: double" >
                                <h4>Agent on Case</h4>
                                <p><strong>{{$agent->first_name." ".$agent->middle_name." ".$agent->last_name}}</strong></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style=" border: #000; border-style: double" >
                                <h4>SUBJECT/S</h4>
                                @foreach($c_subjects as $s)
                                <?php $s = Client::find($s->client_id) ?>
                                <p><strong>{{$s->first_name." ".$s->middle_name." ".$s->last_name}}</strong></p>
                                @endforeach
                                <br>
                                <h4>COMPLAINANT</h4>
                                <?php $s = Client::find($case->complainant_id) ?>
                                <p><strong>{{$s->first_name." ".$s->middle_name." ".$s->last_name}}</strong></p>
                            </td>
                            <td style=" border: #000; border-style: double" >
                                <h4>NATURE OF CASE</h4>
                                @foreach($c_natures as $n)
                                <p><strong>{{$n->type}}</strong></p>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <br>
                <h4>SYNOPSIS:</h4>

                <br>
                <p class="indent">{{$d->synopsis}}</p>
                <br>
                <br>
                <h4>A.	NAME AND PERSONAL CIRCUMSTANCES OF COMPLAINANT (OR REQUESTING PARTY OR DIRECTING PARTY)</h4>
                <br>
                <p class="indent">{{$d->coc}}</p>
                <br>
                <br>
                <h4> C.	NAMES AND PERSONAL CIRCUMSTANCES OF PRINCIPALS (SUBJECT/VICTIM)</h4>
                <br>
                <p class="indent">{{$d->ma}}</p>
                <br>
                <br>
                <h4>  D. MATERIAL FACTS ESTABLISHED BY THE EVIDENCE GATHERED</h4>
                <br>
                <p class="indent">{{$d->cop}}</p>
                <br>
                <br>
                <h4>  G. RECOMMENDATIONS</h4>
                <br>
                <p class="indent">{{$d->recommendations}}</p>
                <br>
                @if($case_form->status != "Approved")
                <p style="font-size: 50px; color: #e82924;">This form is {{$case_form->status}}</p>
                @endif
                <br>
                <h4>  ANNEXES</h4>
                <br>
                @foreach($d_anexxes as $a)
                <h4>      <span class="indent " style="text-align: left">Annex {{$a->letter}}</span> <span class="indent">-</span> <span class="indent " style="text-align: right">{{$a->title}}  </span> </h4>
                @endforeach
                <br>
                <br>
                <br>
                <div style="padding-left: 500px">
                        Reported by:	
                        <p><strong>{{strtoupper($agent->first_name." ".$agent->middle_name." ".$agent->last_name)}}</strong></p>
                        <p class="text-center"><strong>{{$agent->division}}</strong></p>
                    </div>

                <br>
                <br>
                <br>


                I hereby certify that I have reviewed the foregoing report and I concur the findings and recommendations contained therein. 
                <br>
                <br>
                <br>
                <div style="padding-left: 500px">
                        
                        <p><strong>{{strtoupper($chief->first_name." ".$chief->middle_name." ".$chief->last_name)}}</strong></p>
                        <p class="text-center"><strong>Chief, {{$chief->division}}</strong></p>
                        
               
                </div>






            </div>

        </div>

    </body>
</html>	