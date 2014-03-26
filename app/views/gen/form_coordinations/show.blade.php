<?php $date = new DateTime() ?>
<?php $date2 = new DateTime($c->date);
        
        
        
        
$case_form = Case_form::where("form_type", "=", "Coordination")->where("form_id", "=", $c->id)->first();
?>

<html>
    <title>
        Coordination Form
    </title>
    <style>
        .indent {
            padding-left: 30px;

        }

       

    </style>
    <!--{{HTML::style("css/bootstrap.min.css")}}-->
    <body>
        <div style="width: 680px; margin-left: 40px; background: white" class="">
            <br>
            <div style="display: inline-block; margin: 20px" >
                <img  src="{{URL::asset('nbi/forms/images/nbi_header.png')}}" height="90" width="380" style=" float: left">
                <div style="display: block; float: right; padding-left: 120px">
                    COORDINATION <br>FORM # {{$c->id}}<br>
                    DATE: {{$date->format("m/d/Y")}}
                </div>
            </div>




            <div style="margin:20px">

                <p>MISSION: To conduct surveillance and possible police operation</p>
                <p>AREA OF OPERATION: {{$c->area}}</p>
                <p>TIME OF OPERATION: {{$c->time}}</p>
                <p>DATE OF OPERATION: {{$c->date}}</p>
                <br>

                <table border="1" style="width: 100%; text-align: center">
                    <thead>
                        <tr>
                            <th colspan="2">MEMBERS</th>
                        </tr>
                        <tr>
                            <th>AGENCY</th>
                            <th>NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($c_members as $m)
                        <tr>
                            <td>{{$m->agency}}</td>
                            <td>{{$m->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <br>

                <table border="1" style="width: 100%;  text-align: center">
                    <thead>
                        <tr>
                            <th colspan="4">VEHICLES</th>
                        </tr>
                        <tr>
                            <th>VEHICLE</th>
                            <th>MODEL</th>
                            <th>COLOR</th>
                            <th>PLATE NO.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($c_vehicles as $v)
                        <tr>
                            <td>{{$v->vehicle}}</td>
                            <td>{{$v->model}}</td>
                            <td>{{$v->color}}</td>
                            <td>{{$v->plate_no}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <br>
                <br>
                 @if($case_form->status != "Approved")
                <p style="font-size: 50px; color: #e82924;">This form is {{$case_form->status}}</p>
                @endif
                <br>

                <div style=" display: block;">
                    <div style="width: 300px; display: block; float: right ">
                        PREPARED BY:
                        <br>
                        <br>
                        <hr>
                        <p>Signature over printed name of team leader</p>
                    </div>
                </div>




            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="margin:20px">
                <p style="text-align: center">
                    Entries below this line shall be accomplished by the radio operator / desk of receiving unit / station.</p>
                <hr>
                <br>
                <br>
                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                            <th colspan="4">COORDINATION</th>
                        </tr>
                        <tr>
                            <th>COORDINATION RECEIVED BY</th>
                            <th>OFFICE UNIT</th>
                            <th>DATE</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>


                <br>

                <div style=" display: block;">
                    <div style="width: 300px; display: block; float: right ">
                        COORDINATION MADE BY:

                        <br>
                        <br>
                        <hr>
                    </div>
                </div>




            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
    </body>
</html>	

