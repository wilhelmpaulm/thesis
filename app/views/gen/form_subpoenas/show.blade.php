<?php $d = new DateTime($subpoena->date_requested); ?>
<?php $d2 = new DateTime($subpoena->date_signed); ?>
<?php $a = User::find($subpoena->agent_id); 


$case_form = Case_form::where("form_type", "=", "Subpoena")->where("form_id", "=", $subpoena->id)->first();

?>

<html>
    <title>
        Subpoena
    </title>
    <style>
        .indent {
            padding-left: 30px;

        }

    </style>
    <!--{{HTML::style("css/bootstrap.min.css")}}-->
    <body>
        <div style="width: 600px; margin-left: 80px; " class="">


            <br>
            <br>
            <img  src="{{URL::asset('nbi/forms/images/nbi_header.png')}}" height="90" width="380" style="margin: auto; display: block">

            <br>
            <br>

            <div id="" style="text-align:center; font-size:30px;"> SUBPOENA</div>


            <div style="margin:40px">
                <div id="" style="text-align: justify;  "> GREETING:</div><br>

                <p style="text-align: justify">
                    <i class="indent" > Under and by virtue of the authority vested in me by Republic Act No. 157, 
                        you are hereby commanded to be and appear in the </i>
                    {{$subpoena->location}}, Philippines, at 

                    {{$d->format("jS")}}

                    day of
                    {{$d->format("F")}},
                    {{$d->format("Y")}}
                    <i>
                        then and there to give your evidence in a certain investigation to be held at that 
                        time and place, conducted by the undersigned. 
                    </i>
                    <br>
                    @if($case_form->status != "Approved")
                <p style="font-size: 50px; color: #e82924;">This form is {{$case_form->status}}</p>
                @endif
                <br>
                <i class="indent">
                    Fail not, under the penalty of the law.
                </i>
                <br>
                <i class="indent">
                    Witness my hand and seal this
                </i>
                {{$d2->format("jS")}}

                day of
                {{$d2->format("F")}},
                {{$d2->format("Y")}}

                <br>

                <br>


                </p>
                <p style="text-align: right"> By  {{$a->last_name.", ".$a->first_name}}</p>

                <br>
                <p style="text-align: left">NBI FORM No. 11</p>
            </div>

        </div>

    </body>
</html>	