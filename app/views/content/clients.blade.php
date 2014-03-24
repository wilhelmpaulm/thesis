<?php $clients = Client::all() ?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">NBI Clients</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Citizenship</th>
                    <th>Civil status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</td>
                    <td>{{$a->alias}}</td>
                    <td>{{$a->birthdate}}</td>
                    <td>
                        @if(strlen($a->birthdate) ==10)
                        {{  Time::getAge($a->birthdate)}}
                        <?php
//                            try {
//                              echo  Time::getAge($a->birthdate);
//                            } catch (Exception $exc) {
//                                echo $exc->getTraceAsString();
//                            }
//                                                    
                        ?>

                        @endif
                    </td>
                    <td>{{$a->sex}}</td>
                    <td>{{$a->citizenship}}</td>
                    <td>{{$a->civil_status}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#viewAgent_{{$a->id}}"><i class="fa fa-user"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>


@foreach($clients as $a)
<?php $addresses = Client_address::where("client_id", "=", $a->id)->get(); ?>
<?php $contacts = Client_contact::where("client_id", "=", $a->id)->get(); ?>


<div class="modal container fade" id="viewAgent_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update user status</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-2">
                    <img src="{{URL::asset('nbi/client/picture/'.$a->img_picture)}}" width="100%" class="img-rounded">
                </div>
                <div class="col-lg-3">
                    <h4>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</h4>
                    <hr>
                    <p>id : {{$a->id}}</p>
                    <p>alias : {{$a->alias}}</p>
                    <p>educational attainment : {{$a->educational_attainment}}</p>
                    <hr>
                    <p>hair color : {{$a->hair_color}}</p>
                    <p>weight : {{$a->weight}}</p>
                    <p>height : {{$a->height}}</p>
                    <p>complexion : {{$a->complexion}}</p>
                    <p>build : {{$a->build}}</p>
                    <p>race : {{$a->race}}</p>

                </div>
                <div class="col-lg-2">
                    <h4>Contacts</h4>
                    <hr>
                    @foreach($contacts as $c)
                    @if($c->type == "Email")<p class=""><i class="fa fa-envelope"></i> 
                        @elseif($c->type == "Mobile")<p class=""><i class="fa fa-phone"></i> 
                        @endif {{$c->contact}}</p>
                    @endforeach
                </div>

                <div class="col-lg-3">
                    <h4>Address</h4>
                    <hr>
                    @foreach($addresses as $a)
                    <p class="">{{$a->street}} </p>
                    <p class="">{{$a->city}} </p>
                    <p class="">{{$a->province}} </p>
                    <p class="">{{$a->barangay}} </p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm pull-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endforeach