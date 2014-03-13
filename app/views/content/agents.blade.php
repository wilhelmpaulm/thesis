<?php $agents = User::where("division", "=", Auth::user()->division)->get() ?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">{{Auth::user()->division}} Employees</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Job Title</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Date hired</th>
                    <th>Civil status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($agents as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>@if($a->status == "Active")<p class="label label-success">
                            @elseif($a->status == "On Leave")<p class="label label-warning">
                            @elseif($a->status == "Resigned" || $a->status == "Inactive"  || $a->status == "Deceased")<p class="label label-danger">
                            @endif
                            {{$a->status}}</p></td>
                    <td>{{$a->job_title}}</td>
                    <td>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</td>
                    <td>{{$a->birthdate}}</td>
                    <td>{{Time::getAge($a->birthdate)}} years old</td>
                    <td>{{$a->sex}}</td>
                    <td>{{$a->date_hired}}</td>
                    <td>{{$a->civil_status}}</td>
                    <td>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#viewAgent_{{$a->id}}"><i class="fa fa-user"></i></button>
                           @if(Auth::user()->job_title == "Chief")
                            <button class="btn btn-warning" data-toggle="modal" data-target="#agent_{{$a->id}}"><i class="fa fa-wrench"></i></button>
                           @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>


@foreach($agents as $a)

<div class="modal  fade" id="agent_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update user status</h4>
        </div>
        <form action="{{URL::to('users/status/'.$a->id)}}" method="post">
        <div class="modal-body">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="true">
            <label>Status</label>
            <select name="status" class="form-control" required="true">
                <option>Active</option>
                <option>Inactive</option>
                <option>Deceased</option>
                <option>On Leave</option>
            </select>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm pull-right">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </form >
    </div>
</div>

<?php
    $contacts = User_contact::where("user_id", "=", $a->id)->get();
    $languages = User_language::where("user_id", "=", $a->id)->get();
    $addresses = User_address::where("user_id", "=", $a->id)->get();


    ?>
    <div class="modal fade container" id="viewAgent_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{$a->last_name.", ".$a->first_name}}</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{URL::asset('nbi/agent/picture/'.$a->file_picture)}}" width="100%" class="img-rounded">
                    </div>
                    <div class="col-lg-3">
                        <h4>{{$a->last_name.", ".$a->first_name." ".$a->middle_name}}</h4>
                        <p>{{$a->id}}</p>
                        <p>{{$a->division}}</p>
                        <p>{{$a->job_title}}</p>

                    </div>
                    <div class="col-lg-2">
                        <h4>Contacts</h4>
                        @foreach($contacts as $c)
                        @if($c->type == "Email")<p class=""><i class="fa fa-envelope"></i> 
                            @elseif($c->type == "Mobile")<p class=""><i class="fa fa-phone"></i> 
                            @endif {{$c->contact}}</p>
                        @endforeach
                    </div>
                    <div class="col-lg-2">
                        <h4>Languages Spoken</h4>
                        @foreach($languages as $l)
                        <p class="">- {{$l->language}}</p>
                        @endforeach

                    </div>
                    <div class="col-lg-3">
                        <h4>Address</h4>
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
                
                    <span class="btn-group btn-group-sm ">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
            </div>
        </div>
    </div>
@endforeach